/*
 Title Case a Sentence
 
Return the provided string with the first letter of each word capitalized. 
Make sure the rest of the word is in lower case.

For the purpose of this exercise, you should also capitalize connecting
words like "the" and "of".

*/

function titleCase(str)
{
  var arr = str.split(" "); // split string to words
  
  for (var i in arr) 
  {
       arr[i] = arr[i].toLowerCase(); // convert word to lower  
       var arr2 = arr[i].split(""); // split word to letters
       arr2[0] = arr2[0].toUpperCase(); // convert
       arr[i] = arr2.join("");
  }
  
  str = arr.join(" ");
  
  return str;
}

// Use
titleCase("I'm a little tea pot");
