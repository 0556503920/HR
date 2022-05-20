<?php

 session_start();


  $mysqli = new mysqli('localhost', 'root', '', 'day') or die(mysqli_error($mysqli));

  $id = 0;
  $update = false;
  $department_name = '';
  $employee_id = '';
  $emp_First_Name = '';
  $emp_Last_Name = '';
  $position = '';
  $salary = '';
  $years_of_expirence = '';
  

  if (isset($_POST['save'])){
    $department_name = $_POST['department_name'];
    $employee_id = $_POST['employee_id'];
    $emp_First_Name = $_POST['emp_First_Name'];
    $emp_Last_Name = $_POST['emp_Last_Name'];
    $position = $_POST['position'];
    $salary = $_POST['salary'];
    $years_of_expirence = $_POST['years_of_expirence'];
    

    $mysqli->query("INSERT INTO payroll (department_name, employee_id, emp_First_Name, emp_Last_Name, position, salary, years_of_expirence) VALUES ('$department_name', '$employee_id', '$emp_First_Name', '$emp_Last_Name', '$position', '$salary', '$years_of_expirence')") or die($mysqli->error);

          $_SESSION['message'] = "Record has been saved";
          $_SESSION['msg_type'] = "success";

          header("location: payroll.php");
  }

  if(isset($_GET['delete'])){
      $id = $_GET['delete'];
      $mysqli->query("DELETE FROM payroll WHERE id=$id") or die($mysqli->error());

      $_SESSION['message'] = "Record has been deleted";
      $_SESSION['msg_type'] = "success";

      header("location: payroll.php");

  }

  if(isset($_GET['edit'])){
      $id = $_GET['edit'];
      $update = true;
      $result = $mysqli->query("SELECT * FROM payroll WHERE id=$id") or die($mysqli->error());
      if($result){
          $row = $result->fetch_array();
          $department_name = $row['department_name'];
          $employee_id = $row['employee_id'];
          $emp_First_Name = $row['emp_First_Name'];
          $emp_Last_Name = $row['emp_Last_Name'];
          $position = $row['position'];
          $salary = $row['salary'];
          $years_of_expirence = $row['years_of_expirence'];
      }
  }

  if(isset($_POST['update'])){
      $id = $_POST['id'];
      $department_name = $_POST['department_name'];
      $employee_id = $_POST['employee_id'];
      $emp_First_Name = $_POST['emp_First_Name'];
      $emp_Last_Name = $_POST['emp_Last_Name'];
      $position = $_POST['position'];
      $salary = $_POST['salary'];
      $years_of_expirence = $_POST['years_of_expirence'];

      $mysqli->query("UPDATE  payroll SET department_name='$department_name', employee_id='$employee_id', emp_First_Name='$emp_First_Name', emp_Last_Name='$emp_Last_Name', position='$position', salary='$salary', years_of_expirence='$years_of_expirence' WHERE id=$id") or
        die($mysqli->error);

        $_SESSION['message'] = "Record has been Updated";
        $_SESSION['msg_type'] = "warning";

        header("location: payroll.php");
  }
?>
