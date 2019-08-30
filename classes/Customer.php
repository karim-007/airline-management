<?php
 /**
  * Customer class
  */
 class Customer
 {
 	private $db;
	private $fm;
 	function __construct()
 	{
 		$this->db = new Database();
		$this->fm = new Format();
 	}

 	public function loginUser($data)
 	{
 		$username = $data['username'];
		$password = $data['password'];
		$sql = "SELECT * from users where username = :username and password = :password limit 1";
		$query = $this->db->link->prepare($sql);
		$query->bindValue(':username',$username);
		$query->bindValue(':password',$password);
		$query->execute();
		$result = $query->fetch(PDO::FETCH_OBJ);
		if ($result) {
			Session::init();
			Session::set("login", true);
			Session::set("id",$result->id);
			Session::set("username",$result->username);
			Session::set("email", $result->email);
			header("location:index.php");
		}else{
			$msg = "<span style='color:red;font:22px;'>User name or password not match!!</span>";
			return $msg;
		}
 	}

 	public function registration($data)
 	{
 		$username = $data['username'];
		$password = $data['password'];
		$email = "";
		$sql = "INSERT into users(username,password,email) 
            VALUES(:username,:password,:email)";
        $query = $this->db->link->prepare($sql);
		$query->bindValue(':username',$username);
		$query->bindValue(':password',$password);
		$query->bindValue(':email',$email);
		
		$result = $query->execute();
		if ($result) {
			header("Location:login.php");
		}else{
			$msg = "<span style='color:red;font:22px;'> can't Register!!</span>";
			return $msg;
		}
 	}
 	public function sendContact($data)
	{
		$name = $data['name'];
		$email = $data['email'];
		$message = $data['message'];
		$sql = "INSERT into tbl_contact(name,email,message) 
            VALUES(:name,:email,:message)";
        $query = $this->db->link->prepare($sql);
		$query->bindValue(':name',$name);
		$query->bindValue(':email',$email);
		$query->bindValue(':message',$message);
		$result = $query->execute();
		if ($result) {
			$msg = "<span style='color:green;font:22px;'>Message sent succesfull!!</span>";
			return $msg;
		}else{
			$msg = "<span style='color:red;font:22px;'>Message can't sent succesfull!!</span>";
			return $msg;
		}
	}

	public function getAllAirport()
	{
		$sql = "SELECT * from tbl_airport";
		$query = $this->db->link->prepare($sql);
		$query->execute();
		$result = $query->fetchAll(PDO::FETCH_OBJ);
		if ($result) {
			return $result;
		}
	}
	public function searchFlight($fInstance)
	{

		$sql = "SELECT * from tbl_flight_info where fInstance=:fInstance";
		$query = $this->db->link->prepare($sql);
		$query->bindValue(':fInstance',$fInstance);
		$query->execute();
		$result = $query->fetchAll(PDO::FETCH_OBJ);
		if ($result) {
			return $result;
		}
	}
	public function getAirportById($aId)
	{
		$sql = "SELECT * from tbl_airport where aId = :aId limit 1";
		$query = $this->db->link->prepare($sql);
		$query->bindValue(':aId',$aId);
		$query->execute();
		$result = $query->fetch(PDO::FETCH_OBJ);
		if ($result) {
			return $result->name;
		}
	}
	public function getAllFlight()
	{

		$sql = "SELECT * from tbl_flight_info";
		$query = $this->db->link->prepare($sql);
		$query->execute();
		$result = $query->fetchAll(PDO::FETCH_OBJ);
		if ($result) {
			return $result;
		}
	}

	public function addBooking($data)
	{
		$name = $data['name'];
		$usId = SESSION::get('id');
		$email = $data['email'];
		$fTo = $data['to'];
		$fFrom = $data['from'];
		$class = $data['class'];
		$time = $data['time'];
		$date = $data['date'];
		$sql = "INSERT into tbl_booking(usId,name,email,fTo,fFrom,class,time,date) 
            VALUES(:usId,:name,:email,:fTo,:fFrom,:class,:time,:date)";
        $query = $this->db->link->prepare($sql);
        $query->bindValue(':usId',$usId);
		$query->bindValue(':name',$name);
		$query->bindValue(':email',$email);
		$query->bindValue(':fTo',$fTo);
		$query->bindValue(':fFrom',$fFrom);
		$query->bindValue(':class',$class);
		$query->bindValue(':time',$time);
		$query->bindValue(':date',$date);
		$result = $query->execute();
		if ($result) {
			$msg = "<span style='color:green;font:22px;'>Booking succesfull!!</span>";
			return $msg;
		}else{
			$msg = "<span style='color:red;font:22px;'>Message can't Booking!!</span>";
			return $msg;
		}
	}

	public function getBookingListByUserId($usId)
	{
		$sql = "SELECT * from tbl_booking where usId = :usId";
		$query = $this->db->link->prepare($sql);
		$query->bindValue(':usId',$usId);
		$query->execute();
		$result = $query->fetchAll(PDO::FETCH_OBJ);
		if ($result) {
			return $result;
		}
	}
 }

?>