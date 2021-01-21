let anz=2;
let body = document.getElementsByTagName("body")[0];


let h1 = document.createElement("h1");
h1.innerHTML="Eine Liste mit "+anz+" Listenelementen";
body.appendChild(h1);

let div1=document.createElement("div");
body.appendChild(div1);
let ul=document.createElement("ul");
div1.appendChild(ul);

for (let index = 0; index < anz; index++) {
    let li=document.createElement("li");
    li.innerHTML="Punkt Nr. "+(index+1);
    ul.appendChild(li);
    
    let div2=document.createElement("div");
    div2.innerHTML="<img src='bild"+(index+1)+".jpg' width='10%'>"
    body.appendChild(div2);
}