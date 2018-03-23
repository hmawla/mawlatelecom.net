function moveNext() {
    var theDiv = document.getElementById('theDiv');
    var style = window.getComputedStyle(theDiv);
    var matrix = new WebKitCSSMatrix(style.webkitTransform);
    var pos = matrix.m41;
    theDiv.style.transform = "translateX(" + (pos + 50) + "px)";
}

function movePrev() {
    var theDiv = document.getElementById('theDiv');
    var style = window.getComputedStyle(theDiv);
    var matrix = new WebKitCSSMatrix(style.webkitTransform);
    var pos = matrix.m41;
    theDiv.style.transform = "translateX(" + (pos - 50) + "px)";
}