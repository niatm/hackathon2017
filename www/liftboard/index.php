<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP <?php echo PHP_VERSION ?> @ openshift</title>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.plugin.js"></script> 
		<script type="text/javascript" src="js/jquery.flightboard.js"></script>
		<script>
		$(function () {
			$('#text1').flightboard({messages: ['MTM L18', 'MTM G'],
				maxLength: 10,
				lettersImage: 'img/flightBoardLarge.png',
				shadingImages: ['img/flightBoardHigh.png', 'img/flightBoardShad.png']});
			
			$('#text2').flightboard({messages: ['MTM L3', 'MTM L43'],
				maxLength: 10,
				lettersImage: 'img/flightBoardLarge.png',
				shadingImages: ['img/flightBoardHigh.png', 'img/flightBoardShad.png']});

			$('#text3').flightboard({messages: ['MTM G', 'MTM L20'],
				maxLength: 10,
				lettersImage: 'img/flightBoardLarge.png',
				shadingImages: ['img/flightBoardHigh.png', 'img/flightBoardShad.png']});
			
		});
		</script>
		<style>
			table {border:0px solid black;padding:0px;border-collapse:collapse;font-size:19pt;font-family:arial;width:100%}
			table td {margin:0px;border-bottom:3px solid white;border-top:3px solid white;padding:0px;border-collapse:collapse;background:black;color:white}
			table div {width:100%;padding:0px;background:black}
		</style>
    </head>
    <body>
        <h1 align="center">MTM L20</h1>
		<p align="center" style="color:green;font-size:19pt">GrebLift Information System</p>
		<table>
			<tr><th>User</th><th width="300px">Destination</th><th>Time</th><th>Status</th></tr>
			<tr><td>BRIAN</td><td><div id="text1"></div></td><td align="center">9:45 AM</td><td align="center">Confirmed</td></tr>
			<tr><td>NAZRUL</td><td><div id="text2"></div></td><td align="center">9:47 AM</td><td align="center">Pending QR</td></tr>
			<tr><td>DRAK</td><td><div id="text3"></div></td><td align="center">9:50 AM</td><td align="center">Departed</td></tr>
		</table>				
    </body>
</html>