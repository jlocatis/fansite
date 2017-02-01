<?php $title = 'Area Parks'; ?>
<?php $currentPage = 'Area Parks'; ?>
<?php include('header.php'); ?>

<body>
	<p id="page-header">Hiking trails around Omaha, NE</p>
	
	<p id="page-title"><?php print $title ?></p>
	
	<table class="center">
		<tbody>
			<tr>
				<td id="navigation">
					<?php include('menu.php'); ?>
				</td>
				<td id="areaparks" class="middle">
					<strong>Links to my favorite parks surrounding Omaha!</strong><br><br>
					<a href="http://www.pottcoconservation.com/parks-and-habitat-areas/hitchcock-nature-center/" target="_blank"><img src="/pictures/hitchcock.jpg" width="250" alt="Hitchcock"><br>Hitchcock Nature Center, IA</a><br>
					<a href="http://outdoornebraska.gov/ponca/" target="_blank"><img src="/pictures/ponca.jpg" width="250" alt="Ponca"><br>Ponca State Park, NE</a><br>
					<a href="http://outdoornebraska.gov/platteriver/" target="_blank"><img src="/pictures/platteriver.jpg" width="250" alt="Platte River"><br>Platte River State Park, NE</a><br>
					<a href="http://www.iowadnr.gov/Places-to-Go/State-Parks-Rec-Areas/Iowas-State-Parks/ParkDetails/ParkID/610131" target="_blank"><img src="/pictures/waubonsie.jpg" width="250" alt="Waubonsie"><br>Waubonsie State Park, IA</a><br>
					<a href="http://www.iowadnr.gov/Places-to-Go/State-Parks-Rec-Areas/Iowas-State-Parks/ParkDetails/ParkID/610160" target="_blank"><img src="/pictures/preparation.jpg" width="250" alt="Preparation"><br>Preparation Canyon State Park, IA</a><br>
				</td>
			</tr>
		</tbody>
	</table>

<?php include('footer.php'); ?>