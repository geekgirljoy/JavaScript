var min = 2, max = 80;

var always_even = Math.round(Math.random() * (max - min) + min) & ~1;
var always_odd = Math.round(Math.random() * (max - min) + min) | 1;

console.log("This value is always even: (& ~1) " + always_even);
console.log("This value is always odd: (| 1) " + always_odd);
