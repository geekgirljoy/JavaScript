/*
Sum All Numbers in a Range

We'll pass you an array of two numbers. 
Return the sum of those two numbers and
all numbers between them.

The lowest number will not always come first.

*/
function sumAll(arr) 
{
  var big = Math.max.apply(null, arr);
  var small = Math.min.apply(null, arr);
  var sum = 0;
  for(i = small; i <= big; i++) { sum += i; }
  
  return sum;
}

// Use
// sumAll([1,4]);