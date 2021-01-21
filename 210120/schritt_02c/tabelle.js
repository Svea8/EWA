
/*
    Tabelle mit allen Personen aus dem Array "members" aufbauen
    In einer echten Anwendung würde das Array membres aus einem JSON-String ausgelesen werden
*/
function tabelleAufbauen() {

    let members = beispielDaten();
    let table = document.getElementsByTagName("table")[0];
    table.innerHTML = "";

    for (let index = 0; index < members.length; index++) {
        const element = members[index];
        let tr = document.createElement("tr");
        table.appendChild(tr);
        let td1 = document.createElement("td");
        td1.innerHTML = element[1];
        tr.appendChild(td1);
        let td2 = document.createElement("td");
        let button = document.createElement("button");
        button.setAttribute("type", "button");
        button.setAttribute("onclick", "hinzufuegen(" + element[0] + ")");
        button.innerHTML = "Hinzufügen";
        td2.appendChild(button);
        tr.appendChild(td2);
    }
}

function beispielDaten() {
    let members = new Array();

    members[0] = new Array();
    members[0][0] = 1;
    members[0][1] = "Ute";

    members[1] = new Array();
    members[1][0] = 2;
    members[1][1] = "Hans";

    members[2] = new Array();
    members[2][0] = 3;
    members[2][1] = "Peter";
    return members;
}

/*
    Aufruf des PHP-Skripts zum Hinzufügen einer Person zum Team
    Dort wird die Id der Person zur aktuellen Session hinzugefügt
*/ 
function hinzufuegen(id) {
    let ajax = new XMLHttpRequest();
    if (ajax != null) {
        ajax.open("POST", "teamSpeichern.php");
        ajax.onreadystatechange = function () {
            if (this.readyState == 4) {
                if (this.status == 200) {
                    alert("Zum Team hinzugefügt");
                }
            }
        }
        let eingaben = new FormData();
        eingaben.append("id", id);
        ajax.send(eingaben);
    }
}

/*
    Aufruf des PHP-Skripts zum Auslesen aller Ids aus dem Team
   Das PHP-Skript liefert die Session_Inhalte als JSON (Array) zurück
*/
function teamAnzeigen() {
    let ajax = new XMLHttpRequest();
    if (ajax != null) {
        ajax.open("GET", "teamAuslesen.php");
        ajax.onreadystatechange = function () {
            if (this.readyState == 4) {
                if (this.status == 200) {
                    let json = JSON.parse(this.responseText);
                    teamAuflisten(json);
                }
            }
        }
        ajax.send(null);
    }
}


function teamAuflisten(json) {

    let members = beispielDaten();
    let table = document.getElementsByTagName("table")[0];
    table.innerHTML = "";

    for (let index = 0; index < json.length; index++) {
        const id = json[index];
        let idIndex = sucheImArray(members, id);
        if (idIndex > -1) {
            let tr = document.createElement("tr");
            table.appendChild(tr);
            let td1 = document.createElement("td");
            td1.innerHTML = members[idIndex][1];
            tr.appendChild(td1);
            let td2 = document.createElement("td");
            let button = document.createElement("button");
            button.setAttribute("type", "button");
            button.setAttribute("onclick", "entfernen(" + members[idIndex][0] + ")");
            button.innerHTML = "Entfernen";
            tr.appendChild(td2);
            td2.appendChild(button);
        }
    }
}

function sucheImArray(a, x) {
    let result = -1;
    let i = 0;
    while (result == -1 && i < a.length) {
        if (a[i][0] == x) {
            result = i;
        }
        i++;
    }
    return result;
}

/*
    Aufruf des PHP-Skripts zum Entfernen einer Id aus dem Team
   Das PHP-Skript entfernt die übergebene Id aus der Session
*/
function entfernen(id) {
    let ajax = new XMLHttpRequest();
    if (ajax != null) {
        ajax.open("POST", "ausTeamEntfernen.php");
        ajax.onreadystatechange = function () {
            if (this.readyState == 4) {
                if (this.status == 200) {
                    teamAnzeigen();
                }
            }
        }
        let eingaben = new FormData();
        eingaben.append("id", id);
        ajax.send(eingaben);
    }
}


/*
    Aufruf des PHP-Skripts zum Zurücksetzen des Teams
   Das PHP-Skript setzt die Session auf ein leeres Array
*/
function zuruecksetzen() {
    let ajax = new XMLHttpRequest();
    if (ajax != null) {
        ajax.open("POST", "teamZuruecksetzen.php");
        ajax.onreadystatechange = function () {
            if (this.readyState == 4) {
                if (this.status == 200) {
                    teamAnzeigen();
                }
            }
        }

        ajax.send(null);
    }
}
