function myFunction(e) {
    var box = document.getElementById('box').getBoundingClientRect()
    var x = e.clientX - box.x + 10;
    var y = e.clientY - box.y + 10;
    document.getElementById("tooltip").style.left = x + "px";
    document.getElementById("tooltip").style.top = y + "px";
}