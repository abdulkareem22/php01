<?php include 'connection.php'; ?>
<?php include 'header.php'; ?>
<?php
$ID = $_GET['id'];
$query = "select * from iphones where StdId   = '$ID'";
$GetData = mysqli_query($con, $query);
$res = mysqli_fetch_assoc($GetData);
$checkEdit = $res['Courses']; 
$checkbox = explode(',', $checkEdit);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script>
  function validateForm() {
            var fname = document.forms["myForm"]["fname"].value;
            var gender = document.forms["myForm"]["gen"].value;
            var city = document.forms["myForm"]["city"].value;
            var email = document.forms["myForm"]["email"].value;
            var phone = document.forms["myForm"]["num"].value;
            var address = document.forms["myForm"]["address"].value;
            
            

           if ( fname == "") {
              alert("Name is required ");
              return false;
            } 
            if(!fname.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/)){
              alert("Write full first name");
             return false;
             }
            if ( email == "") {
              alert("Email is required ");
              return false;
            } 
            if (!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)) {
              alert("Invalid email ");
              return false;
            } 
            if ( phone == "") {
              alert("Phone number is required  ");
              return false;
            } 
           
            if ((phone.length !== 11)) {
              alert("Invalid phone number");
              return false;
            } 
            if (!phone.match(/^[0-9]{11}$/)) {
              alert("Invalid phone number  ");
              return false;
            } 
            

            if ( address == "") {
              alert("address is required ");
              return false;
            } 
            if ((address.length < 20)) {
              alert("adress should be 20 character");
              return false;
            } 


var b = 0, chk=document.getElementsByName("Course[]")
for(j=0;j<chk.length;j++) {
if(chk.item(j).checked == false) {
b++;
}
}
if(b == chk.length) {
alert(" select atleast one  course");

return false;
}          
           if ( gender == "") {
              alert(" select gender");
              return false;
           }
           if ( city == "") {
              alert(" select  city");
              return false;
           }

}
           


           
          





</script>


<style>
 
 #btn-ins{
    background-color:  #222;
    font-weight: bold;
    color: aliceblue;
}
.user-profile-image{
    border-radius: 40px;
}
.user-profile-image img{
    height: 200px;
    cursor: pointer;
    border-radius: 409px;
    /* border-color:  #54d400; */
    

}
.user-profile-image:hover .upload-photo{
    transform: scaleY(1);
    

}
.user-profile-image .upload-photo{
    /* background-color: #54d400;
    opacity: 0.9;
    width: 200px;
    height: 200px;
    position: absolute;
    bottom:0;
    left:15;
    cursor: pointer;
    transform: scaleY(0);
    transition: 0.5s;
    transform-origin: top;
    border-radius: 409px;
    padding: 2px; */
   
    

}
.user-profile-image .upload-photo::before{
    /* content: 'PROFILE ';
    color: #222;
    font-weight: bold;
    position: fixed;
    opacity:1;
    font-size: 24px;
    padding-top: 80px; */
}
.form-outline span{
    position: absolute;
    bottom: 30px;
    right: 20px;
    font-size: 17px;
    color: red;

}
</style>
</head>
<body>
<div class="container justify-content-center  text-center mt-4">
  <h1 style = "margin-top:150px;" >EDIT YOUR DATA</h1> <br>

<form name = "myForm" action="crud.php" onsubmit="return validateForm()" method = "post" enctype="multipart/form-data">
 <input type="text" name="stdid" value = "<?= $res['StdId'] ?>">
  <!-- image row -->
  <div class="row justify-content-center align-self-center">

<div class = "col-lg-12 container">
<input class="form-control" type="file" id="Pro_Image" name="uploaded" style="visibility: hidden;" />

<img class="mt-5" style="width:200px;"  src="<?= $res['StdPicture'] ?>" id="UserImage">

<div class="upload-photo text-center ">
  
 
</div>
</div>
      
  </div>




<!-- 1 row -->
<div class="row justify-content-center align-self-center mt-4" >

  <div class="col-md-6 mb-4">
    <div class="form-outline">
      <input type="text" id="contact-name" name = "fname" class="form-control form-control-lg" placeholder="First Name" onkeyup="validateName()" value = "<?= $res[
          'StdFirstName'
      ] ?>" />
      <span id="name-error"></span>
      <label class="form-label" for=""></label>
    </div>
  </div>
  <div class="col-md-6 mb-4">
    <div class="form-outline">
      <input type="text" id="" name = "lname" class="form-control form-control-lg" placeholder="Nick Name (optional)" value = "<?= $res[
          'StdNickName'
      ] ?>" /> 
      <label class="form-label" for=""></label>
    </div>
  </div>
</div>

<!-- 2 row -->

<div class="row justify-content-center align-self-center mt-4" >

  <div class="col-md-6 mb-4">
    <div class="form-outline">
      <input type="text" id="" name = "email" class="form-control form-control-lg" placeholder="Email"  value = "<?= $res[
          'StdEmail'
      ] ?>" />
      <label class="form-label" for=""></label>
    </div>
  </div>
  <div class="col-md-6 mb-4">
    <div class="form-outline">
      <input type="text" id="" name = "num" class="form-control form-control-lg" placeholder="Phone Number" value = "<?= $res[
          'StdPhoneNum'
      ] ?>" />
      <label class="form-label" for=""></label>
    </div>
  </div>
</div>

<!-- 3 row -->

<div class="row justify-content-center align-self-center mt-4">

  <div class="col-lg-12  col-md-12 mb-4">
    <div class="form-outline">
      <input type="text" id="" name = "address" class="form-control form-control-lg" placeholder="Address" value = "<?= $res[
          'StdAddress'
      ] ?>" />
      <label class="form-label" for=""></label>
    </div>
  </div>

</div>
<!-- 4 row -->

<div class="row justify-content-center align-self-center mt-4">

  <div class="col-lg-6 d-flex py-4   col-md-12 mb-4">

    <h6 class="mb-0 me-4 fs-5 ">Courses: </h6>

    <div class="form-check mb-0 me-4">
      <input type="checkbox" class="form-check-input fs-5" id="check1" name = "Course[]" value="Phyton" <?php if (in_array('Phyton', $checkbox)) {echo 'checked';} ?> >
      <label class="form-check-label" for="check1">Phyton</label>
    </div>
    <div class="form-check mb-0 me-4">
      <input type="checkbox" class="form-check-input fs-5" id="check2" name = "Course[]" value="C++" <?php if (in_array('C++', $checkbox)) {echo 'checked';} ?>>
      <label class="form-check-label" for="check2">C++</label>
    </div>
    <div class="form-check mb-0 me-4">
      <input type="checkbox" class="form-check-input fs-5" name = "Course[]" value="Flutter"   <?php if (in_array('Flutter', $checkbox)) {echo 'checked';} ?>>
      <label class="form-check-label">Flutter</label>
    </div>

  </div>

  <div class="col-lg-6 d-flex py-4   col-md-12 mb-4">

    <h6 class="mb-0 me-4 fs-5 ">Gender: </h6>

    <div class="form-check form-check-inline mb-0 me-4">
      <input class="form-check-input fs-5" type="radio" name="gen" id="femaleGender"
        value="Female"
        <?php if ($res['Gender'] == 'Female') {
                  echo 'checked';
              } ?>
         />
      <label class="form-check-label fs-5 " for="femaleGender">Female</label>
    </div>

    <div class="form-check form-check-inline mb-0 me-4">
      <input class="form-check-input fs-5" type="radio" name="gen" id="maleGender"
        value="Male"
        <?php if ($res['Gender'] == 'Male') {
                  echo 'checked';
              } ?> />
      <label class="form-check-label fs-5" for="maleGender">Male</label>
    </div>

    <div class="form-check form-check-inline mb-0">
      <input class="form-check-input fs-5" type="radio" name="gen" id="otherGender"
        value="Other"
        <?php if ($res['Gender'] == 'Other') {
                  echo 'checked';
              } ?> />
      <label class="form-check-label fs-5" for="otherGender">Other</label>
    </div>

  </div>

  </div>

<!-- 5 row -->

<div class="row justify-content-center align-self-center mt-4">
  <div class="col-lg-12  col-md-12 mb-4">

    <label for="city"></label>
      <select style="height: 50px;" class="form-control form-select fs-5 " id="city" name = "city"  >
        <option value="" >City</option>
        <option value = "Karachi" <?php if ($res['City'] == 'Karachi') {echo 'selected'; } ?>>Karachi</option>
        <option value = "Lahore" <?php if ($res['City'] == 'Lahore') {echo 'selected'; } ?>>Lahore</option>
        <option value = "Islamabad" <?php if ($res['City'] == 'Islamabad') {echo 'selected'; } ?>>Islamabad</option>
        <option value = "Peshawar" <?php if ($res['City'] == 'Peshawar') {echo 'selected'; } ?>>Peshawar</option>
      </select>


  </div>




</div>
<!-- button row -->
<div class="row justify-content-center align-self-center mt-4">
  <div class="col-lg-12  col-md-12 mb-4">
    <div class="d-flex justify-content-center pt-3">
      <!-- <a href="index.php"><button type="button" class="btn btn-light btn-lg">Reset all</button></a> -->
      <button type="submit" value = "submit" id = "btn-ins"  class="btn  btn-lg ms-2"name = "Upd" onclick="return validateForm()">UPDATE</button>
    </div>
  
  
  </div>
</div>


</form>

</div>
</body>
</html>



<?php include 'footer.php'; ?>
