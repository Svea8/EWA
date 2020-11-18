let studenten=[{"id":"1","name":"Svea","mnr":"37209","studiengang":"DC-7","noten":[{"id":"1","modul":"mathe","note":"3.7","studid":"1"},{"id":"2","modul":"chin","note":"1.3","studid":"1"}]},{"id":"2","name":"Naomi","mnr":"55209","studiengang":"DC-7","noten":[]},{"id":"3","name":"Zhihui","mnr":"37559","studiengang":"DC-7","noten":[{"id":"3","modul":"chin","note":"1.3","studid":"3"}]}];

function cardsAufbauen(studenten){
    let cardmom=document.getElementsByClassName("card-columns")[0];
    for (let index = 0; index < studenten.length; index++) {
        let card=document.createElement("div");
        let cardbody=document.createElement("div");
        card.classList.add("card","border","border-primary");
        cardbody.classList.add("card-body");

        let h3=document.createElement("h3");
        h3.classList.add("card-title");
        h3.innerHTML=studenten[index].name;

        let h5=document.createElement("h5");
        h5.classList.add("card-subtitle");
        h5.innerHTML=studenten[index].studiengang;

        let h=document.createElement("h5");
        h.classList.add("card-subtitle");
        h.innerHTML=studenten[index].mnr;

        let p1=document.createElement("p");
        p1.classList.add("card-text");
        p1.innerHTML=studenten[index].noten;

        cardmom.appendChild(card);
        card.appendChild(cardbody);
        cardbody.appendChild(h3);
        cardbody.appendChild(h5);
        cardbody.appendChild(h);
        cardbody.appendChild(p1);
    }
}
cardsAufbauen(studenten);