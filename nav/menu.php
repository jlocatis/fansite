<div>

<?php
// Define each name associated with an URL
$pages = array(
	'Home' => '/',
	'Area Parks' => '/areaparks.php',
	'External Links' => '/external-links.php',
	'About Me' => '/about.php'
);

foreach ($pages as $page => $url) {
	print '<a href="'.$url.'"'.(($currentPage === $page) ? ' class ="currentpage" ': '').'>'.$page.'</a><br>';
	}
?>

</div>