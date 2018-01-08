function myMove() {
    //Get elements from document
    var container = document.getElementById("Container");
    var object = document.getElementById("Object");

    //Assign styles to variables
    var objHeight = object.offsetHeight;
    var objTop = object.offsetTop;
    var conWidth = container.offsetWidth;

    //Special case for opacity, it can only be taken using getComputedStyle, donno why yet :P
    var objOpacityTemp = window.getComputedStyle(object).getPropertyValue("opacity");
    var objOpacity = objOpacityTemp;

    //A simple counter used in the first Frame
    var c = 0;

    //Start the first transition usinf function fFrame(First Frame) with 5ms interval
    var first = setInterval(fFrame, 5);

    //Declare the rest intervals publicly so they don't die inside the functions
    var second;
    var third;

    
    

    //First Frame it basicly widen the Container and highten the Object inside it
    function fFrame() {
        if(c == 350){
            //Stop the animation when done
            clearInterval(first);
            //Start second Frame animation
            second = setInterval(sFrame, 5);
        }
        else
        {

            //Basicly used to follow the right value
            conWidth++;
            objHeight++;
            //here is this simple counter again used with love
            c++;

            //Here the magic happens, 'px' is used to define the value in pixels
            container.style.width = conWidth + 'px';
            object.style.height = objHeight + 'px';
        }
    }

    //Second Frame, this centers the object in the container and restore its original height
    function sFrame() {
        if (objHeight == 50){
            //Stop the animation when done
            clearInterval(second);
            //Start third Frame animation
            third = setInterval(tFrame, 10);
        }
        else{
            
            objHeight--;
            //Stop moving the object when it reaches the center
            if (objTop != 150){
                objTop++;
                object.style.top = objTop + 'px';
            }
            
            //OOOH More Magic!!!
            object.style.height = objHeight + 'px';
            
        }
    }

    //Third Frame, it fades the object by decreasing opacity gradely(Not sure if it is an actual word :P)
    function tFrame() {
        //Somehow the opacity skips value = 0 so used less than comparison
        if(objOpacity < 0){
            //Since the opacity will skip 0, this will restore it and remove negative opacity...
            object.style.opacity = 0;
            //Stop the third animation
            clearInterval(third);
            
        }
        else
        {
            objOpacity -= 0.01;
            //Can set opacity but cant get opacity ;-;
            object.style.opacity = objOpacity;
        }
    }
    
}