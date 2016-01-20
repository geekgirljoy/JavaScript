// Steamroller

/*

Flatten a nested array. You must account 
for varying levels of nesting.

*/
function steamroller(arr) 
{  
  for(i = 0; i < arr.length; i++)
   {
      while(Array.isArray(arr[i]))
        {
           arr = arr.reduce(function(a, b) {return a.concat(b);}, []);
        }
   }

  return arr;
}

// Use
// steamroller([1, [2], [3, [[4]]]]);
