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
        <a href="banner_section.php" class="sl-menu-link">
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
        <a href="our_view_section.php" class="sl-menu-link active">
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
        <a href="section_details.php" class="sl-menu-link">
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
        <a href="section_office_info.php" class="sl-menu-link">
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
      <span class="breadcrumb-item active">Our Views</span>
    </nav>

    <div class="sl-pagebody"><!-- MAIN CONTENT -->

      <div class="sl-page-title">
          <h5>Our Views</h5>
          <p>Update Our View Sections of your Website.</p>
      </div><!-- card -->
      
      <div class="row row-sm">

      <div class="col-xl-10">

        <form action="action.php" method="POST">
        <ul class="nav nav-tabs" style="font-size: 22px;">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#home">Our Vision</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu1">Our Mission</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu2">Our Concepts</a>
          </li>
        </ul>

      
        <div class="tab-content" style="font-size: 18px;">
          
          <div class="tab-pane container active" id="home">
            <textarea id="vision" name="vision" class="form-control" rows="5" cols="10" name="vision" style="height: 500px;"><?= $our_view_section['our_vision'] ?></textarea>
            
            <span style="color: red;font-weight: 700;"><?php if (isset($_GET['vmsg'])) {
                echo $_GET['vmsg'].'<br>';
              } ?></span>

            <button class="btn btn-success mt-2" name="btn-vision_update" type="submit">Update</button>
          </div>
          
          <div class="tab-pane container fade" id="menu1">
            <textarea id="mission" name="mission" class="form-control" rows="5" cols="10" name="mission" style="height: 500px;"><?= $our_view_section['our_mission'] ?></textarea>
            
            <span style="color: red;font-weight: 700;"><?php if (isset($_GET['mmsg'])) {
                echo $_GET['mmsg'].'<br>';
              } ?></span>

            <button class="btn btn-success mt-2" name="btn-mission_update" type="submit">Update</button>
          </div>
          
          <div class="tab-pane container fade" id="menu2">
            <textarea id="concept" name="concept" class="form-control" rows="5" cols="10" name="concept" style="height: 500px;"><?= $our_view_section['our_concept'] ?></textarea>
            
            <span style="color: red;font-weight: 700;"><?php if (isset($_GET['cmsg'])) {
                echo $_GET['cmsg'].'<br>';
              } ?></span>

            <button class="btn btn-success mt-2" name="btn-concept_update" type="submit">Update</button>
          </div>
          
        </div>
        </form>
      </div>

      </div>
    </div>

  </div><!-- row -->
      
  </div><!-- END MAIN CONTENT -->


  <!-- <?php require_once 'd_footer.php' ?> -->
  </div><!-- sl-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->

  <?php require_once 'd_javascript.php' ?>
  
  <script>

        CKEDITOR.replace( 'vision' );
        CKEDITOR.replace( 'mission' );
        CKEDITOR.replace( 'concept' );

  </script>
  </body>
</html>
