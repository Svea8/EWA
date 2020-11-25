rezepteLesen();

function rezeptAufbauen(rezept,zutaten){
    let a=JSON.parse(rezept);
    let z=JSON.parse(zutaten);

    let body=document.getElementsByTagName("body")[0];
    

    for (let index = 0; index < a.length; index++) {
        //cards aufbauen
        let div1=document.createElement("div");
        div1.classList.add("card-columns","container");
        body.appendChild(div1);

        let div2=document.createElement("div");
        div2.classList.add("card","border","border-primary");
        div1.appendChild(div2);

        let img=document.createElement("img");
        img.classList.add("card-img-top");
        img.src=a[index].bild;
        div2.appendChild(img);

        let div3=document.createElement("div");
        div3.classList.add("card-body");
        div2.appendChild(div3);

        let h4=document.createElement("h4");
        h4.innerHTML=a[index].name;
        div3.appendChild(h4);

        let p1=document.createElement("p");
        p1.classList.add("card-text");
        p1.innerHTML=a[index].kurztext+"</br>"+a[index].beschreibung;
        div3.appendChild(p1);

        let butt1=document.createElement("button");
        butt1.setAttribute("type","button");
        butt1.classList.add("btn","btn-primary");
        butt1.setAttribute("data-toggle","modal");
        butt1.setAttribute("data-target","#mod"+index+1);
        butt1.innerHTML="Details";
        div2.appendChild(butt1);
        
        //modale aufbauen
        let mod1=document.createElement("div");
        mod1.classList.add("modal");
        modid="mod"+index+1;
        mod1.setAttribute("id",modid);
        body.appendChild(mod1);

        let mod2=document.createElement("div");
        mod2.classList.add("modal-dialog");
        mod1.appendChild(mod2);

        let mod3=document.createElement("div");
        mod3.classList.add("modal-content");
        mod2.appendChild(mod3);

        let modhead=document.createElement("div");
        modhead.classList.add("modal-header");
        mod3.appendChild(modhead);

        let h5=document.createElement("h5");
        h5.classList.add("modal-title");
        h5.innerHTML=a[index].name;
        modhead.appendChild(h5);

        let buttmod=document.createElement("button");
        buttmod.setAttribute("type","button");
        buttmod.setAttribute("data-dismiss","modal");
        buttmod.innerHTML="X";
        buttmod.classList.add("close");
        modhead.appendChild(buttmod);

        let modbod=document.createElement("div");
        modbod.classList.add("modal-body");
        mod3.appendChild(modbod);

        let img2=document.createElement("img");
        img2.setAttribute("width","30%");
        img2.src=a[index].bild;
        modbod.appendChild(img2);

        let modp1=document.createElement("p");
        modp1.innerHTML=a[index].kurztext;
        modbod.appendChild(modp1);

        let modp2=document.createElement("p");
        modp2.innerHTML="<strong>Beschreibung</strong><br/>"+a[index].beschreibung;
        modbod.appendChild(modp2);

        for (let i = 0; i < z.length; i++) {
            if (z[i].rezeptid==a[index].id) {
                let modp3=document.createElement("p");
                modp3.innerHTML=z[i].name;
                modbod.appendChild(modp3);
            }
            
        }

    }
}


function rezepteLesen(){
    let ajax = new XMLHttpRequest();
    if(ajax!=null) {
        ajax.open("POST", "kochbuch.php");
        ajax.onreadystatechange = function(){
            if(this.readyState == 4){
                if(this.status == 200){
                    zutatenLesen(this.responseText);
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

function zutatenLesen(rez){
    let ajax = new XMLHttpRequest();
    if(ajax!=null) {
        ajax.open("POST", "kochbuchZ.php");
        ajax.onreadystatechange = function(){
            if(this.readyState == 4){
                if(this.status == 200){
                    rezeptAufbauen(rez,this.responseText);
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