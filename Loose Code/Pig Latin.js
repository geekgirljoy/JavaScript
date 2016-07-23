// Pig Latin

/*

Translate the provided string to pig latin.

Pig Latin takes the first consonant 
(or consonant cluster) of an English word, 
moves it to the end of the word and suffixes 
an "ay".

If a word begins with a vowel you just add 
"way" to the end.

*/
function translate(str) 
{
  var isVowel = false;
  var hasL = false;
  var vowles = ["a","e", "i", "o","u", "y"];
  
  str = str.split("");
  for(i = 0; i < vowles.length; i++)
  {
    if( str[0] == vowles[i]){isVowel = true;}
    else if( str[1] == "l"){hasL = true;}
  }
  
  if(isVowel === true){str.push("way");}
  else if(hasL === true){str.push(str[0] + str[1] + "ay");str.shift();str.shift();}
  else{str.push(str[0] + "ay");str.shift();}
  
  return str.join("");
}

// Use
translate("glove");
