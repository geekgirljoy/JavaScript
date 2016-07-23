// Arguments Optional

/*

Create a function that sums two arguments 
together. If only one argument is provided, 
then return a function that expects one 
argument and returns the sum.

For example, add(2, 3) should return 5,
and add(2) should return a function.

Calling this returned function with a 
single argument will then return the sum:

var sumTwoAnd = add(2);
sumTwoAnd(3) returns 5.

If either argument isn't a valid number, 
return undefined.

*/
function add() 
{
	var args = Array.prototype.slice.call(arguments);
  
	if(args.length > 1)
	{
		sum = 0;
		for(i=0; i < args.length; i++)
		{
			if (typeof args[i] === "number")
			{
				sum += args[i];
			}
			else{return undefined;}
		}
		return sum;
	}
	else
	{
		if (typeof args[0] === "number")
		{
			return function(n)
			{ 
				if (typeof n === "number")
				{
					return args[0]+n; 
				}
			};
		}
	}
  
  return undefined;
}

// Use
add(2)([3]);
