 personenLesen();

function cardsAufbauen(a){
    let studenten=JSON.parse(a); 
    let cardmom=document.getElementsByClassName("card-columns")[0];
    for (let index = 0; index < studenten.length; index++) {

        let cardbody=body(cardmom);

        inhalt(cardbody,studenten,index);

        noten(cardbody,studenten,index);         
    }
}

function body(cardmom){
    let card=document.createElement("div");
    let cardbody=document.createElement("div");
    card.classList.add("card","border","border-primary");
    cardbody.classList.add("card-body");
    cardmom.appendChild(card);
    card.appendChild(cardbody);

    return cardbody;
}
function inhalt(cardbody,studenten,index){
    let img=document.createElement("img");
    img.classList.add("card-img-top");
    img.setAttribute("src","dom/bild1.jpg");
    cardbody.appendChild(img);
    
    let h3=document.createElement("h3");
    h3.classList.add("card-title");
    h3.innerHTML=studenten[index].name;
    cardbody.appendChild(h3);
    
    let h5=document.createElement("h5");
    h5.classList.add("card-subtitle");
    h5.innerHTML=studenten[index].studiengang;
    cardbody.appendChild(h5);

    let h=document.createElement("h5");
    h.classList.add("card-subtitle");
    h.innerHTML=studenten[index].mnr;
    cardbody.appendChild(h);
}
function noten(cardbody,studenten,index){
    for (let i = 0; i < studenten[index].noten.length; i++) {
        let p1=document.createElement("p");
        p1.classList.add("card-text");
        p1.innerHTML=studenten[index].noten[i].modul+": "+studenten[index].noten[i].note;
        cardbody.appendChild(p1);
    }  
}

function personenLesen(){
    let ajax = new XMLHttpRequest();
    if(ajax!=null) {
        ajax.open("POST", "jsonstudent copy.php");
        ajax.onreadystatechange = function(){
            if(this.readyState == 4){
                if(this.status == 200){
                    cardsAufbauen(this.responseText);
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