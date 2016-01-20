// Diff Two Arrays

/*

Compare two arrays and return a new array 
with any items only found in one of the 
original arrays.

*/
function diff(arr1, arr2) 
{
	var newArr = [];

	for(i = 0; i < arr1.length; i++)
	{
		if (arr2.indexOf(arr1[i]) === -1){ newArr.push(arr1[i]); }
	}
	for(i = 0; i < arr2.length; i++)
	{
		if (arr1.indexOf(arr2[i]) === -1){ newArr.push(arr2[i]); }
	}

	return newArr;
}

// Use
// diff([1, 2, 3, 5], [1, 2, 3, 4, 5]);
