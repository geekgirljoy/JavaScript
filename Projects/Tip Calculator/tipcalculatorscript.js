$(document).ready(function(){
	// call calc function
	calc();
});

$( "#bill-amount" ).change(function()
{
	// call calc function
	calc();
});

$( "#tip-percentage" ).change(function(){
	// call calc function
	calc();
});

function Update(tip, bill)
{
	$( "#tip" ).text("$" + tip);
	$( "#bill" ).text("$" + bill);
}

function calc()
{
	if( !isNaN( $( "#bill-amount" ).val() ) && !isNaN( $( "#tip-percentage" ).val() ) )
	{
		bill = parseFloat( $( "#bill-amount" ).val() );
		tip = parseFloat( $( "#tip-percentage" ).val() );
		
		tip = (tip / 100) * bill;
		bill = bill + tip; 
		
		Update(tip.toFixed(2), bill.toFixed(2));
	}
}
