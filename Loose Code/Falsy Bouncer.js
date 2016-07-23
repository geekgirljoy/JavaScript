// Falsy Bouncer

/*

Remove all falsy values from an array.

Falsy values in javascript are:
false, null, 0, "", undefined, and NaN.

*/
function bouncer(arr) 
{
  arr = arr.filter(Boolean);
  
  return arr;
}


// Use
bouncer(["a", "b", null, "c"]);