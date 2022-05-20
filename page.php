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
  

  if (isset($_POST['save'])){
    $department_name = $_POST['department_name'];
    $employee_id = $_POST['employee_id'];
    $emp_First_Name = $_POST['emp_First_Name'];
    $emp_Last_Name = $_POST['emp_Last_Name'];
    $position = $_POST['position'];
    

    $mysqli->query("INSERT INTO department (department_name, employee_id, emp_First_Name, emp_Last_Name, position) VALUES ('$department_name', '$employee_id', '$emp_First_Name', '$emp_Last_Name', '$position')") or die($mysqli->error);

          $_SESSION['message'] = "Record has been saved";
          $_SESSION['msg_type'] = "success";

          header("location: department.php");
  }

  if(isset($_GET['delete'])){
      $id = $_GET['delete'];
      $mysqli->query("DELETE FROM department WHERE id=$id") or die($mysqli->error());

      $_SESSION['message'] = "Record has been deleted";
      $_SESSION['msg_type'] = "success";

      header("location: table.php");

  }

  if(isset($_GET['edit'])){
      $id = $_GET['edit'];
      $update = true;
      $result = $mysqli->query("SELECT * FROM department WHERE id=$id") or die($mysqli->error());
      if($result){
          $row = $result->fetch_array();
          $department_name = $row['department_name'];
          $employee_id = $row['employee_id'];
          $emp_First_Name = $row['emp_First_Name'];
          $emp_Last_Name = $row['emp_Last_Name'];
          $position = $row['position'];
      }
  }

  if(isset($_POST['update'])){
      $id = $_POST['id'];
      $department_name = $_POST['department_name'];
      $employee_id = $_POST['employee_id'];
      $emp_First_Name = $_POST['emp_First_Name'];
      $emp_Last_Name = $_POST['emp_Last_Name'];
      $position = $_POST['position'];

      $mysqli->query("UPDATE  department SET department_name='$department_name', employee_id='$employee_id', emp_First_Name='$emp_First_Name', emp_Last_Name='$emp_Last_Name', position='$position' WHERE id=$id") or
        die($mysqli->error);

        $_SESSION['message'] = "Record has been Updated";
        $_SESSION['msg_type'] = "warning";

        header("location: department.php");
  }
?>
