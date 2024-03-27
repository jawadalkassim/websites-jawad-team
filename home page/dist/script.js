var y=document.getElementById('bu')
let cards=document.getElementById('more')
y.onclick=function(){
    cards.style.display="grid"
    y.style.display="none"
}
function myFunction(x) {
    if (x.matches) { // If media query matches
        y.style.display="flex"
        cards.style.display = "none"
        
    } else {
        y.style.display="none"
        cards.style.display = "grid"
    }
}

// Create a MediaQueryList object
var x = window.matchMedia("(max-width: 768px)")

// Call listener function at run time
myFunction(x);

// Attach listener function on state changes
x.addEventListener("change", function() {
    myFunction(x);
});



