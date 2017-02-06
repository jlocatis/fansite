<div>

<?php
// Define each page and it's associated URL.
$pages = array(
	'Home' => '/',
	'Area Parks' => '/areaparks.php',
	'External Links' => '/external-links.php',
	'About Me' => '/about.php'
);

// Use a loop to go through the above array and create a link in the menu for each. If the current page is equal to // the page, the "current page" class will be added to let the user know they are currently on that page.
foreach ($pages as $page => $url) {
	print '<a href="'.$url.'"'.(($currentPage === $page) ? ' class ="currentpage" ': '').'>'.$page.'</a><br>';
	}
?>

</div>