// Caesars Cipher

/*

One of the simplest and most widely known 
ciphers is a Caesar cipher, also known as a 
shift cipher. In a shift cipher the meanings 
of the letters are shifted by some set amount.

A common modern use is the ROT13 cipher, 
where the values of the letters are shifted by 
13 places. Thus 'A' ? 'N', 'B' ?  'O' and so on.

Write a function which takes a ROT13 
encoded string as input and returns a 
decoded string.

All letters will be uppercase. Do not 
transform any non-alphabetic character 
(i.e. spaces, punctuation), but do pass them 
on.

*/
function rot13(str)
{
    str = str.split("");
    var regEx = /^[^\d\s!@£$.?%^&*()+=]+/;

    for( i = 0; i < str.length; i++ )
    {
        if( !str[i].match( regEx ) ){ currChar = str[i].charCodeAt(); }
        else
        {
            // + the shift of 12 because we count from 0
            currChar = str[i].charCodeAt() + parseInt( "12".toString( 16 ) );
            if(currChar >= 90){ currChar = ( currChar - 90 ) + 65; } //A = 65    Z = 90
            else { currChar++; }
        }
        str[i] = String.fromCharCode( currChar );
    }
    return str.join("");
}

// Use
// rot13("GUR DHVPX OEBJA QBT WHZCRQ BIRE GUR YNML SBK.");