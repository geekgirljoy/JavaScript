navigator.geolocation.getCurrentPosition(
	function(pos) 
	{
		 var coordinates = 'Latitude : ' + pos.coords.latitude + ' Longitude: ' + pos.coords.longitude + ' Accuracy: ' +  pos.coords.accuracy + ' meters';
		console.log(coordinates);
		return coordinates;
	}, 
	function(err) 
	{
		console.warn('ERROR(' + err.code + '): ' + err.message);
	}, 
	{
		enableHighAccuracy: true,
		timeout: 5000,
		maximumAge: 0
	}
);
