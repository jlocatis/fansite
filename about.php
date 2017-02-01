<?php $title = 'About Me'; ?>
<?php $currentPage = 'About Me'; ?>
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
					<p><img src="/pictures/me.jpg" class="left" width="200" alt="Me!">My name is Jamie Locatis, and this fall I made a goal to visit as many parks as possible around the Omaha Metropolitan Area.</p>
					<p>My goal was to document the outdoor/hiking potential within the Omaha region. Eventually I plan to start a blog providing more detail into what parks to visit and what trails to hike. For now I hope you enjoy this 
					small peek into the outdoors surrounding Omaha!</p>
					<p>All of the pictures used on this page are my own.</p>
				</td>
			</tr>
		</tbody>
	</table>
	
<?php include('footer.php'); ?>
