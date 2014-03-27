<?php
	include_once __DIR__ . '/../inc/functions.php';
	
	class Users  {
		
		static public function Get($id = null)
		{
			$sql = "SELECT U.*, K.Name as UserType_Name
					FROM 2013Fall_Users U Join 2013Fall_Keywords K ON U.UserType = K.id
				   ";
			if($id == null){
				//	Get all records
				return fetch_all($sql);
			}else{
				// Get one record
				
				$sql .= " WHERE U.id = $id ";
				if(($results = fetch_all($sql)) && count($results) > 0){
					return $results[0];
				}else{
					return null;
				}
			}
		}
		
		static public function Save($row)
		{
			$conn = GetConnection();
			
			$row = escape_all($row, $conn);
			if (!empty($row['id'])) {
				$sql = "Update 2013Fall_Users
							Set FirstName='$row[FirstName]', LastName='$row[LastName]',
								Password='$row[Password]', fbid='$row[fbid]', UserType='$row[UserType]'
						WHERE id = $row[id]
						";
			}else{
				$sql = "INSERT INTO 2013Fall_Users
						(FirstName, LastName, Password, fbid, UserType)
						VALUES ('$row[FirstName]', '$row[LastName]', '$row[Password]', '$row[fbid]', '$row[UserType]' ) ";				
			}
			
			
			//echo $sql;
			$results = $conn->query($sql);
			$error = $conn->error;
			$conn->close();
			
			return $error ? array ('sql error' => $error) : false;
		}

		static public function Blank()
		{
			return array( 'id' => null);
		}
			
		static public function Delete($id)
		{
			
		}
		
		static public function Validate($row)
		{
			$errors = array();
			if(empty($row['FirstName'])) $errors['FirstName'] = "is required";
			if(empty($row['LastName'])) $errors['LastName'] = "is required";
			
			if(!is_numeric($row['UserType'])) $errors['UserType'] = "must be a number";
			if(empty($row['UserType'])) $errors['UserType'] = "is required";
			
			return count($errors) > 0 ? $errors : false ;
		}
		
	}
	
	
	
	
	
	
	
	
	
	
	