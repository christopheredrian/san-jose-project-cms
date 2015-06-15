<?php
require 'includes/header.html';
if (! isset ( $_POST ['edit_id'] )) {
	header ( "Location: index.php" ); /* Redirect browser */
	exit ();
	echo 'AE';
} else {
	require 'db/AlumniDB.php';
	require 'db/security.php';
	$row = AlumniDB::get ( 'ordained', get_post ( 'edit_id' ) );
	// // name, diocese, birthday, ordination, address, phone, fax, mobile, email
	$id = $row ['id'];
	$name = $row ['name'];
	$diocese = $row ['diocese'];
	$birthday = $row ['birthday'];
	$ordination = $row ['ordination'];
	$address = $row ['address'];
	$phone = $row ['phone'];
	$fax = $row ['fax'];
	$mobile = $row ['mobile'];
	$email = $row ['email'];
}
?>
<main id="main"> <header class="header">
	<h1>Edit information for <?php echo $name?></h1>
</header>
<section class="content">
	<form action="ordained.php#ordainedLink" class="pure-form pure-form-stacked"
		method="post">
		<input type="hidden" name="id" value="<?php echo $id?>">
		<input type="hidden" name="action" value="editOrdained">
		<fieldset>
			<div class="pure-control-group">
				<div class="pure-g">
					<div class="pure-u-2-3">
						<label>Name</label> <input type="text" class="pure-u-4-5"
							name="name" required value="<?php echo $name?>"> <label>Diocese</label>
						<input type="text" class="pure-u-4-5" name="diocese"
							value="<?php echo $diocese?>"> <label>Birthday</label> <input
							type="date" class="pure-u-4-5" name="birthday"
							value="<?php echo $birthday?>"> <label>Ordination Date</label> <input
							type="date" class="pure-u-4-5" name="ordination"
							value="<?php echo $ordination?>">
					</div>
					<div class="pure-u-1-3">
						<label>Phone</label> <input type="text" class="pure-u-1"
							name="phone" value="<?php echo $phone?>"> <label>Fax</label> <input type="text"
							class="pure-u-1" name="fax" value="<?php echo $fax?>"> <label>Mobile</label>
						<input type="text" class="pure-u-1" name="mobile"
							value="<?php echo $mobile?>"> <label>Email</label> <input
							type="email" class="pure-u-1" name="email"
							value="<?php echo $email?>"><br>
					</div>
				</div>
			</div>
			<label>Address</label> <input type="text" class="pure-input-1"
				name="address" value="<?php echo $address?>"> <br> <input
				class="pure-u-1 pure-button pure-button-primary button-large"
				type="submit" value="Save" id="save">
		</fieldset>
	</form>

</section>
</main>

<?php require 'includes/footer.html';?>
