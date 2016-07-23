function MouseOverBTN(div)
{  
  $(div).animate({opacity: '0.5', width: '100px'} );
}
function MouseOutBTN(div)
{
  $(div).animate({opacity: '1', width: '150px'});
}


/////////////////////////
// Define Buttons
/////////////////////////

// Button 1
var button1 = $("<div>", {id: "button1", class: "button"});
var button1Action = $("<a>", {href: "#", text: "Button 1"});

// Button 2
var button2 = $("<div>", {id: "button2", class: "button"});
var button2Action = $("<a>", {href: "#", text: "Button 2"});

// Button 3
var button3 = $("<div>", {id: "button3", class: "button"});
var button3Action = $("<a>", {href: "#", text: "Button 3"});

// Button 4
var button4 = $("<div>", {id: "button4", class: "button"});
var button4Action = $("<a>", {href: "#", text: "Button 4"});

/////////////////////////
// Add Buttons
/////////////////////////
$("#buttonbar").append(button1);
$("#buttonbar").append(button2);
$("#buttonbar").append(button3);
$("#buttonbar").append(button4);

/////////////////////////
//Add Button Links
/////////////////////////
button1.append(button1Action);
button2.append(button2Action);
button3.append(button3Action);
button4.append(button4Action);

/////////////////////////
// Animate
/////////////////////////
button1.hover(   
    function() { MouseOverBTN( this ) }, 
    function() { MouseOutBTN( this ) }
);
button2.hover(   
    function() { MouseOverBTN( this ) }, 
    function() { MouseOutBTN( this ) }
);
button3.hover(   
    function() { MouseOverBTN( this ) }, 
    function() { MouseOutBTN( this ) }
);
button4.hover(   
    function() { MouseOverBTN( this ) }, 
    function() { MouseOutBTN( this ) }
);