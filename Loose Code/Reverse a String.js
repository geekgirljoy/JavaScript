// Reverse a String
function reverseString(str) 
{
  /*var arr = str.split("");
  arr.reverse();
  str = arr.join("");
  return str;*/
  return str.split("").reverse().join("");
}

// Use
reverseString("hello");
