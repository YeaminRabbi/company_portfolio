<?php
  
  require_once 'dbConfig.php';
  
  if(!empty($_GET['doyenID']))
  {
    
    $doyenID=$_GET['doyenID'];

    $sql="select * from doyens_section where id='$doyenID';";
    $result = mysqli_query($db,$sql);
    $data = mysqli_fetch_array($result, MYSQLI_ASSOC);
   
  }
  else
  {
    header("Location: VIEWdoyen_section.php");
  }

?>

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
        <a href="our_view_section.php" class="sl-menu-link ">
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
        <a href="#" class="sl-menu-link show-sub">
          <div class="sl-menu-item">
            <i class="fa fa-users" aria-hidden="true"></i>
            <span class="menu-item-label">Doyen</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div>
        </a>
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="ADDdoyen_section.php" class="nav-link ">Add Doyen</a></li>
          <li class="nav-item"><a href="VIEWdoyen_section.php" class="nav-link active">VIEW</a></li>
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
      <span class="breadcrumb-item active">Doyen</span>
    </nav>

    <div class="sl-pagebody"><!-- MAIN CONTENT -->

      <div class="sl-page-title">
          <h5>Doyens</h5>
          <p>Edit Doyens Sections of your Website.</p>
          <form action="action.php" method="POST" enctype="multipart/form-data">

            
            
          </form>

      </div><!-- card -->
    
     <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title" style="color: red">Edit Doyen Informations</h6>
          <p class="mg-b-20 mg-sm-b-30">Fillup the required fields</p>
          <form action="action.php" method="POST" enctype="multipart/form-data">
          <div class="form-layout">
            <div class="row mg-b-25">
              
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Name:</label>
                      <input class="form-control" type="text" name="name" autocomplete="off" placeholder="Enter Name" value="<?= $data['name'] ?>" required>

                      <input type="hidden" name="id" value="<?= $doyenID ?>">
                    </div>
                  </div><!-- col-4 -->
                  
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Title:</label>
                      <input class="form-control" type="text" name="title" autocomplete="off" placeholder="Enter Title" value="<?= $data['title'] ?>" required>
                    </div>
                  </div><!-- col-4 -->
                  
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Image: <span style="color: red;font-weight: 700;">(Upload Image to change)</span></label>
                      <input class="form-control" type="file" name="img_editdoyenfile" class="file" accept="image/*">
                    </div>
                  </div><!-- col-4 -->
                  
                  <div class="col-lg-8">
                    <div class="form-group mg-b-10-force">
                      <label class="form-control-label">Details:</label>
                      <textarea class="details" name="details"><?= $data['details'] ?></textarea>
                    </div>
                  </div><!-- col-8 -->
                  
                  <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                      <label class="form-control-label">Image Preview: </label>
                      <div class="ml-2 col-sm-6">
                        <img src="<?= '../'.$data['image'] ?>" alt="img" id="preview" class="img-thumbnail" style="width: 300px;">
                    </div>
                  </div><!-- col-4 -->
                </div><!-- row -->

                <div class="form-layout-footer ml-3">
                  <button class="btn btn-primary mg-r-5" type="submit" name="btn-editDeyon">Update</button>
                  <a href="VIEWdoyen_section.php" class="btn btn-danger">Cancel</a>
                </div><!-- form-layout-footer -->
         

          </div><!-- form-layout -->

          </form>
        </div><!-- card -->

      
    </div>

  </div><!-- row -->
  
  </div><!-- END MAIN CONTENT -->


  </div><!-- sl-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->


  <?php require_once 'd_javascript.php' ?>
  
  <script>
       CKEDITOR.replace( 'details' );
 </script>
  </body>
</html>
