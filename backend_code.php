<?php
	
	require 'admin/dbConfig.php';

	$header_section= fetch_data($db,"header_section");
	$banner_section= fetch_data($db,"banner_section");
	$aboutus_section=fetch_data($db,"aboutus_section");
	$our_view_section=fetch_data($db,"our_view_section");
	$details_section = fetch_data($db,"details");
	$office_info_section = fetch_data($db, "office_info");
	$footer_section= fetch_data($db,"footer");

	$team_section=fetch_data_pdo($pdo,"team_section");
	$doyens_section=fetch_data_pdo($pdo,"doyens_section");
	$our_service_section=fetch_data_pdo($pdo,"our_service");
	


	/////// Contact US FORM //////////
	if(isset($_POST['btn-text']))
	{
		$email=$_POST['email'];
		$name = $_POST['name'];
		$text = $_POST['message'];
		$contact = $_POST['contact'];

		$query = $db->prepare("insert into contact_us (name,email,contact,text) values (?,?,?,?)");
		$query->bind_param("ssss", $name,$email,$contact,$text);
		$query->execute();
		header("Location: index.php?id=#contact");
	}



	

	//Custom Functions by Rabbi
	function fetch_data($db,$table_name)
	{
		$sql="Select * FROM ".$table_name.";";
		$result = mysqli_query($db,$sql);

		// Assoc array
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
				
		// Free result set
		mysqli_free_result($result);
	
		return $row;
		
	}


	function fetch_data_pdo($pdo,$table)
	{
		$sql="select * from ".$table.";";
        $statement = $pdo->prepare($sql);
        $statement->execute();

        $row = $statement->fetchAll();

        return $row;
	}


?>