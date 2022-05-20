<?php

 session_start();


  $mysqli = new mysqli('localhost', 'root', '', 'day') or die(mysqli_error($mysqli));

  $id = 0;
  $update = false;
  $employee_id = '';
  $emp_First_Name = '';
  $emp_Last_Name = '';
  $department = '';
  $phone_number = '';
  $hire_date = '';
  $salary = '';
  $job_name = '';

  if (isset($_POST['save'])){
    $employee_id = $_POST['employee_id'];
    $emp_First_Name = $_POST['emp_First_Name'];
    $emp_Last_Name = $_POST['emp_Last_Name'];
    $department = $_POST['department'];
    $phone_number = $_POST['phone_number'];
    $hire_date = $_POST['hire_date'];
    $salary = $_POST['salary'];
    $job_name = $_POST['job_name'];

    $mysqli->query("INSERT INTO recruitment (employee_id, emp_First_Name, emp_Last_Name, department, phone_number, hire_date, salary, job_name) VALUES ('$employee_id', '$emp_First_Name', '$emp_Last_Name', '$department', '$phone_number', '$hire_date', '$salary', '$job_name')") or die($mysqli->error);

          $_SESSION['message'] = "Record has been saved";
          $_SESSION['msg_type'] = "success";

          header("location: recruitment.php");
  }

  if(isset($_GET['delete'])){
      $id = $_GET['delete'];
      $mysqli->query("DELETE FROM recruitment WHERE id=$id") or die($mysqli->error());

      $_SESSION['message'] = "Record has been deleted";
      $_SESSION['msg_type'] = "success";

      header("location: recruitment.php");

  }

  if(isset($_GET['edit'])){
      $id = $_GET['edit'];
      $update = true;
      $result = $mysqli->query("SELECT * FROM recruitment WHERE id=$id") or die($mysqli->error());
      if($result){
          $row = $result->fetch_array();
          $employee_id = $row['employee_id'];
          $emp_First_Name = $row['emp_First_Name'];
          $emp_Last_Name = $row['emp_Last_Name'];
          $department = $row['department'];
          $phone_number = $row['phone_number'];
          $hire_date = $row['hire_date'];
          $salary = $row['salary'];
          $job_name = $row['job_name'];
      }
  }

  if(isset($_POST['update'])){
      $id = $_POST['id'];
      $employee_id = $_POST['employee_id'];
      $emp_First_Name = $_POST['emp_First_Name'];
      $emp_Last_Name = $_POST['emp_Last_Name'];
      $department = $_POST['department'];
      $phone_number = $_POST['phone_number'];
      $hire_date = $_POST['hire_date'];
      $salary = $_POST['salary'];
      $job_name = $_POST['job_name'];

      $mysqli->query("UPDATE  recruitment SET employee_id='$employee_id', emp_First_Name='$emp_First_Name', emp_Last_Name='$emp_Last_Name', department='$department', phone_number='$phone_number', hire_date='$hire_date', salary='$salary', job_name='$job_name' WHERE id=$id") or
        die($mysqli->error);

        $_SESSION['message'] = "Record has been Updated";
        $_SESSION['msg_type'] = "warning";

        header("location: recruitment.php");
  }
?>
