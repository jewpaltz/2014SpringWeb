<?php
	include_once __DIR__ . '/../inc/functions.php';
	
	class Users  {
		
		static public function Get($id = null)
		{
			if($id == null){
				//	Get all records
				$sql = "SELECT U.*, K.Name as UserType_Name
						FROM 2013Fall_Users U Join 2013Fall_Keywords K ON U.UserType = K.id
					   ";
				return fetch_all($sql);
			}else{
				// Get on record
			}
		}
		
		static public function Create($row)
		{
			$conn = GetConnection();
			$sql = "INSERT INTO 2013Fall_Users (FirstName, LastName, ) VALUES ('$row[FirstName]', '$row[LastName]' ) ";
			$results = $conn->query($sql);
			$conn->close();
			
			return $arr;
		}

		static public function Blank()
		{
			return array( 'id' => null);
		}
		
		static public function Update($row)
		{
				
		}
	
		static public function Delete($id)
		{
			
		}
		
		static public function Validate($row)
		{
			
		}
		
	}
	