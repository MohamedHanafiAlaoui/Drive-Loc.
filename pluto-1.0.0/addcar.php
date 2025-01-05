<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require ("../src/class/colorType.php");
session_start();


// if (isset($_SESSION['user_id']) && ($_SESSION['user_id'] == 1))
// {


// }else {
//     header("Location: /car-rent-website-template/login.php");
// }



$color = new colorType();

$COLORS = $color->viewColor();

$TYPE= new colorType();

$TYPES=$TYPE->viewType();


?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="icon" href="images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="css/custom.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="index.html"><img class="logo_icon img-responsive" src="images/logo/logo_icon.png" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="images/layout_img/user_img.jpg" alt="#" /></div>
                        <div class="user_info">
                           <h6>John David</h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>General</h4>
                  <ul class="list-unstyled components">
                     <li class="active">
                        <a href="./index.php" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
 
                     </li>
                     <li><a href="widgets.html"><i class="fa fa-clock-o orange_color"></i> <span>Widgets</span></a></li>
                     <li>
                        <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa-solid fa-car"></i> <span>Elements</span></a>
                        <ul class="collapse list-unstyled" id="element">
                           <li><a href="./addcar.php">> <span>add </span></a></li>
                           <li><a href="./viw.php">> <span>wies </span></a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-object-group blue2_color"></i> <span>Apps</span></a>
                        <ul class="collapse list-unstyled" id="apps">
                           <li><a href="./RESEVER">> <span>RESEVER</span></a></li>
                           <li><a href="calendar.html">> <span>Calendar</span></a></li>
                           <li><a href="media_gallery.html">> <span>Media Gallery</span></a></li>
                        </ul>
                     </li>
                     <li><a href="../car-rent-website-template/loguot.php"><i class="fa-solid fa-right-from-bracket"></i> <span>Logut</span></a></li>

                   
                     
                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="logo_section">
                           <a href="index.html"><img class="img-responsive" src="images/logo/logo.png" alt="#" /></a>
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul>
                                 <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                                 <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                 <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                              </ul>
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="images/layout_img/user_img.jpg" alt="#" /><span class="name_user">John David</span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="profile.html">My Profile</a>
                                       <a class="dropdown-item" href="settings.html">Settings</a>
                                       <a class="dropdown-item" href="help.html">Help</a>
                                       <a class="dropdown-item" href="#"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
               <div class="container-fluid">
    <form action="../src/objecte/regestretionCar.php" method="post">
        <div id="vehicles-container">
            <!-- Groupe de champs pour un véhicule -->
            <div class="vehicle-group">
                <!-- Model -->
                <div class="mb-3">
                    <label for="modele" class="form-label">Model</label>
                    <input type="text" class="form-control" name="vehicles[0][modele]" required>
                </div>
                
                <!-- Color -->
                <div class="mb-3">
                    <label for="id_color" class="form-label">Color</label>
                    <select class="form-select" name="vehicles[0][id_color]" required>
                        <option value="">Select Color</option>
                        <?php foreach ($COLORS as $COLOR): ?>
                            <option value="<?= htmlspecialchars($COLOR['id_color']) ?>">
                                <?= htmlspecialchars($COLOR['nameColor']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <!-- Price -->
                <div class="mb-3">
                    <label for="prix" class="form-label">Price</label>
                    <input type="number" class="form-control" name="vehicles[0][prix]" step="0.01" required>
                </div>
                
                <!-- Availability -->
                <div class="mb-3">
                    <label class="form-label">Availability</label>
                    <div>
                        <label for="disponibilite_yes_0" class="me-3">
                            <input type="radio" id="disponibilite_yes_0" name="vehicles[0][disponibilite]" value="yes" required> Available
                        </label>
                        <label for="disponibilite_no_0">
                            <input type="radio" id="disponibilite_no_0" name="vehicles[0][disponibilite]" value="no" required> Not Available
                        </label>
                    </div>
                </div>
                
                <!-- Type -->
                <div class="mb-3">
                    <label for="id_type" class="form-label">Type</label>
                    <select class="form-select" name="vehicles[0][id_type]" required>
                        <option value="">Select Type</option>
                        <?php foreach ($TYPES as $TYPE): ?>
                            <option value="<?= htmlspecialchars($TYPE['id_type']) ?>">
                                <?= htmlspecialchars($TYPE['nameType']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <!-- Location -->
                <div class="mb-3">
                    <label for="lieu" class="form-label">Location</label>
                    <input type="text" class="form-control" name="vehicles[0][lieu]" required>
                </div>
                
                <!-- Mileage -->
                <div class="mb-3">
                    <label for="kilometrage" class="form-label">Mileage</label>
                    <input type="number" class="form-control" name="vehicles[0][kilometrage]" required>
                </div>
                
                <!-- Image -->
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="text" class="form-control" name="vehicles[0][image]" required>
                </div>
                
                <!-- Description -->
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="vehicles[0][description]" rows="4" required></textarea>
                </div>
                
                <hr>
            </div>
        </div>

        <!-- Boutons -->
        <button type="button" id="add-vehicle" class="btn btn-secondary">Add Another Vehicle</button>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

                  <!-- footer -->
                  <div class="container-fluid">
                     <div class="footer">
                        <p>Copyright © 2018 Designed by html.design. All rights reserved.<br><br>
                           Distributed By: <a href="https://themewagon.com/">ThemeWagon</a>
                        </p>
                     </div>
                  </div>
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="js/animate.js"></script>
      <!-- select country -->
      <script src="js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="js/Chart.min.js"></script>
      <script src="js/Chart.bundle.min.js"></script>
      <script src="js/utils.js"></script>
      <script src="js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
      <script src="js/chart_custom_style1.js"></script>

<script>
    document.getElementById('add-vehicle').addEventListener('click', function () {
        const container = document.getElementById('vehicles-container');
        const vehicleGroups = container.getElementsByClassName('vehicle-group');
        const index = vehicleGroups.length;

        const newGroup = vehicleGroups[0].cloneNode(true);

       
        const inputs = newGroup.querySelectorAll('input, select, textarea');
        inputs.forEach(input => {
            const name = input.name.replace(/\[\d+\]/, `[${index}]`);
            input.name = name;

            if (input.id) {
                input.id = input.id.replace(/_\d+$/, `_${index}`);
            }
            input.value = ''; 
        });

        container.appendChild(newGroup);
    });
</script>
   </body>
</html>