//Coordinator used to display scroll position in a fixed label
var coordinator = document.getElementById("coordinates");

//Begin of the scroll function
function doScroll(tgt) {
    //The default initial scroll speed in pixels
    var ispeed = 1;

    //This variable is the used one inside the code
    var speed = ispeed;

    //Default acceleration
    var accceleration = 0.05;

    //used to get the document height
    var body = document.body,
        html = document.documentElement;
    //Here is the variable the containes the last scroll pixel in the document
    //So we get the document height and we subtract the window size from it
    //We added -2 to remove any uneeded decimal digits
    var docheight = Math.max(body.scrollHeight, body.offsetHeight,
        html.clientHeight, html.scrollHeight, html.offsetHeight) - window.innerHeight - 2;

    var target = document.getElementById(tgt);
    var scrolltgt = target.offsetTop;

    //Start point
    var starter = setInterval(startscrolling,10);

    //This is where the magic happens
    function startscrolling() {
        if(window.scrollY >= scrolltgt || window.scrollY >= docheight){
            clearInterval(starter);
        }
        else
        {
            //Accelerate in the first half of the distance between the start point and the target point
            //Decelerate in the second half
            if(window.scrollY < scrolltgt/2){
                //Increaser the speed by the acceleration
                speed += accceleration;
            }
            //Stop decelerating when the speed drops below 1
            else if(window.scrollY > scrolltgt/2 && speed > 1)
            {
                speed -= accceleration;
            }
            
            //Scroll by speed duhh ;)
            //Magic, magic everywhere!!!
            window.scrollBy(0,speed);
        }
    }
}

//Used to display the scroll position on the screen
window.onscroll = function checkscroll() {
    coordinator.innerHTML = window.scrollY;
}