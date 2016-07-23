// Missing letters

/*

Find the missing letter in the passed letter 
range and return it.

If all letters are present in the range, return 
undefined.

*/
function fearNotLetter( str ) 
{
	var alphabet = ["a", "b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
	var startAt = 0; while(alphabet[startAt] != str[0]){startAt++;}
	var stopAt = startAt; while(alphabet[stopAt] != str[str.length-1]){stopAt++;}
	var i = startAt;
    var j = 0;
	
	while ( i < stopAt )
	{
		if ( alphabet[i] != str[j] ){ return alphabet[i]; }
		i++;
		j++;
	}
	
  return undefined;
}

// Use
fearNotLetter("abce"); // d
fearNotLetter("abcdefghjklmno"); // i
fearNotLetter("bce"); // undefined
fearNotLetter("yz"); // undefined