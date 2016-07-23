$(document).ready(function(){
	// call calc function
	calc();
});

$( "#filament-cost" ).change(function()
{
	// call calc function
	calc();
});

$( "#spool-weight" ).change(function(){
	// call calc function
	calc();
});

$( "#part-weight" ).change(function(){
	// call calc function
	calc();
});

function UpdateCost(cost)
{
	$( "#cost" ).text("$" + cost);
}

function calc()
{
	if( !isNaN( $( "#filament-cost" ).val() ) && !isNaN( $( "#spool-weight" ).val() ) && !isNaN( $( "#part-weight" ).val() ) )
	{
		UpdateCost( ( $( "#filament-cost" ).val() / ( $( "#spool-weight" ).val() * 1000 ) ) * $( "#part-weight" ).val() );
	}
}