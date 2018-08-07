////////////////////////////////////
// Random Button CSS Generator Functions

// Will return 0 or 1
function CoinFlip(){
    return Math.floor(Math.random() * 2); //0/1
}
    

// Return a random string of RGB values e.g. "255, 255, 255"
function RandomRGBColor(){
    var r, g, b;
    
    r = Math.floor(Math.random() * 256);
    g = Math.floor(Math.random() * 256);
    b = Math.floor(Math.random() * 256);
    
    color = r.toString() + ', ' + g.toString() + ', ' + b.toString();

    return color;
}

// Set SetBackgroundColor()
function SetBackgroundColor(element, color = null){
    // No color given so set to random
    if(color == null){
        element.style.backgroundColor = 'rgb(' + RandomRGBColor() + ')';
    }else{ // Set to provided color
        element.style.backgroundColor = 'rgb(' + color + ')';
    }
}

// Set SetFontColor()
function SetFontColor(element, color = null){
    // No color given so set to random
    if(color == null){
        element.style.color = 'rgb(' + RandomRGBColor() + ')';
    }else{ // Set to provided color
        element.style.color = 'rgb(' + color + ')';
    }
}

// Set SetBorderColor()
function SetBorderColor(element, color = null){
    // No color given so set to random
    if(color == null){
        element.style.borderColor = 'rgb(' + RandomRGBColor() + ')';
    }else{ // Set to provided color
        element.style.borderColor = 'rgb(' + color + ')';
    }
}

// Set SetBorderWidth()
function SetBorderWidth(element, width = null){
    // No width given so set to random
    if(width == null){
        element.style.borderWidth = Math.floor(Math.random() * 14).toString() +'px';
    }else{ // Set to provided color
        element.style.borderWidth = width.toString() + 'px';
    }
}

// Set SetBorderStyle()
function SetBorderStyle(element, style = null){
    // No width given so set to random
    if(style == null){
        
        var styles = ['none', 'hidden', 'dotted', 'dashed', 'solid', 'double', 'groove', 'ridge', 'inset', 'outset', 'initial', 'inherit'];
        
        element.style.borderStyle = styles[Math.floor(Math.random()*styles.length)];
            
    }else{ // Set to provided color
        element.style.borderStyle = style;
    }
}

// Get the CSS for the button that was clicked and show it on the page
function ShowCSS(element){
    var style = window.getComputedStyle(element);
    var backgroundColor = style.getPropertyValue('background-color');
    var color = style.getPropertyValue('color');
    var borderColor = style.getPropertyValue('border-color');
    var borderWidth = style.getPropertyValue('border-width');
    var borderStyle = style.getPropertyValue('border-style');
    var padding = style.getPropertyValue('padding');
    var textDecoration = style.getPropertyValue('text-decoration');
    var display = style.getPropertyValue('display');
    var fontSize = style.getPropertyValue('font-size');
    var css = '';
    css += 'button{\n';
    css += '    background-color: ' + backgroundColor.toString() + ';\n';
    css += '    color: ' + color.toString() + ';\n';
    css += '    border-color: ' + borderColor.toString() + ';\n';
    css += '    border-width: ' + borderWidth.toString() + ';\n';
    css += '    border-style: ' + borderStyle.toString() + ';\n';
    css += '    padding: ' + padding.toString() + ';\n';
    css += '    text-decoration: ' + textDecoration.toString() + ';\n';
    css += '    display: ' + display.toString() + ';\n';
    css += '    font-size: ' + fontSize.toString() + ';\n';
    css += '}\n';

    document.getElementById('css-styles').innerHTML = css;
}
