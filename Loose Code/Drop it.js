// Drop it

/*

Drop the elements of an array 
(first argument), starting from the front, 
until the predicate (second argument) 
returns true.

Return the rest of the array, otherwise 
return an empty array.

*/
function drop(arr, func) 
{
  var len = arr.length;
  for(i = 0; i < len; i++)
  {
    if (!func(arr[0])){ arr.shift(); }
  }
  return arr; 
}

// Use
drop([1, 2, 3], function(n) {return n < 3; });      // [1, 2]
drop([1, 2, 3, 9, 2], function(n) {return n > 2;}); // [3, 9, 2]
drop([1, 2, 3, 4], function(n) {return n > 5;});    // []
