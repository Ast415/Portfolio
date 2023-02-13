var LastBoxId = ""

function myFunction(e) {
    var boxId = e.target.id
    try {
        var boxEle = document.getElementById(boxId)
        var box = boxEle.getBoundingClientRect()
        LastBoxId = boxId
    }
    catch(err) {
        var boxEle = document.getElementById(LastBoxId)
        var box = boxEle.getBoundingClientRect()
    }
    var toolEle = boxEle.childNodes[1]
    var tool = toolEle.getBoundingClientRect()
    var x = e.clientX - box.x - tool.width/2;
    var y = e.clientY - box.y + 15;
    toolEle.style.left = x + "px";
    toolEle.style.top = y + "px";
}