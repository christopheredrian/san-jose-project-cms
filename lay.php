<?php
include_once 'includes/header.html';
require_once 'db/security.php';
require_once 'db/AlumniDB.php';
if (isset ( $_POST ['action'] )) {
	$action = get_post ( 'action' );
	if ($action == 'addLay') {
		require_once 'db/AlumniDB.php';
		// name, birthday, years, phone, fax, mobile, email, address
		AlumniDB::insertLay ();
	} else if ($action == 'delete') {
		AlumniDB::delete ( 'lay', get_post ( 'delete_id' ) );
	} elseif ($action == 'editLay') {
		AlumniDB::editLay ();
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
<hr id="layLink">
<header class="header">
	<h1>Lay</h1>
</header> <!-- Important for sorting id="lay" manipulated via javascript -->
<section class="content content-table" id="lay">
	<br> <br>
	<div class="pure-form">
		<input class="pure-input-rounded search" placeholder="Search" />
		<button class="sort pure-button pure-button-active" data-sort="name">Sort
			by name</button>
		<button class="sort pure-button pure-button-active"
			data-sort="birthday">Sort by birthday</button>
		<br> <br>
	</div>

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
		<!-- Important for sorting -->
		<tbody class="list"> 
		 
		<?php
		
		$result = AlumniDB::getLay ();
		if ($result->num_rows > 0) {
			// output data of each row
			
			while ( $row = $result->fetch_assoc () ) {
				echo '<tr>';
				// echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
				echo '<td class="name">' . $row ['name'] . '</td>';
				echo '<td class="birthday">' . $row ['birthday'] . '</td>';
				echo '<td class="years_present">' . $row ['years_present'] . '</td>';
				echo '<td class="address">' . $row ['address'] . '</td>';
				echo '<td class="phone">' . $row ['phone'] . '</td>';
				echo '<td class="fax">' . $row ['fax'] . '</td>';
				echo '<td class="mobile">' . $row ['mobile'] . '</td>';
				echo '<td class="email">' . $row ['email'] . '</td>';
				?>
				<td>
				<form action="lay.php#layLink" method="post">
					<input type="hidden" name="action" value="delete">
					<!-- HIDDEN id here -->
					<input type="hidden" name="delete_id"
						value="<?php echo $row['id'];?>"> <input type="image"
						src="images/delete.png" alt="Submit" title="delete"
						onclick="return confirm('Are you sure you want to delete this item?');">
				</form>
				<form action="editLay.php" method="post">
					<input type="hidden" name="edit_id"
						value="<?php echo $row['id'];?>"> <input type="image"
						src="images/edit.png" alt="Submit" title="edit">
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
