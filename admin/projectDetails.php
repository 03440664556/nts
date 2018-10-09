<?php 

if(!isset($_SESSION)){
	session_start();
}


include 'connection.php';

$projectName = $_POST["projectName"];
$projectDetails = $_POST["projectDetails"];
$clientName = $_POST["clientName"];
$clientTestimonial = $_POST["clientTestimonial"];
$createdBy = $_POST["createdBy"];
$completedOn = $_POST["completedOn"];
$skills = $_POST["skills"];
$websiteLink = $_POST["websiteLink"];
$category = "";
$thumbNailImageChooser = "";
$headerImageChooser = "";

foreach($_POST['categories'] as $selected) {
	$category = $category . "," . $selected;
}

if(isset($_FILES["thumbNailImageChooser"])){
	$thumbNailImageChooser = $_FILES["thumbNailImageChooser"]["name"];
	$thumbNailImageChooser_tmp = $_FILES["thumbNailImageChooser"]["tmp_name"];
	$thumbNailImageChooser_size = $_FILES["thumbNailImageChooser"]["size"];

	uploadImages("uploads/thumbnails/", $thumbNailImageChooser, $thumbNailImageChooser_tmp, $thumbNailImageChooser_size);
}

if(isset($_FILES["thumbNailImageChooser"])){
	$headerImageChooser = $_FILES["headerImageChooser"]["name"];
	$headerImageChooser_tmp = $_FILES["headerImageChooser"]["tmp_name"];
	$headerImageChooser_size = $_FILES["headerImageChooser"]["size"];

	uploadImages("uploads/header/", $headerImageChooser, $headerImageChooser_tmp, $headerImageChooser_size);
}

if (isset($_FILES['chooseImages'])) {
    $myFile = $_FILES['chooseImages'];
    $fileCount = count($myFile["name"]);

    for ($i = 0; $i < $fileCount; $i++) {

			$ext = substr(strrchr($_FILES['chooseImages']['name'][$i], "."), 1); 
			$uploadDir = "uploads/slider/";
			$fPath = md5(rand() * time()) . ".$ext";
			$result = move_uploaded_file($_FILES['chooseImages']['tmp_name'][$i], $uploadDir . $_FILES['chooseImages']['name'][$i]);
        
    }
}

function uploadImages($target_dir, $file, $file_tmp, $file_size)
{
	$target_file = $target_dir . basename($file);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	    $check = getimagesize($file_tmp);
	    if($check !== false) {
	        // echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }
	}
	// Check if file already exists
	// if (file_exists($target_file)) {
	//     echo "Sorry, file already exists.";
	//     $uploadOk = 0;
	// }
	// Check file size
	if ($file_size > 500000) {
	    echo "Sorry, your file is too large.";
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($file_tmp, $target_file)) {
	        // echo "The file ". basename( $file). " has been uploaded.";
	    } else {
	        echo "Sorry, there was an error uploading your file.";
	    }
	}
}

echo "<br> Project Name: " . $projectName;
echo "<br> Project Details: " . $projectDetails;
echo "<br> Client Name: " . $clientName;
echo "<br> Client Testimonial: " . $clientTestimonial;
echo "<br> Created By: " . $createdBy;
echo "<br> Completed On: " . $completedOn;
echo "<br> Skills: " . $skills;
echo "<br> Website Link: " . $websiteLink;
echo "<br> Thumbnail Image: " . "uploads/thumbnails/" . $thumbNailImageChooser;
echo "<br> Header image: " . "uploads/header/" . $headerImageChooser;
echo "<br> Slider Images: " . "uploads/slider/" . $_FILES['chooseImages']["name"][0];

$thumbnail = "uploads/thumbnails/" . $thumbNailImageChooser;
$header = "uploads/header/" . $headerImageChooser;


$status=false;

$sql="INSERT INTO tbl_projectdetails (thumbnail_image, header_image, project_details, client_name, client_testimonial, created_by, completed_on, skills, website_link, project_name, category) VALUES (?,?,?,?,?,?,?,?,?,?,?)"; 

$stmt = $conn->prepare($sql);

if($stmt === false) { 
	trigger_error('Wrong SQL: ' . $sql. ' Error: ' . $conn->error, E_USER_ERROR); 
}

$stmt->bind_param('sssssssssss', $thumbnail, $header, $projectDetails, $clientName, $clientTestimonial, $createdBy, $completedOn, $skills, $websiteLink, $projectName, $category);

if($stmt->execute()){
	$status=true;
}
else{
	echo $stmt->error;
	$status=false;
}

$stmt->close();

$status1=false;

$sql = "SELECT max(pid) as mpid FROM tbl_projectdetails";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["mpid"]. "<br>";

	    $myFile = $_FILES['chooseImages'];
	    $fileCount = count($myFile["name"]);
	    for ($i = 0; $i < $fileCount; $i++) {
	        
			$sql="INSERT INTO tbl_sliderimages (pid, image) VALUES (?,?)"; 

			$stmt = $conn->prepare($sql);

			if($stmt === false) { 
				trigger_error('Wrong SQL: ' . $sql. ' Error: ' . $conn->error, E_USER_ERROR); 
			}

			$image = "uploads/slider/" . $_FILES['chooseImages']["name"][$i];

			$stmt->bind_param('ss', $row["mpid"], $image);

			if($stmt->execute()){
				$status1=true;
			}
			else{
				echo $stmt->error;
				$status1=false;
}

$stmt->close();
	    }
    }
} else {
    echo "0 results";
}

if($status && $status1){
	echo 'success';
	header("Location: Details.php");
}
if(!$status || !$status1){
	echo 'failed';
}


 ?>