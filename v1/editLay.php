<?php
require 'includes/header.html';
if (! isset ( $_POST ['edit_id'] )) {
	header ( "Location: index.php" ); /* Redirect browser */
	exit ();
	echo 'AE';
} else {
	require 'db/AlumniDB.php';
	require 'db/security.php';
	$row = AlumniDB::get ( 'lay', get_post ( 'edit_id' ) );
	// name, birthday, years_present, phone, fax, mobile, email, address
	$id = $row ['id'];
	$name = $row ['name'];
	$birthday = $row ['birthday'];
	$years_present = $row ['years_present'];
	$phone = $row ['phone'];
	$fax = $row ['fax'];
	$mobile = $row ['mobile'];
	$email = $row ['email'];
	$address = $row ['address'];
}
?>
<main id="main"> <header class="header">
	<h1>Edit information for <?php echo $name?></h1>
</header>
<section class="content">
	<form action="lay.php#layLink" class="pure-form pure-form-stacked"
		method="post">
		<input type="hidden" name="action" value="editLay"> <input
			type="hidden" name="id" value="<?php echo $id?>">
		<fieldset>
			<div class="pure-control-group">
				<div class="pure-g">
					<div class="pure-u-2-3">
						<label>Name</label> <input type="text" class="pure-u-4-5"
							name="name" required value="<?php echo $name?>"> <label>Birthday</label>
						<input type="date" class="pure-u-4-5" name="birthday"
							value="<?php echo $birthday?>">
						<p>Note: 0001 for unknown years</p>
						<label>Years in San Jose</label> <input type="text"
							class="pure-u-4-5" name="years_present"
							value="<?php echo $years_present?>"> <label>Phone</label> <input
							type="text" class="pure-u-4-5" name="phone"
							value="<?php echo $phone?>">

					</div>
					<div class="pure-u-1-3">
						<label>Fax</label> <input type="text" class="pure-u-1" name="fax"
							value="<?php echo $fax?>"> <label>Mobile</label> <input
							type="text" class="pure-u-1" name="mobile"
							value="<?php echo $mobile?>"> <label>Email</label> <input
							type="email" class="pure-u-1" name="email"
							value="<?php echo $email?>">
					</div>
				</div>
			</div>
			<label>Address</label> <input type="text" class="pure-u-1"
				name="address" value="<?php echo $address?>"> <br>
			<div class="pure-g adjacent-buttons">
				<input class="pure-u-11-24 pure-button" type="submit" value="Cancel">
				<div class="pure-u-2-24"></div>
				<input
					class="pure-u-11-24 pure-button pure-button-primary button-large"
					type="submit" value="Save" id="save">
			</div>
		</fieldset>
	</form>

</section>
</main>

<?php require 'includes/footer.html';?>
