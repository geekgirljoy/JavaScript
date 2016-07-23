/*
Slasher Flick

Return the remaining elements of an array 
after chopping off n elements from the head.

The head meaning the beginning of the 
array, or the zeroth index

*/
function slasher(arr, howMany) 
{
  
	if (howMany >= arr.length)
	{
		arr = [];
	}
	else
	{
		for( i = 0; i < howMany; i++)
		{
			arr.shift();
		}
	}
  
  return arr;
}

// Use
slasher([1, 2, 3], 2);