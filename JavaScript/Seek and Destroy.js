// Seek and Destroy

/*

You will be provided with an initial array 
(the first argument in the destroyer function), 
followed by one or more arguments. 

Remove all elements from the initial array 
that are of the same value as these 
arguments.

*/
function destroyer(arr) 
{
  var workingSet = arguments[0], remove = [];

  for( i=1; i < arguments.length; i++ ){ remove.push(arguments[i]); }
  
  workingSet = workingSet.filter(function( value ){ return remove.indexOf(value) === -1; });
  
  return workingSet;
}

// Use
// destroyer([1, 2, 3, 5, 1, 2, 3], 2, 3);