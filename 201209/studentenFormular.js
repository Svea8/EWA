let body=document.getElementsByTagName("body")[0];

function modulHinzufugen(){
    
    let modulpapa=document.getElementById("modalpapa");

    let modulcontainerpapa=document.createElement("div");
    modulcontainerpapa.classList.add("neuesModul");
    modulpapa.appendChild(modulcontainerpapa);

    let modulcontainer=document.createElement("div");
    modulcontainer.classList.add("form-check-inline");
    modulcontainerpapa.appendChild(modulcontainer);

    let modullabel1=document.createElement("label");
    modullabel1.innerHTML="Modul";
    modulcontainer.appendChild(modullabel1);

    let modullabel2=document.createElement("label");
    modullabel2.innerHTML="Note";
    modulcontainer.appendChild(modullabel2);

    let modulinput1=document.createElement("input");
    modulinput1.classList.add("form-control");
    modulinput1.setAttribute("type","text");
    modulinput1.setAttribute("name","module[]");
    modulinput1.setAttribute("required","");
    modulinput1.setAttribute("minlength","3");
    modullabel1.appendChild(modulinput1); 
    
    let modulinput2=document.createElement("input");
    modulinput2.classList.add("form-control");
    modulinput2.setAttribute("type","number");
    modulinput2.setAttribute("name","noten[]");
    modulinput2.setAttribute("required","");
    modulinput2.setAttribute("min","1");
    modulinput2.setAttribute("max","5");
    modullabel2.appendChild(modulinput2);            

   
}

function modulEntfernen(){
    let neuemodule=document.getElementsByClassName("neuesModul");
    let delmodul=neuemodule[(neuemodule.length)-1];
    delmodul.remove();
}