<?php
	class connect
	{
		public function conDb($firstName,$surname,$email,$password,$re_pass,$address)
		{	
			
			
			$db = new mysqli('localhost','thabo_tshego','genetics','cellphone');
			if(mysqli_connect_errno())
			{
				echo 'ERROR: Couldnt connect to database';
				exit;
			}
			
			$query = "INSERT INTO tblRegister values ('".$firstName."','".$surname."','".$email."','".$password."','".$re_pass."','".$address."' )";
			
			$results = $db->query($query);
			if(!$results)
			{
				echo 'An error has occured registration unsuccessful';
				exit;
			}
			
			echo $db->affected_rows."data insersed correctly";
			$db->close();
		
		}
	
	
	
	}
?>