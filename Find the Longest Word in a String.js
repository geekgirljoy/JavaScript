// Find the Longest Word in a String

/*
Return the length of the longest word in the provided sentence.

Your response should be a number.

*/

function findLongestWord(str) 
{
  
  var arr = str.split(" ");
  var len = 0;
  for( i = 0; i < arr.length; i++ ) { if( arr[i].length > len ) { len = arr[i].length; } }
  
  return len;
}

// Use
// findLongestWord("The quick brown fox jumped over the lazy dog");
