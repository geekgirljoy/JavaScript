// Everything Be True

/*

Check if the predicate (second argument) is 
truthy on all elements of a collection 
(first argument).

*/
function every(collection, pre) 
{
  for(i = 0; i < collection.length; i++)
   {
     if(collection[i].hasOwnProperty(pre) === false){return false;}//no pre
     else// has pre
     {
       //is it a string?
       if(typeof collection[i][pre] == 'string')
       {
         if(collection[i][pre] == ""){return false;}
       }
       else // not a string
       {
           if(collection[i][pre] === 0 || collection[i][pre] === null || collection[i][pre] === undefined || isNaN(collection[i][pre])){return false;} // is it grater than 0 or not otherwise undefined or null
       }
     }
   }
  
  return true;
}


// Use
every([{"user": "Tinky-Winky", "sex": "male"}, {"user": "Dipsy", "sex": "male"}, {"user": "Laa-Laa", "sex": "female"}, {"user": "Po", "sex": "female"}], "sex");
