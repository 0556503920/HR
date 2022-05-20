
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link href="table.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <?php require_once 'many.php'; ?>
         
         <?php
               if(isset($_SESSION['message'])): ?>
               
           <div class="alert alert-<?=$_SESSION['msg_type']?>">    
         
           <?php
               echo $_SESSION['message'];
               unset($_SESSION['message']);
           ?>
          </div>
          <?php endif ?>
           <div class="container">
          <?php
           $mysqli = new mysqli('localhost', 'root', '', 'day') or die(mysqli_error($mysqli));
           $result = $mysqli->query("SELECT * FROM recruitment") or die($mysqli->error);
           ?>

<div class="row justify-content-center">
                 <table class="tablebtn">
                     <thead>
                         <tr>
                             <th>Employee ID</th>
                             <th>First Name</th>
                             <th>Last Name</th>
                             <th>Department</th>
                             <th>Hired Date</th>
                             <th>Salary</th>
                             <th>Jod Name</th>
                             <th colspan="2">Action</th>
                       </tr>
                </thead>

                <?php
                 while ($row = $result->fetch_assoc()):?>
                 <tr>
                     <td><?php echo $row['employee_id']; ?></td>
                     <td><?php echo $row['emp_First_Name']; ?></td>
                     <td><?php echo $row['emp_Last_Name']; ?></td>
                     <td><?php echo $row['department']; ?></td>
                     <td><?php echo $row['phone_number']; ?></td>
                     <td><?php echo $row['hire_date']; ?></td>
                     <td><?php echo $row['salary']; ?></td>
                     <td><?php echo $row['job_name']; ?></td>
                     <td>
                         <a href="recruitment.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Edit </a>
                         <a href="many.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete </a>
                     </td>
                 </tr>
                 <?php endwhile; ?>
            </tbale>
        </div>

         <?php
          function pre_r($array){
              echo'<pre>';
              print_r($array);
              echo'<pre>';
          }
       ?>

           

    <div class="row justify-content- center">
        <div class="form-field col-lg-15"> 
         <form action="recruitment.php" method="POST">
         <input type="hidden" name="id" value="<?php echo $id;?>" class="north">

         
          <div class="form-group col-lg-6">
            <label>Employee ID:</label>
              <input type="text" name="employee_id" value="<?php echo $employee_id;?>" class="form-control">
          </div>
         <div class="form-group col-lg-6">
              <label>Employee First Name:</label>
                <input type="text" name="emp_First_Name" value="<?php echo $emp_First_Name;?>" class="form-control">
          </div>
            <div class="form-group col-lg-6">
              <label>Employee Last Name:</label>
                <input type="text" name="emp_Last_Name" value="<?php echo $emp_Last_Name;?>" class="form-control">
            </div>
             <div class="form-group col-lg-6">
               <label>Department:</label>
                 <input type="text" name="department" value="<?php echo $department;?>" class="form-control">
            </div>
            <div class="form-group col-lg-6">
               <label>Phone Number:</label>
                 <input type="text" name="phone_number" value="<?php echo $phone_number;?>" class="form-control">
            </div>
            <div class="form-group col-lg-6">
           <label>Hired Date:</label>
               <input type="text" name="hire_date" value="<?php echo $hire_date;?>" class="form-control">
            </div>
            <div class="form-group col-lg-6">
               <label>Salary:</label>
                 <input type="text" name="salary" value="<?php echo $salary;?>" class="form-control">
            </div>
            <div class="form-group col-lg-6">
               <label>Job Name:</label>
                 <input type="text" name="job_name" value="<?php echo $job_name;?>" class="form-control">
            </div>
              <?php
                  if ($update == true):?>
                     <button type="submit" class="btn btn-info" name="update">Update</button>
                  <?php else: ?> 
                       <button type="submit" name="save" class="btn btn-primary">Save</button>
                  <?php endif; ?>
             </div>
         </form>
    </div>
 </div>


        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
