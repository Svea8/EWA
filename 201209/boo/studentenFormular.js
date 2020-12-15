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

function bootstrapValidate() {
    let form = document.getElementsByTagName("form")[0];
    if (checkAll() === false) {
        event.preventDefault();
        event.stopPropagation();
        form.classList.add('was-validated');
        return false;
    }
    form.classList.add('was-validated');
    return true;
}
function checkAll(){
    let res1=checkName();
    let res2=checkMnr();
    let res3=checkSg();
    let res4=checkMn();
    let res5=checkNote();
    return res1&&res2&&res3&&res4&&res5;
}
function checkName(){
    let field=document.getElementsByName("name")[0];
    if (field.value.length<3) {
        field.setCustomValidity("-");
        return false;
    }
    field.setCustomValidity("");
    return true;
}
function checkMnr(){
    let field=document.getElementsByName("mnr")[0];
    if (field.value.length!=5) {
        field.setCustomValidity("-");
        return false;
    }
    field.setCustomValidity("");
    return true;
}
function checkSg(){
    let field=document.getElementsByName("sgang")[0];
    if (field.value.length<1) {
        field.setCustomValidity("-");
        return false;
    }
    field.setCustomValidity("");
    return true;
}
function checkMn(){
    let field=document.getElementsByName("module[]");
    for (let i = 0; i < field.length; i++) {
        if (field[i].value.length<3) {
        field[i].setCustomValidity("-");
        return false;
        }  
        field[i].setCustomValidity("");
    }
    return true;
}

function checkNote(){
    let field=document.getElementsByName("noten[]");
    for (let i = 0; i < field.length; i++) {
        if (field[i].value.length<1||field[i].value>6||field[i].value<0) {
        field[i].setCustomValidity("-");
        return false;
        }  
        field[i].setCustomValidity("");
    }
    return true;
}