// Chunky Monkey

/*

Write a function that splits an array 
(first argument) into groups the length of 
size (second argument) and returns them 
as a multidimensional array.

*/
function chunk(arr, size)
{
  var myArr = [],
  i = 0;

  while (i < arr.length) 
  {
    myArr.push(arr.slice(i, i += size));
  }

  
  return myArr;
}

// Use
chunk(["a", "b", "c", "d"], 2);