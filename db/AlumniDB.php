<?php
/**
 * 
 */
class AlumniDB {
	function __construct() {
	}
	public static function insertLay() {
		require_once 'login.php';
		// Database access here
		$conn = new mysqli ( $db_hostname, $db_username, $db_password, $db_database );
		// Check connection
		if ($conn->connect_error) {
			die ( "Connection failed: " . $conn->connect_error );
		}
		$test2 = "";
		// prepare and bind
		$stmt = $conn->prepare ( "INSERT INTO lay (name,birthday,years_present,address,phone,fax,mobile,email) VALUES(?,?,?,?,?,?,?,?)" );
		$stmt->bind_param ( "ssssssss", $name, $birthday, $years, $address, $phone, $fax, $mobile, $email );
		// Set param and execute
		// name, birthday, years, phone, fax, mobile, email, address
		$name = sanitize_mysql ( $conn, $_POST ['name'] );
		$birthday = sanitize_mysql ( $conn, $_POST ['birthday'] );
		$years = sanitize_mysql ( $conn, $_POST ['years'] );
		$phone = sanitize_mysql ( $conn, $_POST ['phone'] );
		$fax = sanitize_mysql ( $conn, $_POST ['fax'] );
		$mobile = sanitize_mysql ( $conn, $_POST ['mobile'] );
		$email = sanitize_mysql ( $conn, $_POST ['email'] );
		$address = sanitize_mysql ( $conn, $_POST ['address'] );
		// $test2 = "test45";
		$stmt->execute ();
		// Close connections
		$stmt->close ();
		$conn->close ();
		echo "<h1>New records created successfully</h1>";
	}
	public static function insertOrdained() {
		require_once 'login.php';
		// Database access here
		$conn = new mysqli ( $db_hostname, $db_username, $db_password, $db_database );
		// Check connection
		if ($conn->connect_error) {
			die ( "Connection failed: " . $conn->connect_error );
		}
		$test2 = "";
		// prepare and bind
		$stmt = $conn->prepare ( "INSERT INTO ordained (name,diocese,birthday,ordination,address,phone,fax,mobile,email) VALUES(?,?,?,?,?,?,?,?,?)" );
		$stmt->bind_param ( "sssssssss", $name, $diocese, $birthday, $ordination, $address, $phone, $fax, $mobile, $email );
		// Set param and execute
		// name, diocese, birthday, ordination, address, phone, fax, mobile, email
		$name = sanitize_mysql ( $conn, $_POST ['name'] );
		$diocese = sanitize_mysql ( $conn, $_POST ['diocese'] );
		$birthday = sanitize_mysql ( $conn, $_POST ['birthday'] );
		$ordination = sanitize_mysql ( $conn, $_POST ['ordination'] );
		$address = sanitize_mysql ( $conn, $_POST ['address'] );
		$phone = sanitize_mysql ( $conn, $_POST ['phone'] );
		$fax = sanitize_mysql ( $conn, $_POST ['fax'] );
		$mobile = sanitize_mysql ( $conn, $_POST ['mobile'] );
		$email = sanitize_mysql ( $conn, $_POST ['email'] );
		
		// $test2 = "test45";
		$stmt->execute ();
		// Close connections
		$stmt->close ();
		$conn->close ();
		echo "<h1>New records created successfully</h1>";
	}
	public static function getLay() {
		require 'login.php';
		$conn = new mysqli ( $db_hostname, $db_username, $db_password, $db_database );
		if ($conn->connect_error) {
			die ( "Connection failed: " . $conn->connect_error );
		}
		$sql = "SELECT * FROM lay";
		$result = $conn->query ( $sql );
		// if ($result->num_rows > 0) {
		// // output data of each row
		// while($row = $result->fetch_assoc()) {
		// // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
		// echo print_r($row);
		// }
		// } else {
		// echo "0 results";
		// }
		$conn->close ();
		return $result;
	}
	public static function getOrdained() {
		require 'login.php';
		$conn = new mysqli ( $db_hostname, $db_username, $db_password, $db_database );
		if ($conn->connect_error) {
			die ( "Connection failed: " . $conn->connect_error );
		}
		$sql = "SELECT * FROM ordained";
		$result = $conn->query ( $sql );
		$conn->close ();
		return $result;
	}
	
	public static function delete($table, $id) {
		if (is_int ( $id ) || $table === 'ordained' || $table === 'lay') {
			require 'login.php';
			// Create connection
			$conn = new mysqli ( $db_hostname, $db_username, $db_password, $db_database );
			if ($conn->connect_error) {
				die ( "Connection failed: " . $conn->connect_error );
			}
			
			// sql to delete a record
			$sql = "DELETE FROM $table WHERE id=$id";
			if ($conn->query ( $sql ) === TRUE) {
				echo "Record deleted successfully";
			} else {
				echo "Error deleting record: " . $conn->error;
			}
			
			$conn->close ();
		}else{
			echo "Error deleting record: Method args invalid";
		}
		
	}
}
?>