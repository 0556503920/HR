<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    
</head>
<body>
    <div class="container">
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
        <a href="#" class="active"><span class="lab la-buromobelexperte"></span>
          <h3>Dashboard</h3>
              </a>
                 <a href="#"><span class="las la-user"></span>
                   <h3>Customers</h3>
                   </a>
                 <a href="department.php"><span class="las la-clipboard-list"></span>
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
        <main>
          <h1>Dashboard</h1>
          <div class="date">
            <input type="date">
          </div>

          <div class="insights">
            <div class="sales">
              <span class="las la-chart-bar"></span>
              <div class="middle">
                <div class="left">
                  <h3>Total Sales</h3>
                  <h1>$25,000</h1>
                </div>
                <div class="progress">
                  <svg>
                    <circle cx='38' cy='38' r='36'></circle>
                  </svg>
                  <div class="number">
                    <p>81%</p>
                  </div>
                </div>
              </div>
              <small class="text-muted">
                Last 24 Hours
              </small>
            </div>
            <!--End of Sales-->

            <div class="expenses">
              <span class="las la-chart-pie"></span>
              <div class="middle">
                <div class="left">
                  <h3>Total Expenses</h3>
                  <h1>$14,000</h1>
                </div>
                <div class="progress">
                  <svg>
                    <circle cx='38' cy='38' r='36'></circle>
                  </svg>
                  <div class="number">
                    <p>61%</p>
                  </div>
                </div>
              </div>
              <small class="text-muted">
                Last 24 Hours
              </small>
            </div>

            <!--End of Expenses-->

            <div class="income">
              <span class="las la-chart-line"></span>
              <div class="middle">
                <div class="left">
                  <h3>Total Income</h3>
                  <h1>$10,000</h1>
                </div>
                <div class="progress">
                  <svg>
                    <circle cx='38' cy='38' r='36'></circle>
                  </svg>
                  <div class="number">
                    <p>71%</p>
                  </div>
                </div>
              </div>
              <small class="text-muted">
                Last 24 Hours
              </small>
              <!--End of Income-->
            </div>
            <!--End of Insights-->
          </div>

            <div class="recent-order">
               <h2>Recent Oreders</h2>
               <table>
                 <thead>
                   <tr>
                     <th>Product Name</th>
                     <th>Product Number</th>
                     <th>Payment</th>
                     <th>Status</th>
                     <th></th>
                   </tr>
                 </thead>
                 <tbody>
                   <tr>
                     <td>Fordable Mini Drone</td>
                     <td>899876</td>
                     <td>Due</td>
                     <td class="warning">Pending</td>
                     <td class="primary">Details</td>
                   </tr>
                   <tr>
                    <td>Fordable Mini Drone</td>
                    <td>899876</td>
                    <td>Due</td>
                    <td class="warning">Pending</td>
                    <td class="primary">Details</td>
                  </tr>
                  <tr>
                    <td>Fordable Mini Drone</td>
                    <td>899876</td>
                    <td>Due</td>
                    <td class="warning">Pending</td>
                    <td class="primary">Details</td>
                  </tr>
                  <tr>
                    <td>Fordable Mini Drone</td>
                    <td>899876</td>
                    <td>Due</td>
                    <td class="warning">Pending</td>
                    <td class="primary">Details</td>
                  </tr>
                  <tr>
                    <td>Fordable Mini Drone</td>
                    <td>899876</td>
                    <td>Due</td>
                    <td class="warning">Pending</td>
                    <td class="primary">Details</td>
                  </tr>
                  <tr>
                    <td>Fordable Mini Drone</td>
                    <td>899876</td>
                    <td>Due</td>
                    <td class="warning">Pending</td>
                    <td class="primary">Details</td>
                  </tr>
                  <tr>
                    <td>Fordable Mini Drone</td>
                    <td>899876</td>
                    <td>Due</td>
                    <td class="warning">Pending</td>
                    <td class="primary">Details</td>
                  </tr>
                 </tbody>
               </table>
               <a href="#">See All</a>
            </div>
        </main>
        
     <!--End of Main-->
         <div class="right">
           <div class="top">
             <button id="menu-btn" class="">
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

              <div class="update">
                <div class="profile-photo">
                  <img src="./images/main-qimg-37ed39d4ef52a5c931b46ffae26e037a.png" width="30px" height="50px">
                </div>
                <div class="message">
                  <p><b>Edem Selorm</b>Delivered on an average pay.</p>
                  <small class="text-muted">2 minute ago</small>
                </div>
              </div>
            </div>
           </div>
          <!--End of Updates-->

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

             <div class="item offline">
              <div class="icon">
                <span class="las la-shopping-bag"></span>
              </div>
              <div class="right">
                <div class="info">
                  <h3>Offline Orders</h3>
                  <small class="text-muted">Last 24 Hours</small>
                </div>
                <h5 class="danger">-19%</h5>
                <h3 class="#">39</h3>
              </div>
            </div>

            <div class="item customer">
              <div class="icon">
                <span class="las la-user"></span>
              </div>
              <div class="right">
                <div class="info">
                  <h3>New Customers</h3>
                  <small class="text-muted">Last 24 Hours</small>
                </div>
                <h5 class="success">+59%</h5>
                <h3 class="#">1099</h3>
              </div>
            </div>

            <div class="add-product">
              <span class="las la-plus"></span>
              <h3>Add Product</h3>
           </div>
        </div>
      <div class="links-wrapper">
        <div class="popup" id="popup">
            <img src="./images/welcome II.jpg" alt="">
              <div id="closer" class="closer">
               <span class="las la-times"></span>
               </div>
                <h2>Thank You!</h2>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat itaque, facilis eaque hic culpa delectus maiores consectetur nam iste tenetur sed soluta dolore. Tempora, harum. Eligendi laudantium numquam sapiente enim.</p>
            <button type="button" onclick="closePopup()" class="btn btn-info" id="blur">Ok</button>
        </div>
    </div>
     </div>
 </div>
    

    <script src="./js/style.js"></script>
</body>
</html>