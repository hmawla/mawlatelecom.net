//prevent scrolling
document.body.style.overflow = 'hidden';

//keeps calling until the page stops loading
var loading = setInterval(function() {
    if(document.readyState === 'complete') {
        stoploadinginterval = setInterval(stoploadingf,10);
        document.body.style.overflow = 'scroll';
        clearInterval(loading);
    }    
}, 100);

//Declare a variable that holds the loading screen
var loadingscreen = document.getElementById("loadingscreen");

//Special case for opacity, it can only be taken using getComputedStyle, donno why yet :P
var objOpacityTemp = window.getComputedStyle(loadingscreen).getPropertyValue("opacity");
var objOpacity = objOpacityTemp;

//interval thats stop the loading screen from showing
var stoploadinginterval;

//Third Frame, it fades the object by decreasing opacity gradely(Not sure if it is an actual word :P)
function stoploadingf() {
    //Somehow the opacity skips value = 0 so used less than comparison
    if(objOpacity < 0){
        //Since the opacity will skip 0, this will restore it and remove negative opacity...
        loadingscreen.style.opacity = 0;
        //Stop the third animation
        clearInterval(stoploadinginterval);
        
    }
    else
    {
        objOpacity -= 0.01;
        //Can set opacity but cant get opacity ;-;
        loadingscreen.style.opacity = objOpacity;
    }
}