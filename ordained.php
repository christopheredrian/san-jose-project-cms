<?php
include_once 'includes/header.html';
require_once 'db/security.php';
require_once 'db/AlumniDB.php';
if (isset ( $_POST ['action'] )) {
	if (get_post ( 'action' ) == 'addOrdained') {
		require_once 'db/AlumniDB.php';
		// name, birthday, years, phone, fax, mobile, email, address
		AlumniDB::insertOrdained ();
	} else {
	}
}
if (isset ( $_POST ['delete_id'] )) {
	AlumniDB::delete ( 'ordained', get_post ( 'delete_id' ) );
}
?>
<main id="main">
<section class="content">
	<header class="header">
		<h1>Add Ordained</h1>
	</header>
	<form action="ordained.php" class="pure-form pure-form-stacked"
		method="post">
		<input type="hidden" name="action" value="addOrdained">
		<fieldset>
			<div class="pure-control-group">
				<div class="pure-g">
					<div class="pure-u-2-3">
						<label>Name</label> <input type="text" class="pure-u-4-5"
							name="name" required placeholder="Name (Lastname, Firstname)"> <label>Diocese</label>
						<input type="text" class="pure-u-4-5" name="diocese"
							placeholder="Archdiocese of San Fernando, Pampanga"> <label>Birthday</label>
						<input type="date" class="pure-u-4-5" name="birthday"> <label>Ordination
							Date</label> <input type="date" class="pure-u-4-5"
							name="ordination">
					</div>
					<div class="pure-u-1-3">
						<label>Phone</label> <input type="text" class="pure-u-1"
							name="phone" placeholder="(032)4323212"> <label>Fax</label> <input
							type="text" class="pure-u-1" name="fax"
							placeholder="(02) 1234567"> <label>Mobile</label> <input
							type="text" class="pure-u-1" name="mobile"
							placeholder="09173214567"> <label>Email</label> <input
							type="email" class="pure-u-1" name="email"
							placeholder="sj321@gm.com"><br>
					</div>
				</div>
			</div>
			<label>Address</label> <input type="text" class="pure-input-1"
				name="address"
				placeholder="(Seminary Road, Ateneo de Manila University Katipunan, Quezon City, Philippines)">
			<br> <input
				class="pure-u-1 pure-button pure-button-primary button-large"
				type="submit" value="Save" id="save">
		</fieldset>
	</form>

</section>
<hr id="ordainedLink">
<header class="header">
	<h1>Ordained</h1>
</header>
<section class="content content-table">
	<table class="pure-table pure-table-bordered">
		<!--           <colgroup>
          <col width="50%">
          <col width="25%">
          <col width="25%">
      </colgroup> -->
		<thead>
			<tr>
				<th>Name</th>
				<th>Diocese</th>
				<th>Birthday</th>
				<th>Ordination</th>
				<th>Address</th>
				<th>Phone</th>
				<th>Fax</th>
				<th>Mobile</th>
				<th>Email</th>
				<th>Operations</th>
			</tr>
		</thead>
		<tbody>
		<?php
		
		$result = AlumniDB::getOrdained ();
		if ($result->num_rows > 0) {
			// output data of each row
			while ( $row = $result->fetch_assoc () ) {
				echo '<tr>';
				// echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
				echo '<td>' . $row ['name'] . '</td>';
				echo '<td>' . $row ['diocese'] . '</td>';
				echo '<td>' . $row ['birthday'] . '</td>';
				echo '<td>' . $row ['ordination'] . '</td>';
				echo '<td>' . $row ['address'] . '</td>';
				echo '<td>' . $row ['phone'] . '</td>';
				echo '<td>' . $row ['fax'] . '</td>';
				echo '<td>' . $row ['mobile'] . '</td>';
				echo '<td>' . $row ['email'] . '</td>';
				?>
				<td>
				<form action="ordained.php#ordainedLink" method="post">
					<!-- HIDDEN id here -->
					<input type="hidden" name="delete_id"
						value="<?php echo $row['id'];?>"> <input type="image"
						src="images/delete.png" alt="delete" title="delete"
						onclick="return confirm('Are you sure you want to delete this item?');">
				</form>
				<form action="edit.php" method="post">
					<input type="hidden" name="edit_id"
						value="<?php echo $row['id'];?>"> <input type="image"
						src="images/edit.png" alt="edit" title="edit">
				</form>

			</td>
				<?php
				echo '</tr>';
				// echo print_r ( $row );
			}
		} else {
			echo "0 results";
		}
		
		?>
		</tbody>

	</table>
</section>
</main>


<?php  include_once('includes/footer.html');?>
