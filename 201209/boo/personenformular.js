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
    let res2=checkAlter();
    return res1&&res2;
}
function checkName(){
    let field=document.getElementsByName("vorname")[0];
    if (field.value.length<3) {
        field.setCustomValidity("-");
        return false;
    }
    field.setCustomValidity("");
    return true;
}
function checkAlter(){
    let field=document.getElementsByName("alter")[0];
    if (field.value<1||field.value>110) {
        field.setCustomValidity("-");
        return false;
    }
    field.setCustomValidity("");
    return true;
}