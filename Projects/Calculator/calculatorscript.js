$(document).ready(function() {
  $("#display").val("0");
  $(".btn").addClass("shadow");

  var equation = [];
  var temp = "";
  currExpression = 0;

  $(".btn").click(function() {
    if ($(this).attr("id") == "allclear") {
      equation = [];
      temp = "";
      currExpression = 0;
      $("#display").val("0");
    } else if ($(this).attr("id") == "clearexpression") {
      equation.pop();
      temp = "";
      //currExpression--;
      Display(false);
    } else if ($(this).attr("id") == "equals") {
      temp = "";
      Display(true);
    } else if ($(this).attr("id") == "percentage") {
      var lastValue = equation[equation.length - 1];
      temp = "";
      var output = "";
      if (!isNaN(lastValue)) {
        stop = equation.length - 3;
        for (i = 0; i <= stop; i++) {
          output += equation[i];
        }
        percent = lastValue / 100;
        output += "*" + percent;

        equation.pop();
        equation.push(eval(output));
        currExpression++;
      }
      Display(true);
    } else {
      var sumToAdd = $(this).text();
      if (!isNaN(sumToAdd) || sumToAdd == ".") // is number or .
      {
        temp += sumToAdd;
        equation[currExpression] = temp;
      } else // is opperator
      {
        currExpression++;
        if ((sumToAdd === '÷')) {
          sumToAdd = "/";
        } else if ((sumToAdd === 'x')) {
          sumToAdd = "*";
        }
        temp = "";
        equation.push(sumToAdd);
        currExpression++;
      }
      Display(false);

    }
  });

  function Display(evaluate) {
    var i = 0;
    var output = "";
    while (i < equation.length) {
      output += equation[i];
      i++;
    }
    if (evaluate == true) {
      equation = [];
      equation.push(eval(output));
      $("#display").val(eval(output));
      currExpression = 0;
    } else {
      $("#display").val(output);
    }
  }
});