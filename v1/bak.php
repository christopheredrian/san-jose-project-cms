
<?php
require 'includes/header.html';
require 'util/FileUtility.php';
require 'db/AlumniDB.php';
FileUtility::writeCSV('files/layBak.csv', AlumniDB::getLay()); // Note: Put time here
FileUtility::writeCSV('files/ordainedBak.csv', AlumniDB::getOrdained()); // Note: Put time here
?>

<main id="main">
	<section class="content">
		<header class="header">
			<h1>Export, Backup &amp;  Restore</h1>
		</header>
		<h2>Export as CSV</h2>
		<a download href="files/ordainedBak.csv">Download Ordained</a><br>
		<a download href="files/layBak.csv">Download Lay</a>
		<hr>
		<header class="header"><h2>Backup &amp; Restore </h2></header>
		<p>INSTRUCTIONS HERE</p>
	</section>

</main>


<?php require 'includes/footer.html';?>