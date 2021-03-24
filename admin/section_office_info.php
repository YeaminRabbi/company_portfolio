<?php require_once '../backend_code.php' ?>

<?php require_once 'd_header.php' ?>

<!-- ########## START: HEAD PANEL ########## -->
<?php require_once 'd_headpanel.php' ?>
<!-- ########## END: HEAD PANEL ########## -->

<!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><a href="index.php"><i class="icon ion-android-star-outline"></i> InsigthBD</a></div>
    
    <div class="sl-sideleft">
      
      <label class="sidebar-label">Navigation</label>
      <div class="sl-sideleft-menu">
        
        <a href="index.php" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

        <!-- Header Section --->
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="fa fa-header" aria-hidden="true"></i>
            <span class="menu-item-label">Header Section</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div>
        </a>
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="header_section_textLOGO.php" class="nav-link ">Text Logo</a></li>
          <li class="nav-item"><a href="header_section_imageLOGO.php" class="nav-link">Image Logo</a></li>
          <li class="nav-item"><a href="header_section_toggle.php" class="nav-link">Toggle Change</a></li>
          
        </ul>

        <!-- Banner Section --->
        <a href="banner_section.php" class="sl-menu-link ">
          <div class="sl-menu-item">
            <i class="fa fa-sliders" aria-hidden="true"></i>
            <span class="menu-item-label">Banner Section</span>
          </div>
        </a>

        <!-- About Us Section --->
        <a href="aboutus_section.php" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="fa fa-info-circle" aria-hidden="true"></i>
            <span class="menu-item-label">About Us</span>
          </div>
        </a>

        <!-- About Us Section --->
        <a href="our_view_section.php" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="fa fa-eye" aria-hidden="true"></i>
            <span class="menu-item-label">Our Views</span>
          </div>
        </a>

        <!-- Our Team Section --->
        <a href="our_team_section.php" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="fa fa-user-circle" aria-hidden="true"></i>
            <span class="menu-item-label">Our Team</span>
          </div>
        </a>

        <!-- Doyens Section --->
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="fa fa-users" aria-hidden="true"></i>
            <span class="menu-item-label">Doyen</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div>
        </a>
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="ADDdoyen_section.php" class="nav-link">Add Doyen</a></li>
          <li class="nav-item"><a href="VIEWdoyen_section.php" class="nav-link">VIEW</a></li>
        </ul>
        <!-- Details Section --->
        <a href="section_details.php" class="sl-menu-link ">
          <div class="sl-menu-item">
           <i class="fa fa-info" aria-hidden="true"></i>
            <span class="menu-item-label"> &nbsp Details</span>
          </div>
        </a>

         <!--Our Service Section --->
        <a href="section_our_service.php" class="sl-menu-link">
          <div class="sl-menu-item">
           <i class="fa fa-cogs" aria-hidden="true"></i>
            <span class="menu-item-label">Our Service</span>
          </div>
        </a>

        <!--Office Info Section --->
        <a href="section_office_info.php" class="sl-menu-link active">
          <div class="sl-menu-item">
           <i class="fa fa-building" aria-hidden="true"></i>
            <span class="menu-item-label">Office Info</span>
          </div>
        </a>

         <!-- Contact US Section --->
        <a href="section_contact_us.php" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <span class="menu-item-label">Incoming Message</span>
          </div>
        </a>

        <!-- Footer Section --->
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
           <i class="fa fa-fast-forward" aria-hidden="true"></i>
            <span class="menu-item-label">Footer Section</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div>
        </a>
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="section_footer_text.php" class="nav-link">Footer Text</a></li>
          <li class="nav-item"><a href="section_footer_socialmedia.php" class="nav-link">Social Media</a></li>
        </ul>

      </div><!-- sl-sideleft-menu -->

      <br>
    </div><!-- sl-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->


  <!-- ########## START: MAIN PANEL ########## -->
  <div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.php">InsightBD</a>
      <span class="breadcrumb-item active">Office Info</span>
    </nav>

    <div class="sl-pagebody"><!-- MAIN CONTENT -->


      <div class="sl-page-title">
          <h5>Office Info</h5>
          <p>Update Office Info of your Website.</p>
      </div><!-- card -->
      
      <div class="row row-sm">
        <div class="col-xl-6">
          <form action="action.php" method="POST">
            <div class="card pd-20 pd-sm-40">
              
              <h5>Address</h5>
              <input class="form-control" placeholder="Enter Address" name="address" type="text" value="<?= $office_info_section['address'] ?>" autocomplete="off">

              <span style="color: red;font-weight: 700;"><?php if (isset($_GET['addressmsg'])) {
                echo $_GET['addressmsg'];
              } ?></span>
              <button class="btn btn-success mt-2" name="btn-OFFICEADDRESS" style="max-width: 120px;">Save Changes</button>
            </div>
          
          </form>
        </div><!-- col-6 -->
        
          <div class="col-xl-6 mg-t-25 mg-xl-t-0">
            <form action="action.php" method="POST">
              <div class="card pd-20 pd-sm-40">
               
                 <h5>Contact</h5>
                  <input class="form-control" placeholder="Enter Contact Number" name="contact" type="text" value="<?= $office_info_section['contact'] ?>" autocomplete="off">



                  <span style="color: red;font-weight: 700;"><?php if (isset($_GET['contactmsg'])) {
                    echo $_GET['contactmsg'];
                  } ?></span>
                  <button class="btn btn-primary mt-2" name="btn-OFFICECONTACT" style="max-width: 120px;">Save Changes</button>
              </div>
            </form>
          </div><!-- card -->


      </div><!-- col-6 -->


      <div class="row row-sm mt-4">
        <div class="col-xl-6">
          <form action="action.php" method="POST">
            <div class="card pd-20 pd-sm-40">
              
              <h5>Email</h5>
              <input class="form-control" placeholder="Enter Email" name="email" type="email" value="<?= $office_info_section['email'] ?>" autocomplete="off">



              <span style="color: red;font-weight: 700;"><?php if (isset($_GET['emailmsg'])) {
                echo $_GET['emailmsg'];
              } ?></span>
              <button class="btn btn-warning mt-2" name="btn-OFFICEEMAIL" style="max-width: 120px;">Save Changes</button>
            </div>
          
          </form>
        </div><!-- col-6 -->
        
         
      </div><!-- col-6 -->
    </div><!-- row -->
      
    </div><!-- END MAIN CONTENT -->


  <!-- <?php require_once 'd_footer.php' ?> -->
  </div><!-- sl-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->

  <?php require_once 'd_javascript.php' ?>
  </body>
</html>
