var coordinator = document.getElementById("coordinates");
function doScroll() {
    var speed = 2;
    var accceleration = 1;

    var target = document.getElementById("target");
    var scrolltgt = target.offsetTop;
    alert(scrolltgt);

    var starter = setInterval(startscrolling,10);

    function startscrolling() {
        if(window.scrollY >= scrolltgt){
            clearInterval(starter);
            alert(window.scrollY);
        }
        else
        {
            window.scrollBy(0,speed);
        }
    }
}
window.onscroll = function checkscroll() {
    coordinator.innerHTML = window.scrollY;
}