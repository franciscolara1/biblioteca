function change() {
    const x = document.getElementById("textMenu1");

    x.style.color = "#FFD400";
    
}
function change2() {
    const x = document.getElementById("textMenu2");

    x.style.color = "#FFD400";
    
}
function change3() {
    const x = document.getElementById("textMenu3");

    x.style.color = "#FFD400";
    
}
function change4() {
    const x = document.getElementById("textMenu4");

    x.style.color = "#FFD400";
    
}
function normal(){
    for(var i=1; i<=4; i++){
        var el = document.getElementById("textMenu" + i);
        el.style.color = 'white';
    }
}