<?php include 'connection.php'; ?>




<?php if (isset($_POST['btn'])) {
    
    
    $FileProp = $_FILES['uploaded'];

$FileName = $_FILES['uploaded']['name'];
$FileType = $_FILES['uploaded']['type'];
$FileTemp = $_FILES['uploaded']['tmp_name'];
$File_Size = $_FILES['uploaded']['size'];
    
$folder = 'images/';

if (
    strtolower($FileType) == 'image/png' ||
    strtolower($FileType) == 'image/jpg' ||
    strtolower($FileType) == 'image/jpeg'
){
    if($File_Size <= 1000000) {
        $folder = $folder.$FileName; 
        $fName = $_POST['fname'];
        $lName = $_POST['lname'];
        $Email = $_POST['email'];
        $Phone = $_POST['num'];
        $Address = $_POST['address'];
        $Gender = $_POST['gen'];
        $City = $_POST['city'];
        $Courses = $_POST['Course'];
        
        $cor = implode(',', $Courses); 
        
        $query = "insert into iphones (StdFirstName,StdAddress,Gender,City,Courses,StdEmail,StdPhoneNum,StdNickName,StdPicture) values ('$fName','$Address','$Gender', '$City', '$cor','$Email','$Phone','$lName','$folder')";
        $res = mysqli_query($con, $query); 
        
        
        if ($res) {
            echo "<script>alert('Data Inserted!! ');window.location.href = 'viewdata.php';</script>";
            move_uploaded_file($FileTemp, $folder);

        }
        
        else {
            echo "<script>alert('Data not Inserted!! ');window.location.href = 'index.php';</script>";
        }


}else{

    echo "<script>alert('Photo should be less than 1 MB!!');window.location.href = 'index.php';</script>";

}
}else {
    echo "<script>alert('Please insert the proper profile photo!!');window.location.href = 'index.php';</script>";
}


} 


?>

 <?php if (isset($_POST['Upd'])) {
$StudentID = $_POST['stdid'];
   $fName = $_POST['fname'];
  $lName = $_POST['lname'];
  $Email = $_POST['email'];
  $Phone = $_POST['num'];
  $Address = $_POST['address'];
  $Gender = $_POST['gen'];
  $City = $_POST['city'];
  $Courses = $_POST['Course'];
  $cor = implode(',', $Courses);

    $cor = implode(',', $Courses); //array to string

    $query =   "UPDATE iphones SET StdFirstName = '$fName',StdAddress = '$Address',Gender = '$Gender',City = '$City',Courses = '$cor',StdEmail = '$Email',StdPhoneNum = '$Phone',StdNickName = '$lName'
    WHERE StdId = '$StudentID'";
  
    $res = mysqli_query($con, $query); //true //false

    if ($res) {
        echo "<script>alert('Data Updated!! ');window.location.href = 'ViewData.php';</script>";
    } else {
        echo "<script>alert('Data not Updated!! ');window.location.href = 'ViewData.php';</script>";
    }
} ?>