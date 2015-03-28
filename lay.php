<?php
include_once 'includes/header.html';
require_once 'db/security.php';

if (isset ( $_POST ['action'] )) {
	if (get_post ( 'action' ) == 'addLay') {
		require_once 'db/AlumniDB.php';
		// name, birthday, years, phone, fax, mobile, email, address
		AlumniDB::insertLay ();
	} else {
	}
}
?>

<main id="main">
<section class="content">
	<header class="header">
		<h1>Add Lay</h1>
	</header>
	<form action="lay.php" class="pure-form pure-form-stacked"
		method="post">
		<input type="hidden" name="action" value="addLay">
		<fieldset>
			<div class="pure-control-group">
				<div class="pure-g">
					<div class="pure-u-2-3">
						<label>Name</label> <input type="text" class="pure-u-4-5"
							name="name" required placeholder="Name (Lastname, Firstname)"> <label>Birthday</label>
						<input type="date" class="pure-u-4-5" name="birthday">
						<p>Note: 0001 for unknown years</p>
						<label>Years in San Jose</label> <input type="text"
							class="pure-u-4-5" name="years" placeholder="2004-2005"> <label>Phone</label>
						<input type="text" class="pure-u-4-5" name="phone"
							placeholder="(032)4323212">

					</div>
					<div class="pure-u-1-3">
						<label>Fax</label> <input type="text" class="pure-u-1" name="fax"
							placeholder="(02) 1234567"> <label>Mobile</label> <input
							type="text" class="pure-u-1" name="mobile"
							placeholder="09173214567"> <label>Email</label> <input
							type="email" class="pure-u-1" name="email"
							placeholder="sj321@gm.com">
					</div>
				</div>
			</div>
			<label>Address</label> <input type="text" class="pure-u-1"
				name="address"
				placeholder="(Seminary Road, Ateneo de Manila University Katipunan, Quezon City, Philippines)">
			<br> <input
				class="pure-u-1 pure-button pure-button-primary button-large"
				type="submit" value="Save" id="save">
		</fieldset>
	</form>

</section>
<hr>
<header class="header">
	<h1>Lay</h1>
</header>
<section class="content content-table" id="layLink">
	<table class="pure-table pure-table-bordered">
		<!--           <colgroup>
          <col width="50%">
          <col width="25%">
          <col width="25%">
      </colgroup> -->
		<thead>
			<tr>
				<th>Name</th>
				<th>Birthday</th>
				<th>Years in San Jose</th>
				<th>Address</th>
				<th>Phone</th>
				<th>Fax</th>
				<th>Mobile</th>
				<th>Email</th>
				<th>Operations</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Cee Es</td>
				<td>January 12, 1967</td>
				<td>2004-2005</td>
				<td>132 hernandez st. Baguio City Benguet, Philippines</td>
				<td>12345678987</td>
				<td>09322233213</td>
				<td>09322233213</td>
				<td>chrsoaoetoeodos@yahoo.com</td>
				<td>
					<form action="demo_form.asp">
						<!-- HIDDEN id here -->
						<input type="image" src="images/favicon.png" alt="Submit"> <input
							type="image" src="images/favicon.png" alt="Submit">
					</form>
				</td>
			</tr>
			<tr>
				<td>Cee Es</td>
				<td>January 12, 1967</td>
				<td>2004-2005</td>
				<td>132 hernandez st. Baguio City Benguet, Philippines</td>
				<td>12345678987</td>
				<td>09322233213</td>
				<td>09322233213</td>
				<td>chrsoaoetoeodos@yahoo.com</td>
				<td>
					<form action="demo_form.asp">
						<!-- HIDDEN id here -->
						<input type="image" src="images/edit.png" alt="Submit"
							class="icon"> <input type="image" src="images/delete.png"
							alt="Submit" class="icon">
					</form>
				</td>
			</tr>
			<tr>
				<td>Cee Es</td>
				<td>January 12, 1967</td>
				<td>2004-2005</td>
				<td>132 hernandez st. Baguio City Benguet, Philippines</td>
				<td>12345678987</td>
				<td>09322233213</td>
				<td>09322233213</td>
				<td>chrsoaoetoeodos@yahoo.com</td>
				<td>
					<form action="demo_form.asp">
						<!-- HIDDEN id here -->
						<input type="image" src="images/favicon.png" alt="Submit"> <input
							type="image" src="images/favicon.png" alt="Submit">
					</form>
				</td>
			</tr>

		</tbody>

	</table>
</section>
</main>


<?php  include_once('includes/footer.html');?>
