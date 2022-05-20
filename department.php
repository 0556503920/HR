
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <!--Css File-->
        <link href="./css/style.css" rel="stylesheet" type="text/css">

        <!---Line Awesome---->
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
    <?php require_once 'page.php'; ?>
         
         <?php
               if(isset($_SESSION['message'])): ?>
               
           <div class="alert alert-<?=$_SESSION['msg_type']?>">    
         
           <?php
               echo $_SESSION['message'];
               unset($_SESSION['message']);
           ?>
          </div>
          <?php endif ?>

    <div class="links">
      <aside>
            <div class="top">
                <div class="logo">
                    <img src="./images/fred work.jpg" alt="">
                    <h2>FREDRICK<span class="danger">EDEM</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="las la-times"></span>
                </div>
            </div>

       <div class="sidebar">
        <a href="dashboard.php"><span class="lab la-buromobelexperte"></span>
          <h3>Dashboard</h3>
              </a>
                 <a href="#"><span class="las la-user"></span>
                   <h3>Customers</h3>
                   </a>
                 <a href="#" class="active"><span class="las la-clipboard-list"></span>
                   <h3>Department</h3>
                  </a>
                  <a href="#"><span class="las la-chart-line"></span>
                   <h3>Analysis</h3>
                  </a>
                <a href="#"><span class="lar la-envelope"></span>
                  <h3>Messages</h3>
                 <span class="message-count">26</span>
                 </a>
                 <a href="#"><span class="las la-clipboard-check"></span>
                <h3>Products</h3>
                 </a>
                <a href="#"><span class="las la-exclamation-circle"></span>
               <h3>Reports</h3>
                </a>
                <a href="#"><span class="las la-cogs"></span>
              <h3>Settings</h3>
                </a>
               <a href="#"><span class="las la-plus"></span>
                <h3>Add Products</h3>
               </a>
              <a href="#" class="btn" onclick="openPopup()" type="submit"><span class="las la-sign-out-alt"></span>
               <h3>Logout</h3>
            </a>
         </div>
      </aside>
     <!--End of Sidebar-->

          <?php
           $mysqli = new mysqli('localhost', 'root', '', 'day') or die(mysqli_error($mysqli));
           $result = $mysqli->query("SELECT * FROM department") or die($mysqli->error);?>
     
         <main>
           <h1>Dashboard</h1>
              <div class="date">
            <input type="date">
          </div>
      <!--End of Date---->
          <nav>
             <ul>
               <li><a href="#">Administration</a>
            <ul>
                  <li><a href="#">Digital Art</a></li>
                  <li><a href="#">Cools</a></li>
                  <li><a href="#">Ui</a></li>
              </ul>
          </li>
          <li><a href="#">Researh</a>
            <ul>
                  <li><a href="#">Digital Art</a></li>
                  <li><a href="#">Cools</a></li>
                  <li><a href="#">Ui</a></li>
              </ul>
          </li>
            <li><a href="#">IT</a>
            <ul>
                  <li><a href="#">Digital Art</a></li>
                  <li><a href="#">Cools</a></li>
                  <li><a href="#">Ui</a></li>
              </ul>
          </li>
              <li><a href="#">Health</a>
              <ul>
                  <li><a href="#">Digital Art</a></li>
                  <li><a href="#">Cools</a></li>
                  <li><a href="#">Ui</a></li>
              </ul>
          </li>
            <li><a href="#">Finance</a>
            <ul>
                <li><a href="#">Digital Art</a></li>
                  <li><a href="#">Cools</a></li>
                  <li><a href="#">Ui</a></li>
              </ul>
             </li>
          </ul>
      </nav>
    

    <div class="wrapper">
      <div class="form-field"> 
         <form action="page.php" method="POST">
         <input type="hidden" name="id" value="<?php echo $id; ?>" class="north">

         <div class="form-group ">
           <label>Department Name:</label>
               <input type="text" name="department_name" value="<?php echo $department_name;?>" class="form-control">
            </div>
          <div class="form-group ">
            <label>Employee ID:</label>
              <input type="text" name="employee_id" value="<?php echo $employee_id;?>" class="form-control">
          </div>
         <div class="form-group">
              <label>Employee First Name:</label>
                <input type="text" name="emp_First_Name" value="<?php echo $emp_First_Name;?>" class="form-control">
          </div>
            <div class="form-group">
              <label>Employee Last Name:</label>
                <input type="text" name="emp_Last_Name" value="<?php echo $emp_Last_Name;?>" class="form-control">
            </div>
             <div class="form-group">
               <label>Position:</label>
                 <input type="text" name="position" value="<?php echo $position;?>" class="form-control">
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

      
        
 <div class="call-back">
      <h2>Department List</h2>
             <table>
                 <thead>
                         <tr>
                             <th>Department Name</th>
                             <th>Employee ID</th>
                             <th>Employee First Name</th>
                             <th>Employee Last Name</th>
                             <th>Position</th>
                             <th colspan="2">Action</th>
                       </tr>
                </thead>
                <?php
                 while ($row = $result->fetch_assoc()):?>
                 <tr>
                     <td><?php echo $row['department_name']; ?></td>
                     <td><?php echo $row['employee_id']; ?></td>
                     <td><?php echo $row['emp_First_Name']; ?></td>
                     <td><?php echo $row['emp_Last_Name']; ?></td>
                     <td><?php echo $row['position']; ?></td>
                     <td>
                         <a href="department.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Edit </a>
                         <a href="page.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete </a>
                     </td>
                 </tr>
                 <?php endwhile; ?>
             </table>
        </div>
     
    </main>
 <!--End of Main---->      

         <?php
          function pre_r($array){
              echo'<pre>';
              print_r($array);
              echo'<pre>';
          }
       ?>

       <div class="right">
           <div class="top">
             <button id="menu-btn" class="bars">
                <span class="las la-bars"></span>
             </button>
             <div class="theme-toggler">
               <span class="las la-toggle-on active"></span>
             </div>
             <div class="profile">
               <div class="info">
                 <p>Hey, <b>Frederick</b></p>
                 <small class="text-muted">Admin</small>
               </div>
               <div class="profile-photo">
                 <img src="./images/welcome II.jpg" width="30px" height="50px">
               </div>
             </div>
           </div>
         <!--End of Top-->  
         <div class="recent-updates">
            <h2>Recents Updates</h2>
            <div class="updates">
              <div class="update">
                <div class="profile-photo">
                  <img src="./images/main-qimg-37ed39d4ef52a5c931b46ffae26e037a.png" width="0px" height="50px">
                </div>
                <div class="message">
                  <p><b>Elice Edem</b>Recieve the best from us.</p>
                  <small class="text-muted">2 minute ago</small>
                </div>
              </div>
              <div class="update">
                <div class="profile-photo">
                  <img src="./images/main-qimg-37ed39d4ef52a5c931b46ffae26e037a.png" width="30px" height="50px">
                </div>
                <div class="message">
                  <p><b>Millicent Broni</b>Order for ultimate item.</p>
                  <small class="text-muted">30 minute ago</small>
                </div>
              </div>
       </div>    
       
       <div class="sales-analysis">
             <h2>Sales Analysis</h2>
             <div class="item online">
               <div class="icon">
                 <span class="las la-shopping-cart"></span>
               </div>
               <div class="right">
                 <div class="info">
                   <h3>Online Orders</h3>
                   <small class="text-muted">Last 24 Hours</small>
                 </div>
                 <h5 class="success">+39%</h5>
                 <h3 class="#">3099</h3>
               </div>
             </div>
       </div>    
  </div> 

<div class="links-wrapper">
        <div class="popup" id="popup">
            <img src="./images/welcome II.jpg" alt="">
              <div id="closer" class="close">
               <span class="las la-times"></span>
               </div>
                <h2>Thank You!</h2>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat itaque, facilis eaque hic culpa delectus maiores consectetur nam iste tenetur sed soluta dolore. Tempora, harum. Eligendi laudantium numquam sapiente enim.</p>
            <button type="button" onclick="closePopup()" class="btn btn-info">Ok</button>
        </div>
    </div>


   <script src="./js/style.js"></script>
    </body>
</html>
