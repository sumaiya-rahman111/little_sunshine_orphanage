var form1 = document.getElementById("form1");
var form2 = document.getElementById("form2");

var next1 = document.getElementById("next1");
var back1 = document.getElementById("back1");

var progress = document.getElementById("progress");

next1.onclick = function(){
    form1.style.left = "-450px";
    form2.style.left = "40px";
    progress.style.width = "400px";
}

back1.onclick = function(){
    form1.style.left = "40px";
    form2.style.left = "450px";
    progress.style.width = "200px";
}