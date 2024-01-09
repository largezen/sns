<?php 
header("Access-Control-Allow-Origin:*");
header("Content-Type: application/json");
header("Access-Control-Allow-Methods: GET,POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// registration
	if(isset($_GET['registration']) && $_GET['registration']==true){
		$data = json_decode(file_get_contents("php://input"));
		$name = trim(htmlspecialchars($data['name']));
		$gender = trim(htmlspecialchars($data['gender']));
		$dob = trim(htmlspecialchars($data['dob']));
		$city = trim(htmlspecialchars($data['name']));
		$address = trim(htmlspecialchars($data['address']));
		$state = trim(htmlspecialchars($data['state']));
		$country = trim(htmlspecialchars($data['country']));
		$email = trim(htmlspecialchars($data['email']));
		$phone = trim(htmlspecialchars($data['phone']));
		$password = trim(htmlspecialchars($data['password']));
		$password = password_hash($password, PASSWORD_BCRYPT);
		$status = "pending";
		$type = "lead";
	}
}
?>