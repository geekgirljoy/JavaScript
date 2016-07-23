// Spinal Tap Case

/*

Convert a string to spinal case. 
Spinal case is:
all-lowercase-words-joined-by-dashes.

*/
function spinalCase(str) {

    str = str.split(/(?=[A-Z])/).join("-");
    str = str.replace(/[\s -@_]+/gi, '-').toLowerCase();
  
  return str;
}

// Use
spinalCase('This Is Spinal Tap');