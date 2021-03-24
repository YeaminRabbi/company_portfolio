<?php
	require_once 'dbConfig.php';
	session_start();

	
	///////////////////////////Admin Login/////////////////////////
	if (isset($_POST['btn-login'])) {
		$email=$_POST['email'];
		$password=md5($_POST['password']);

		
		$sql = "select * from admin where email = '$email' and password = '$password';";
		$stmt = $pdo->prepare($sql);
	    $stmt->execute(array(
	        ':email' => $email,
	        ':password' => $password));

	     if($stmt->rowCount()==1){
	     	
	     	$_SESSION['admin_login']=1;
	     	$admin=getUserData($db,"email",$email);
	     	$_SESSION['admin_info']=$admin;
			header("Location: index.php");

	     }
	     else{
	     	$_SESSION['admin_login']=0;
	     	header("Location: login.php");
	     }

	}


	//////////////////Header Section Updating text Logo////////////////////
	if(isset($_POST['btn-textLogo']))
	{
		$data=$_POST['text_logo'];
		update_data($db,"header_section","text_logo",$data);

		header("Location: header_section_textLOGO.php");
	}
	
	///////////////////////Header Section Updating brand Logo///////////////
	if(isset($_POST['btn-imageLogo']))
	{	
		$uploadOk=1;

		if(!empty($_FILES['img_file']['name']))
		{
			$file_name = $_FILES['img_file']['name'];
			$file_type = $_FILES['img_file']['type'];
			$file_size = $_FILES['img_file']['size'];
			$file_tem_Loc = $_FILES['img_file']['tmp_name'];

			$target_dir= "img/brand_logo/";
			//checking for proper image formate
			$target_file = $target_dir . basename($_FILES['img_file']['name']);
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
				  $uploadOk = 0;
				  header("Location: header_section_imageLOGO.php?msg=Invalid Formate");
				  die();
			}


			if($uploadOk==1)
			{
				move_uploaded_file($file_tem_Loc, "../".$target_file);
				update_data($db,"header_section","image_logo",$target_file);
			}

			header("Location: header_section_imageLOGO.php");
		}
		else{
			header("Location: header_section_imageLOGO.php?msg=Upload Image");
		}
		

	}


	///////////////////Header Section Toggle between Image and Text////////////////////
	if(isset($_POST['btn-imgactive']))
	{
		update_data($db,"header_section","image_logo_status",1);
		update_data($db,"header_section","text_logo_status",0);
		header("Location: header_section_toggle.php");
	}

	if(isset($_POST['btn-textactive']))
	{
		update_data($db,"header_section","image_logo_status",0);
		update_data($db,"header_section","text_logo_status",1);
		header("Location: header_section_toggle.php");
	}

	if (isset($_POST['btn-imgdeactive']) || isset($_POST['btn-textdeactive'])) {
		header("Location: header_section_toggle.php");
	}


	///Banner Section Title Part
	if(isset($_POST['btn-bannerTitle']))
	{
		$title=$_POST['banner_title'];
		update_data($db,"banner_section","title",$title);
		header("Location: banner_section.php?titlemsg=Updated");

	}

	///Banner Section Sub-Title Part
	if(isset($_POST['btn-bannerSubTitle']))
	{

		$data=$_POST['subtitle'];
		update_data($db,"banner_section","sub_title",$data);
		header("Location: banner_section.php?subtitlemsg=Updated");

	}


	///////////////////////About Us section/////////////////////////

	/////////////////Text Portion
	if(isset($_POST['btn-aboutus']))
	{
		$data= $_POST['description'];
		update_data($db,"aboutus_section","description",$data);
		header("Location: aboutus_section.php?msg=Updated");

	}

	/////////////////Image Portion////////////////////
	if(isset($_POST['btn-aboutus_img']))
	{
		$uploadOk=1;

		if(!empty($_FILES['img_file']['name']))
		{
			$file_name = $_FILES['img_file']['name'];
			$file_type = $_FILES['img_file']['type'];
			$file_size = $_FILES['img_file']['size'];
			$file_tem_Loc = $_FILES['img_file']['tmp_name'];

			$target_dir= "img/about_us/";
			//checking for proper image formate
			$target_file = $target_dir . basename($_FILES['img_file']['name']);
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
				  $uploadOk = 0;
				  header("Location: aboutus_section.php?aboutmsg=Invalid Formate");
				  die();
			}


			if($uploadOk==1)
			{
				move_uploaded_file($file_tem_Loc, "../".$target_file);
				update_data($db,"aboutus_section","image",$target_file);
				header("Location: aboutus_section.php");
			}

			
		}
		else{
			header("Location: aboutus_section.php?aboutmsg=Upload Image");
		}
		

	}



	//////////OUR VIEWS Section////////////////////

	//VISION portion
	if(isset($_POST['btn-vision_update']))
	{
		$data=$_POST['vision'];
		update_data($db,"our_view_section","our_vision",$data);
		header("Location: our_view_section.php?vmsg=Updated");
	}

	//MISSION portion
	if(isset($_POST['btn-mission_update']))
	{
		$data=$_POST['mission'];
		update_data($db,"our_view_section","our_mission",$data);
		header("Location: our_view_section.php?mmsg=Updated");	
	}

	//CONCEPT portion
	if(isset($_POST['btn-concept_update']))
	{
		$data=$_POST['concept'];
		update_data($db,"our_view_section","our_concept",$data);
		header("Location: our_view_section.php?cmsg=Updated");
	}



	/////////////////// OUR TEAM ///////////////////////

	/////// edit portion ////////
	if(isset($_POST['btn-memberedit']))
	{
		$id = $_POST['id'];
		$name= $_POST['name'];
		$title= $_POST['title'];
		$details= $_POST['details'];

		update_data_byID($db,"team_section","name",$name,$id);
		update_data_byID($db,"team_section","title",$title,$id);
		update_data_byID($db,"team_section","details",$details,$id);

		$uploadOk=1;
		if(!empty($_FILES['img_file']['name']))
		{
			$file_name = $_FILES['img_file']['name'];
			$file_type = $_FILES['img_file']['type'];
			$file_size = $_FILES['img_file']['size'];
			$file_tem_Loc = $_FILES['img_file']['tmp_name'];

			$target_dir= "img/our_team/";
			
			//checking for proper image formate
			$target_file = $target_dir . basename($_FILES['img_file']['name']);
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
				  $uploadOk = 0;
				  header("Location: our_team_section.php");
				  die();
			}


			if($uploadOk==1)
			{
				move_uploaded_file($file_tem_Loc, "../".$target_file);
				update_data_byID($db,"team_section","image",$target_file,$id);
				header("Location: our_team_section.php");
			}
	
		}
		else{
			header("Location: our_team_section.php");
		}


		header("Location: our_team_section.php");


	}

	///////// delete member ////////
	if(isset($_GET['teamID']))
	{
		$id=$_GET['teamID'];

		delete_data_byID($db,"team_section",$id);

		header("Location: our_team_section.php");
	}

	////// add member /////////
	if (isset($_POST['btn-memberadd'])) {
		
		$uploadOk=1;

		$name= $_POST['name'];
		$title= $_POST['title'];
		$details= $_POST['details'];

		if(!empty($_FILES['img_addfile']['name']))
		{
			$file_name = $_FILES['img_addfile']['name'];
			$file_type = $_FILES['img_addfile']['type'];
			$file_size = $_FILES['img_addfile']['size'];
			$file_tem_Loc = $_FILES['img_addfile']['tmp_name'];

			$target_dir= "img/our_team/";
			
			//checking for proper image formate
			$target_file = $target_dir . basename($_FILES['img_addfile']['name']);
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
				  $uploadOk = 0;
				  header("Location: our_team_section.php");
				  die();
			}


			if($uploadOk==1)
			{
				move_uploaded_file($file_tem_Loc, "../".$target_file);


				$query = $db->prepare("insert into team_section (name, image,title,details) values (?,?,?,?)");
				$query->bind_param("ssss", $name, $target_file, $title, $details);
				$query->execute();

				header("Location: our_team_section.php");
			}
	
		}
		else{
			header("Location: our_team_section.php");
		}


		header("Location: our_team_section.php");

	}



	///////////// DOYENs SECTION ////////////////////
	if(isset($_POST['btn-addDeyon']))
	{
		if(empty($_POST['details']))
		{
			header("Location: ADDdoyen_section.php");
			die();
		}


		$name=$_POST['name'];
		$details=$_POST['details'];
		$title=$_POST['title'];


		$uploadOk=1;

		if(!empty($_FILES['img_doyenfile']['name']))
		{
			$file_name = $_FILES['img_doyenfile']['name'];
			$file_type = $_FILES['img_doyenfile']['type'];
			$file_size = $_FILES['img_doyenfile']['size'];
			$file_tem_Loc = $_FILES['img_doyenfile']['tmp_name'];

			$target_dir= "img/doyen/";
			
			//checking for proper image formate
			$target_file = $target_dir . basename($_FILES['img_doyenfile']['name']);
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
				  $uploadOk = 0;
				  header("Location: ADDdoyen_section.php");
				  die();
			}


			if($uploadOk==1)
			{
				move_uploaded_file($file_tem_Loc, "../".$target_file);


				$query = $db->prepare("insert into doyens_section (name,image,title,details) values (?,?,?,?)");
				$query->bind_param("ssss", $name, $target_file, $title, $details);
				$query->execute();

				header("Location: VIEWdoyen_section.php");
			}
	
		}
		else{
			header("Location: ADDdoyen_section.php?msg=notfoundIMAGE");
		}

	}	


	////////// deleting doyen from the database //////////
	if(isset($_GET['doyendeleteID']))
	{
		$id=$_GET['doyendeleteID'];

		delete_data_byID($db,"doyens_section",$id);
		header("Location: VIEWdoyen_section.php");

	}


	/////// EDIT doyen information /////////////////////
	if(isset($_POST['btn-editDeyon']))
	{
		$id=$_POST['id'];
		$name=$_POST['name'];
		$details=$_POST['details'];
		$title=$_POST['title'];

		update_data_byID($db,"doyens_section","name",$name,$id);
		update_data_byID($db,"doyens_section","title",$title,$id);
		update_data_byID($db,"doyens_section","details",$details,$id);


		$uploadOk=1;
		if(!empty($_FILES['img_editdoyenfile']['name']))
		{
			$file_name = $_FILES['img_editdoyenfile']['name'];
			$file_type = $_FILES['img_editdoyenfile']['type'];
			$file_size = $_FILES['img_editdoyenfile']['size'];
			$file_tem_Loc = $_FILES['img_editdoyenfile']['tmp_name'];

			$target_dir= "img/doyen/";
			
			//checking for proper image formate
			$target_file = $target_dir . basename($_FILES['img_editdoyenfile']['name']);
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
				  $uploadOk = 0;
				  header("Location: EDITdoyen_section.php?doyenID=$id");
				  die();
			}


			if($uploadOk==1)
			{
				move_uploaded_file($file_tem_Loc, "../".$target_file);
				update_data_byID($db,"doyens_section","image",$target_file,$id);
				header("Location: VIEWdoyen_section.php");
			}
	
		}
		else{
			header("Location: EDITdoyen_section.php?doyenID=$id");
		}


		header("Location: VIEWdoyen_section.php");

	}



	///////// DETAILS SECTION ////////////////

	if(isset($_POST['btn-EMPLOYEEDETAILS']))
	{
		update_data($db,"details","employee",$_POST['employee_number']);
		update_data($db,"details","employee_details",$_POST['employee_details']);

		header("Location: section_details.php?emsg=UPDATED");
	}


	if(isset($_POST['btn-PROJECTDETAILS']))
	{
		update_data($db,"details","projects",$_POST['projects_number']);
		update_data($db,"details","projects_details",$_POST['projects_details']);

		header("Location: section_details.php?pmsg=UPDATED");
	}

	if(isset($_POST['btn-PARTNERDETAILS']))
	{
		update_data($db,"details","partners",$_POST['partners_number']);
		update_data($db,"details","partners_details",$_POST['partners_details']);

		header("Location: section_details.php?ptmsg=UPDATED");
	}




	////////// Service Section ////////////////////

	if(isset($_POST['btn-service_edit']))
	{
		update_data_byID($db,"our_service","name",$_POST['name'],$_POST['id']);
		update_data_byID($db,"our_service","details",$_POST['details'],$_POST['id']);


		header("Location: section_our_service.php");
	}

	if(isset($_GET['serviceID']))
	{
		$serviceID=$_GET['serviceID'];
		delete_data_byID($db,"our_service",$serviceID);
		header("Location: section_our_service.php");

	}

	if(isset($_POST['btn-service_add']))
	{

		$name=$_POST['name'];
		$details= $_POST['details'];

		$query = $db->prepare("insert into our_service (name,details) values (?,?)");
		$query->bind_param("ss", $name,$details);
		$query->execute();
		header("Location: section_our_service.php");
	}



	/////// OFFICE Info ////////

	if(isset($_POST['btn-OFFICEADDRESS']))
	{
		update_data($db,"office_info","address",$_POST['address']);
		header("Location: section_office_info.php?addressmsg=Updated");

	}

	if(isset($_POST['btn-OFFICECONTACT']))
	{
		update_data($db,"office_info","contact",$_POST['contact']);
		header("Location: section_office_info.php?contactmsg=Updated");	
	}

	if(isset($_POST['btn-OFFICEEMAIL']))
	{
		update_data($db,"office_info","email",$_POST['email']);
		header("Location: section_office_info.php?emailmsg=Updated");	
	}



	//// Footer Section /////////////

	if(isset($_POST['btn-footerTEXT']))
	{
		update_data($db,"footer","footer_text",$_POST['footer_TEXT']);
		header("Location: section_footer_text.php?msg=UPDATED");	

	}




	/////// updating all data from any table based on collumn with ID and where clause/////// 
	function update_data_byID($db,$table,$update_column,$update_data,$id)
	{
		$sql="UPDATE ".$table." SET ".$update_column." = '".$update_data."' where id='".$id."';";

		$db->query($sql);
	}

	/////// delete all data from any table based on collumn with ID and where clause/////// 
	function delete_data_byID($db,$table,$id)
	{
		$sql="DELETE FROM ".$table." WHERE id ='".$id."';";
		$db->query($sql);
	}



	//////////// updating all data from any table based on collumn ////////////////////
	function update_data($db,$table,$update_column,$update_data)
	{
		$sql="UPDATE ".$table." SET ".$update_column." = '".$update_data."';";

		$db->query($sql);
	}




	//FUNCTION for fetching user's all data 
	function getUserData($db,$column_key,$search_key){

		$sql="Select * FROM admin WHERE ".$column_key." = '".$search_key."';";
		$result = mysqli_query($db,$sql);

		// Assoc array
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
				
		// Free result set
		mysqli_free_result($result);
		return $row;
	}

?>