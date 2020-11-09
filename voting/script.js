$(document).ready(function(){
	$.ajax({
		url:"http://phpdemo/voting/data.php",
		method: "GET",
		success:function(data){
			//console.log(data);
			var name = [];
			var votes = [];
			var colors = [];
		for(var i in data){
			name.push(data[i].name);
			votes.push(data[i].votes);
			colors.push(color());
		}
		var chartdata = {
			labels: name,
			datasets :[{
			label:"Voting result-2020",
            backgroundColor: colors,
            data:votes
			}]
		};
		var ctx = $("#mycanvas");
		var bargraph = new Chart(ctx,{
            type:'horizontalBar',
            data: chartdata,
		});
		},
		error:function(data){
			console.log(data);
		}
	});

	function color()
	{
		var r = Math.floor(Math.random()*256);
		var g = Math.floor(Math.random()*256);
		var b = Math.floor(Math.random()*256);
		var rgba = 'rgba(' + r + ',' + g + ',' + b + ',1.0)';
		return rgba;
	}
});