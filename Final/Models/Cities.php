<?php

	/**
	 * 
	 */
	class Cities {
		
		public static function Search($query) {
			$sql = "SELECT * FROM US_Zip_Codes WHERE city LIKE '%$query%' or state LIKE '%$query%' or zip LIKE '%$query%' Limit 10 ";
			//echo "$sql";
			return fetch_all($sql);
		}
	}
	
	
