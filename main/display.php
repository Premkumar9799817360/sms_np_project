<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css" integrity="sha512-xX2rYBFJSj86W54Fyv1de80DWBq7zYLn2z0I9bIhQG+rxIF6XVJUpdGnsNHWRa6AvP89vtFupEPDP8eZAtu9qA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <style>
    .del{
        border: 2px solid;
    background: red;
    border-radius: 2px solod black;
    padding: 3px 9px;
    border-radius: 4px;
    text-decoration: none;
    color: black;
    font-weight: bold;
    font-family: -webkit-body;
    font-size: 15px;
    }
  h2{
    text-align: center;
    font-size: 45px;
    font-family: monospace;
    color: black;
    padding: 30px;
  }
  body{
    background-color: fuchsia;
  }
  th{
    font-size: 21px;
  }
  td{
    
    font-weight: bold;
  }
  </style>
  <body>

 <div class="container">
    <h2>list of student record data</h2>
 </div>
<?php
$con = new mysqli('localhost','root','','studentdata');
if ($con) {
    $sqls = "select * from insertdata";
    $query = mysqli_query($con,$sqls);
    // $res = mysqli_fetch_array($query);
    while( $res = mysqli_fetch_array($query)){
        ?>
  
 <div class="tables">
 <table class="table">
  <thead>
    <tr>
      <th class="table-primary" scope="col">S No.</th>
      <th class="table-primary" scope="col">FullName</th>
      <th class="table-primary" scope="col">Student ID</th>
      <th class="table-primary" scope="col">Course</th>
      <th class="table-primary" scope="col">Section</th>
      <th class="table-primary" scope="col">Percentage</th>
      <th class="table-primary" scope="col">Email</th>
      <th class="table-primary" scope="col">MObile</th>
      <th class="table-primary" scope="col">City</th>
      <th class="table-primary" scope="col">Delele</th>



    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row"><?php echo $res['id'];?></td>
      <td><?php echo $res['fullname'];?></td>
      <td><?php echo $res['student_id'];?></td>
      <td><?php echo $res['course'];?></td>
      <td><?php echo $res['section'];?></td>
      <td><?php echo $res['percentage_12th'];?></td>
      <td><?php echo $res['email'];?></td>
      <td><?php echo $res['mobile'];?></td>
      <td><?php echo $res['city'];?></td>
      <td><a herf="delete.php?id=<?php echo $res['id']?>" class="del">DELETE</a></td>
    </tr>
  </tbody>
</table>
 </div>
 <?php
    }
    // echo "seccessfully";
    # code...
}
else{
    die(mysqli_error($con));
}
?>
