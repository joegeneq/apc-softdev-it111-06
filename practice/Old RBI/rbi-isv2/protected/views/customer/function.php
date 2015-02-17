<?php

function getName($id)
{
	if ($id == null)
		return "";

	$mysqli = new mysqli("127.0.0.1", "rbi-is", "rbi-is", "rbi-is");
		
		if (!$mysqli->connect_errno)
		{
			$select = "SELECT * FROM company WHERE id = $id";	
								
			$records = array();				
			if ($result = $mysqli->query($select))
			{				
				$row = $result->fetch_assoc();				
				return $row["company_name"];
			}			
		}
				
		$mysqli->close();
		return "";	
}
?>