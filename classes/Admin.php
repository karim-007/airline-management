<?php
 /**
  * Admin class
  */
 class Admin
 {
 	private $db;
	private $fm;
 	function __construct()
 	{
 		$this->db = new Database();
		$this->fm = new Format();
 	}
 	public function addAirportName($name)
 	{
 		$sql = "INSERT into tbl_airport(name) 
            VALUES(:name)";
        $query = $this->db->link->prepare($sql);
		$query->bindValue(':name',$name);
		$result = $query->execute();
		if ($result) {
			$msg = "<span style='color:green;font:22px;'>add succesfull!!</span>";
			return $msg;
		}else{
			$msg = "<span style='color:red;font:22px;'>can't sent add!!</span>";
			return $msg;
		}
 	}
 	public function addFlight($data)
 	{
 		$fNumber = $data['f_no'];
		$fInstance = $data['f_Instance'];
		$fFrom = $data['fFrom'];
		$fTo = $data['fTo'];
		$time = $data['time'];
		$date = $data['date'];
 		$sql = "INSERT into tbl_flight_info(fNumber,fInstance,fFrom,fTo,time,date) 
            VALUES(:fNumber,:fInstance,:fFrom,:fTo,:time,:date)";
        $query = $this->db->link->prepare($sql);
		$query->bindValue(':fNumber',$fNumber);
		$query->bindValue(':fInstance',$fInstance);
		$query->bindValue(':fFrom',$fFrom);
		$query->bindValue(':fTo',$fTo);
		$query->bindValue(':time',$time);
		$query->bindValue(':date',$date);
		$result = $query->execute();
		if ($result) {
			$msg = "<span style='color:green;font:30px;'>add succesfull!!</span>";
			return $msg;
		}else{
			$msg = "<span style='color:red;font:30px;'>can't sent add!!</span>";
			return $msg;
		}
 	}
 }

?>