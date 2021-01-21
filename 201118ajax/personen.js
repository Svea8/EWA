
//let a=[{"id":"1","altersan":"31","name":"Ute"},{"id":"2","altersan":"3","name":"hi"}];
//let b=tabelleAufbauen(a);
personenLesen();

function tabelleAufbauen(personen){
    let aa=JSON.parse(personen);
    let table=document.getElementsByTagName("tbody")[0];
    for (let index = 0; index < aa.length; index++) {
        let tr=document.createElement("tr");
        table.appendChild(tr);

        let td1=document.createElement("td");
        td1.innerHTML=aa[index].id;
        tr.appendChild(td1);

        let td2=document.createElement("td");
        td2.innerHTML=aa[index].name;
        tr.appendChild(td2);

        let td3=document.createElement("td");
        td3.innerHTML=aa[index].altersan;
        tr.appendChild(td3);
        
        
    }
}

function personenLesen(){
    let ajax = new XMLHttpRequest();
    if(ajax!=null) {
        ajax.open("POST", "personen copy.php");
        ajax.onreadystatechange = function(){
            if(this.readyState == 4){
                if(this.status == 200){
                    tabelleAufbauen(this.responseText);
                }
                else{
                    alert(this.statusText);
                }
            }
        }
        ajax.send(null);
    }
    else {
        alert("Ihr Browser unterstützt kein Ajax!");
    }
}