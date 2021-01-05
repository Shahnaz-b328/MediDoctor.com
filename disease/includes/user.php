<?php 

include_once 'Session.php';
include 'Database.php';

?>
<?php 

	class User{
		private $db;

		public function __construct(){

			$this->db = new Database();
		}
		public function userRegistration($data) {
		$first_name = $data['first_name'];
		$last_name = $data['last_name'];
		$email = $data['email'];
		$address = $data['address'];
		$phone = $data['phone'];
		$password = $data['password'];
		$confirm_password = $data['confirm_password'];
		
		$sql = "INSERT INTO users (first_name, last_name, email, address, phone, password, confirm_password) VALUES('$first_name', '$last_name', '$email', '$address', '$phone', '$password', '$confirm_password')";
		
		}
	}

?>