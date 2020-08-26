// Complementary / Opposite
// Based on the information available here:
// https://en.wikipedia.org/wiki/Complementary_colors
// Complementary colors are pairs of colors which, 
// when combined or mixed, cancel each other out (lose hue) 
// by producing a grayscale color like white or black.
function ComplementaryRGBColor(rgb_array){
    // white minus this color = Complementary / Opposite 
    var color_r = 255 - rgb_array[0];
    var color_g = 255 - rgb_array[1];
    var color_b = 255 - rgb_array[2];

  return [color_r, color_g, color_b];
}
/*
console.log(ComplementaryRGBColor([0,0,0])); // [255, 255, 255]
console.log(ComplementaryRGBColor([255,255,255])); // [0, 0, 0]
console.log(ComplementaryRGBColor([255,0,0])); // [0, 255, 255]
console.log(ComplementaryRGBColor([0,255,0])); // [255, 0, 255]
console.log(ComplementaryRGBColor([0,0,255])); // [255, 255, 0]
console.log(ComplementaryRGBColor([128,128,128])); // [127, 127, 127]
console.log(ComplementaryRGBColor([45,45,45])); // [210, 210, 210]
*/





// RGB Array [r,g,b] to HSL Array
// Based on the information available here:
// https://en.wikipedia.org/wiki/HSL_and_HSV
function RGBToHSL(rgb_array){

   var color = [];

   // Convert the 0 - 255 values to a range of 0 - 1
   color['red'] = rgb_array[0] / 255;
   color['green'] = rgb_array[1] / 255;
   color['blue'] = rgb_array[2] / 255;
   
  
   // Find the largest and smallest color values
   color['max'] = Math.max.apply(Math,[color['red'], color['green'], color['blue']])
   color['min'] = Math.min.apply(Math,[color['red'], color['green'], color['blue']])
      

   // Compute Chroma 
   // The distance from the center of the HSL hexagonal color model to the color
   // This is the magnitude of the vector pointing to the color. 
   color['chroma'] = color['max'] - color['min'];
     
   // Compute Lightness 
   //  The average of the brightest and darkest color channels
   color['lightness'] = (color['max'] + color['min']) / 2;
   
  
  // No Calculation Needed
  if(color['chroma'] === 0){
      color['hue'] = 0;
      color['saturation'] = 0;
  }
  else{

      // Calculate Saturation
      if(color['lightness'] === 0 || color['lightness'] === 1){
          color['saturation'] = 0;
      }else{
          color['saturation'] = color['chroma'] / (1 - Math.abs(2 * color['lightness'] - 1));
      }


      // Calculate Hue
      // This is the angle of the vector pointing to the color. 
      if(color['max'] === color['red']){
          color['hue'] = (60 * ((color['green'] - color['blue']) / color['chroma']) + 0) % 360;
          if(color['hue'] < 0){
              color['hue'] += 360;
          }
        
      }
    
      else if(color['max'] === color['green']){
          color['hue'] = (60 * ((color['blue'] - color['red']) / color['chroma']) + 120) % 360;
      }
    
      else if(color['max'] === color['blue']){
          color['hue'] = (60 * ((color['red'] - color['green']) / color['chroma']) + 240) % 360;
      }
  }


  // Return RGB() -> HSL()
  return [color['hue'], color['saturation'], color['lightness']]; 
}
/*
console.log(RGBToHSL([0,0,0])); // [0, 0, 0];
console.log(RGBToHSL([255,255,255])); // [0, 0, 1];
console.log(RGBToHSL([128,0,0])); // [0, 1, 0.25098039215686274];
console.log(RGBToHSL([0,128,0])); // [120, 1, 0.25098039215686274];
console.log(RGBToHSL([0,0,128])); // [240, 1, 0.25098039215686274];
console.log(RGBToHSL([128,128,0])); // [60, 1, 0.25098039215686274];
console.log(RGBToHSL([0,128,128])); // [180, 1, 0.25098039215686274];
console.log(RGBToHSL([128,0,128])); // [300, 1, 0.25098039215686274];
console.log(RGBToHSL([128,128,128])); // [0, 0, 0.5019607843137255];
console.log(RGBToHSL([255,128,64])); // [20, 1, 0.6254901960784314];
*/







// HSL Array [h,s,l] to RGB Array
// Based on the information available here:
// https://en.wikipedia.org/wiki/HSL_and_HSV
function HSLtoRGB(hsl_array){
  
    var color = [];
    
    // Compute Chroma, Hue prime and Chi
    color['chroma'] = (1 - Math.abs((2 * hsl_array[2]) - 1)) * hsl_array[1];
    color['hue_prime'] = (hsl_array[0] / 60);
    color['chi'] = color['chroma'] * (1 - Math.abs( color['hue_prime'] % 2 - 1));    
     
    // Zero out the RGB Color Channels
    color['red'] = 0;
    color['green'] = 0;
    color['blue'] = 0;
    
    // Determine where this color is in the HSL color space
    // update RGB color channels accordingly
    if(0 <= color['hue_prime'] && color['hue_prime'] <= 1){
        color['red'] = color['chroma'];
        color['green'] = color['chi'];
    }
    else if(1 <= color['hue_prime'] && color['hue_prime'] <= 2){
        color['red'] = color['chi'];
        color['green'] = color['chroma'];
    }
    else if(2 <= color['hue_prime'] && color['hue_prime'] <= 3){
        color['green'] = color['chroma'];
        color['blue'] = color['chi'];
    }
    else if(3 <= color['hue_prime'] && color['hue_prime'] <= 4){
        color['green'] = color['chi'];
        color['blue'] = color['chroma'];
    }
    else if(4 <= color['hue_prime'] && color['hue_prime'] <= 5){
        color['red'] = color['chi'];
        color['blue'] = color['chroma'];
    }
    else if(5 <= color['hue_prime'] && color['hue_prime'] <= 6){
        color['red'] = color['chroma'];
        color['blue'] = color['chi'];
    }
    
    // Determine color lightness magnitude
    color['magnitude'] = hsl_array[2] - (color['chroma'] / 2);
    
    // Adjust the lightness of the RGB channels
    color['red'] = (color['red'] + color['magnitude']) * 255;
    color['green'] = (color['green'] + color['magnitude']) * 255;
    color['blue'] = (color['blue'] + color['magnitude']) * 255;
    
    // Return HSL() -> RGB()
    return [Math.round(color['red']), Math.round(color['green']), Math.round(color['blue'])];
}
console.log(HSLtoRGB([0,0,0])); // [0, 0, 0];
console.log(HSLtoRGB([0, 0, 1])); // [255,255,255];
console.log(HSLtoRGB([0, 1, 0.25098039215686])); // [128,0,0];
console.log(HSLtoRGB([120, 1, 0.25098039215686])); // [0,128,0];
console.log(HSLtoRGB([240, 1, 0.25098039215686])); // [0,0,128];
console.log(HSLtoRGB([60, 1, 0.25098039215686])); // [128,128,0];
console.log(HSLtoRGB([180, 1, 0.25098039215686])); // [0,128,128];
console.log(HSLtoRGB([300, 1, 0.25098039215686])); // [128,0,128];
console.log(HSLtoRGB([0, 0, 0.50196078431373])); // [128,128,128];
console.log(HSLtoRGB([20, 1, 0.62549019607843])); // [255,128,64];



function RotateHue(hue, degrees){
        
    hue += degrees;
    
     // rotate around
    if(hue < 0){
        hue += 360;
    }
    if(hue > 360){
        hue -= 360;
    }
    return hue;
}
/*
console.log(RotateHue(0, -20)); // 340
console.log(RotateHue(0, 180)); // 180
console.log(RotateHue(180, 180)); // 360
console.log(RotateHue(0, 320)); // 320
console.log(RotateHue(300, 20)); // 320
*/
