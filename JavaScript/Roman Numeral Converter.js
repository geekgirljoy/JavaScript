// Roman Numeral Converter

/*

Convert the given number into a roman 
numeral.

All roman numerals answers should be 
provided in upper-case.

*/
function convert(num)
{
    var romanNum = "";
	modernArr = [1000, 900, 500, 400, 100, 90, 50, 40, 10, 9, 5, 4, 1];
	romanArr = ["M", "CM", "D", "CD", "C", "XC", "L", "XL", "X", "IX", "V", "IV", "I"];
    for (var i = 0; i < modernArr.length; i++) 
	{
        while (num >= modernArr[i]) 
		{
            romanNum += romanArr[i];
            num -= modernArr[i];
        }
    }
    return romanNum;
}

// Use
// convert(36);
