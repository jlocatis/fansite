<?php $title = 'External Links'; ?>
<?php $currentPage = 'External Links'; ?>
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
				<td class="middle">
					<p>Visit these additional resources for Omaha area hiking:</p>
					<p><a href="http://parks.cityofomaha.org/" target="_blank"><img src="/pictures/omaha.png" width="300" alt="Omaha Parks"><br>Omaha Parks & Recreation</a></p>
					<p><a href="http://councilbluffs-ia.gov/253/Parks-Recreation" target ="_blank"><img src="/pictures/councilbluffs.png" width="300" alt="Counvil Bluffs Parks"><br>Council Bluffs Parks & Recreation</a></p>
					<p><a href="http://www.alltrails.com/" target="_blank"><img src="/pictures/alltrails.png" width="300" alt="All Trails"><br>All Trails</a> a great resource for all things hiking</p>
				</td>
			</tr>
		</tbody>
	</table>

<?php include('footer.php'); ?>