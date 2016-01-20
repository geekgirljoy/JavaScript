// Return Largest Numbers in Arrays

/*

Return an array consisting of the largest 
number from each provided sub-array. 

*/
function largestOfFour(arr) 
{
  var myArr = [];
 
  for(i = 0; i <= arr.length; i++)
  {
      if (typeof(arr[i]) != "undefined")
      {
        myArr[i] = arr[i].sort(function(a, b) { return b - a;});
        arr[i] = myArr[i][0];
      }
  }
  
  return arr;
}

// Use
// largestOfFour([[4, 5, 1, 3], [13, 27, 18, 26], [32, 35, 37, 39], [1000, 1001, 857, 1]]);

