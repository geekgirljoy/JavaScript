var keyEvents = {}; // keyboard state object

// Listen to keyboard outside of game loop to be less "blocky"
var onkeydown = onkeyup = function(key){
  key = key || event; // IE Fix :-(

  if(key.type == 'keydown'){
    keyEvents[key.keyCode] = true;
  }
  else{
    keyEvents[key.keyCode] = false; 
  }
  //console.log(keyEvents);
}


var game = document.getElementById('game'); // A reference to the SVG
if(game){
    game.addEventListener("load",function(){
    ///////////
    // Functions
        
    // Clear Instructions    
    // removes the instructions element
    function ClearInstructions() {
      instructions.remove();
    }

    // Get Position
    // This function gets the current (x,y) cordinates of GetPosition(object)     
    function GetPosition(object){
      var transformlist = object.transform.baseVal;
      var group = transformlist.getItem(0);
      var X = 0;
      var Y = 0;
      if (group.type == SVGTransform.SVG_TRANSFORM_TRANSLATE){
        X = group.matrix.e;
        Y = group.matrix.f;
      }
      return [X, Y];
    }
    
    // Collide
    // A basic box collision detector
    function Collide(element1, element2) {
      var collisionBox1 = element1.getBoundingClientRect();
      var collisionBox2 = element2.getBoundingClientRect();

      return !(collisionBox1.top > collisionBox2.bottom ||
        collisionBox1.right < collisionBox2.left ||
        collisionBox1.bottom < collisionBox2.top ||
        collisionBox1.left > collisionBox2.right);
    }

    // Inside
    // A basic inside box collision detector
    function Inside(element1, element2) {
      var collisionBox1 = element1.getBoundingClientRect();
      var collisionBox2 = element2.getBoundingClientRect();

      return (collisionBox1.top <= collisionBox2.bottom && 
        collisionBox1.bottom >= collisionBox2.top && 
        collisionBox1.left <= collisionBox2.right && 
        collisionBox1.right >= collisionBox2.left);
    }
      
    // Get Bank Total
    // Get the number of dimonds or coins the player has
    function GetBankTotal(element){
      var currentValue = element.textContent;
      return parseInt(currentValue);
    }
    
    // Collect 
    // Increment the Coin or a Dimond "player bank"
    function Collect(element){
      element.textContent = GetBankTotal(element) + 1;
    }
      
    
            
    ///////////
    // Game play
    
    // Set the "constants"
    var step = 1;
    var jump = 20;
    var gravity = 1.5;

    // Setup references to the "named" SVG XML elements
    var gameOver = game.getElementById("gameover"); // A hidden "eater/detector" element below the play area to detect player death
    var instructions = game.getElementById('instructions');  // Instructions element
    var gameOverMenu = game.getElementById("gameovermenu");  // Game over screen element
    var player = game.getElementById("player");              // The player element
    var playerCoins = game.getElementById("playercoins");    // The "bank" element showing how many coins the player has collected
    var playerDimonds = game.getElementById("playerdimonds");// The "bank" element showing how many dimonds the player has collected

    //  Setup references to the "named" SVG XML coin elements
    var coinPieces = ['coin1', 'coin2'];
    var coins = [];
    coinPieces.forEach(element => {
      coins.push(document.getElementById(element));
    });
        
    // Setup references to the "named" SVG XML dimond elements
    var dimondPieces = ['dimond1'];
    var dimonds = [];
    dimondPieces.forEach(element => {
      dimonds.push(document.getElementById(element));
    });

    // Setup references to the "named" SVG XML ground elements
    var terrainPieces = ['ground1', 'ground2', 'ground3', 'ground4'];
    var terrain = [];
    terrainPieces.forEach(element => {
      terrain.push(document.getElementById(element));
    });

    var winningBankTotal = dimondPieces.length + coinPieces.length;


    // Clear the instructions after 3 seconds
    setTimeout(ClearInstructions, 3000);


    // Redraw Game Loop
    var redrawRate = 30; // microseconds
    var gameLoop = setInterval(function(){
      fall = true; // always try to fall
      allowedToJump = false;// disallow jumping because player might be falling
      allowedToMove = true; // allow moving until the player is dead

      // Check for collisions with ground elements
      terrain.forEach(ground => {
        // If there is a collision with the ground
        if(Collide(player, ground)){
          fall = false; // Stop falling
          allowedToJump = true; // Allow jumping
        }
      });

      // if player fell below the ground
      if(Inside(player, gameOver)){
        fall = false; // stop falling
        allowedToJump = false; // dont allow jumping
        allowedToMove = false; // player is dead stop player movment
        ClearInstructions(); // just in case
        gameOverMenu.style.display = "inline"; // show game over menu
      }


      // if there was no collision between a ground element and
      // the player
      if(fall === true){
        position = GetPosition(player); // get updated player position
        allowedToJump = false; // dont allow jumping
        player.transform.baseVal.getItem(0).setTranslate(position[0], position[1] + gravity); // player falls
      }


      if(allowedToMove === true){
        position = GetPosition(player); // get updated player position
        // keyboard movment
        // left || a
        if (keyEvents[37] === true || keyEvents[65] === true) {
          if(position[0] > -10){
            player.transform.baseVal.getItem(0).setTranslate(position[0] - step, position[1]);
          }
        }
        // right || d
        if (keyEvents[39] === true || keyEvents[68] === true) {
          if(position[0] < 140){
            player.transform.baseVal.getItem(0).setTranslate(position[0] + step, position[1]);
          }
        }
        // up || w || space
        if ((keyEvents[38] === true || keyEvents[87] === true || keyEvents[32] === true) && allowedToJump === true) {
          player.transform.baseVal.getItem(0).setTranslate(position[0], position[1] - jump);    
        }
        // down || s
        if (keyEvents[40] === true || keyEvents[83] === true) {
          //console.log("Down");
        }
      }


      // Item Collection        
      // Collect coins
      coins.forEach(coin => {
        if(Inside(player, coin)){
          coin.remove();
          Collect(playerCoins);
        }
      });

      // Collect dimonds
      dimonds.forEach(dimond => {
        if(Inside(player, dimond)){
          dimond.remove();
          Collect(playerDimonds);
        }
      }); 

      // Check for Win
      if((GetBankTotal(playerDimonds) + GetBankTotal(playerCoins)) == winningBankTotal){
        clearInterval(gameLoop); // stop the game
        fall = false; // stop falling
        allowedToJump = false; // dont allow jumping
        allowedToMove = false; // player won stop player movment
        gameOverMenu.style.display = "inline"; // show game over menu
        // Change Game Over text to You Win
        game.getElementById("gameovermessage").textContent = '  You Win!';
      }

    }, redrawRate); // Game Loop - redraw every 30 microseconds
  }); // game load event listener
} // if game
