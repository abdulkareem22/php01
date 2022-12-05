<?php include 'connection.php'; ?>
<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="style.css">
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="index.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
<style>
    #view-button{
  background-color: #222;
    font-weight: bold;
    color: aliceblue;
    border-radius: 6px;
    
}
#view2-button{
    background-color:  #54d400;
    font-weight: bold;
    color: aliceblue; 
    border-radius: 6px;
}
.table_section{
  height: 500px;
  overflow: auto;
  
  }
   table{
  width: 100%;
  table-layout: fixed;
  min-width: 900px;
  border-collapse: collapse; 
} 
thead th{
  position: sticky;
  top: 0;
  background-color: #f6f9fc;
  color: #8493a5;
}
th,td{
  border-bottom: 1px solid #dddddd;
 padding: 0px;
  word-break: break-all;
  text-align: center;
}
::placeholder{
  color: #0298cf;
} 
 tr:hover td{
  color: #54d400;
  cursor: pointer;
  background-color: #f6f9fc;
}
a{
  outline: none;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  padding: 10px;
  color: #ffffff;
}
td a:nth-child(1){
  background-color: #54d400;
}
td a:nth-child(2){
  background-color: #f80000;
}
#img-v{
    height: 100px;
    width: 100px;
    object-fit: cover;
    border-radius: 15px;
    border: 5px solid #ced0d2;
}
#input-v{

border-color: #54d400;
height: 40px;
color: #000;


}

</style>


</head>
<body>
<a style ="margin-top:150px; margin-left:150px" href="index.php" id = "view-button" class = "btn  ">INSERT MORE RECORDS</a>

<?php
$query = 'select * from iphones';
if (isset($_GET['srch'])) {
    $searches = $_GET['search']; //abc
    $query = "select * from iphones where StdEmail like '%$searches%' 
    ";
}
$res = mysqli_query($con, $query);
$rowCount = mysqli_num_rows($res);
?>


<form action = "" method = "get" >
                <div class="input-group col-lg-6 container mb-5 mt-3">
                    <input type="text" class="form-control" id = "input-v" placeholder="Search  Email Address" name = "search"> 
                    <div class="input-group-append">
                        <button type="submit" class="btn " name = "srch" id = "view-button" ><i class="fa-solid fa-magnifying-glass"></i></button>
                        <a href="viewData.php" class = "btn ml-3" id = "view2-button">Reset</a>
                    </div>
                        
                </div>
                
</form>

<?php
if ($rowCount > 0) { ?>
<div class = "table_section">
<table class = "table   mt-5">
            <tr>
               <thead>
                <th  style = "text-align:center;" >StdId</th>
                <th  style = "text-align:center;" >StdFirstName</th>
                <th  style = "text-align:center;" >StdEmail</th>
                <th  style = "text-align:center;" >StdPhoneNum</th>
                <th  style = "text-align:center;" >Gender</th>
                <th  style = "text-align:center;" >Courses</th> 
                <th  style = "text-align:center;" >City</th> 
                <th  style = "text-align:center;" >StdAddress</th>
                <th  style = "text-align:center;" >StdNickName</th> 
                <th  style = "text-align:center;" >StdPicture</th> 
                <th  
                style = "text-align:center;" >Operations</th>             
            </tr>
</thead>
            <?php while ($data = mysqli_fetch_assoc($res)) {
                echo '<tr>'; ?>
<tr>
                    <td><?= $data['StdId'] ?> </td> 
                    <td>  <?php echo $data['StdFirstName'];?></td> 
                    <td> <?= $data['StdEmail'] ?></td>
                    <td> <?= $data['StdPhoneNum'] ?></td>
                    <td> <?= $data['Gender'] ?></td>
                    <td> <?= $data['Courses'] ?></td> 
                    <td> <?= $data['City'] ?></td> 
                    <td> <?= $data['StdAddress'] ?></td> 
                    <td> <?= $data['StdNickName'] ?></td> 
                    <td>
                      <img src="<?php echo $data['StdPicture'];?>"  id = "img-v"> 
                   </td>   
                    <td> <a href="Edit.php?id=<?= $data[
                        'StdId'
                    ] ?>" class = "btn " ><i class="fa-solid fa-user-pen"></i></a>
                    <a href="ViewData.php?Delid=<?= $data[
                        'StdId'
                    ] ?>"  class = "btn "  onclick = "return confirm('Are you sure you want to delete!!');return false;"><i class="fa-sharp fa-solid fa-trash"></i></a>
                
                </td> 
                    
                    </tr>             
                <?php echo '</tr>';
            } ?>

    </table>
</div>
<?php } else {echo 'No Record founds';}
error_reporting(0);
$delId = $_GET['Delid'];
$querys = "delete from iphones where StdId = $delId";
$res = mysqli_query($con, $querys);
if ($res) {
    echo "<script>alert('Data Deleted!!');window.location.href = 'viewData.php';</script>";
}
mysqli_close($con);
 ?>
</body>
</html>
<?php include 'footer.php'; ?>