<?php require_once '../backend_code.php' ?>



<?php

    $contact_us=fetch_data_pdo_DSC($pdo,"contact_us");


  /// contact us messages
  function fetch_data_pdo_DSC($pdo,$table)
  {
        $sql="select * from ".$table." ORDER BY id DESC;";
        $statement = $pdo->prepare($sql);
        $statement->execute();

        $row = $statement->fetchAll();

        return $row;
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
        <a href="our_team_section.php" class="sl-menu-link ">
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
        <a href="section_our_service.php" class="sl-menu-link ">
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
        <a href="section_contact_us.php" class="sl-menu-link active">
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
      <span class="breadcrumb-item active">Messages</span>
    </nav>

    <div class="sl-pagebody"><!-- MAIN CONTENT -->

      <div class="card pd-20 pd-sm-40 mg-t-20">
          <h6 class="card-body-title">Messages</h6>
          <p class="mg-b-20 mg-sm-b-30">Messages Section</p>
  
          <div class="table-responsive">
            <table class="table mg-b-0" >
              <thead class="thead-dark">
                <tr>
                  <th>#SL</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Contact</th>
                  <th>Text</th>
                  <th>Option</th>
                </tr>
              </thead>
              <tbody style="font-size: 18px;">

                <?php
                  foreach ($contact_us as $key => $data) {

                    if ($data['read_status']==0) {
                ?>
                   <tr style="background-color: grey;">
                    <td style="color:white;"><?= $key+1 ?></td>
                    <td style="display: none;"><?= $data['id'] ?></td>
                    <td style="color:white;"><?= $data['name'] ?></td>
                    <td style="color:white;"><?= $data['email'] ?></td>
                    <td style="color:white;"><?= $data['contact'] ?></td>
                    <td style="color:white;"><?php echo implode(' ', array_slice(explode(' ', $data['text']), 0, 4))."...."; ?></td>
                    <td><a href="section_contact_us_text.php?textID=<?= $data['id'] ?>" class="btn btn-primary" style="border-radius: 10px;">Read</a></td>
                   
                  </tr>
                <?php 
                    }

                    else{


                ?>
                  <tr>
                    <td><?= $key+1 ?></td>
                    <td style="display: none;"><?= $data['id'] ?></td>
                    <td><?= $data['name'] ?></td>
                    <td><?= $data['email'] ?></td>
                    <td><?= $data['contact'] ?></td>
                    <td><?php echo implode(' ', array_slice(explode(' ', $data['text']), 0, 4))."...."; ?></td>
                    <td><a href="section_contact_us_text.php?textID=<?= $data['id'] ?>" class="btn btn-primary" style="border-radius: 10px;">Read</a></td>
                   
                  </tr>
                <?php
                    }
                  }
                ?>
                
                
              </tbody>
            </table>
          </div><!-- table-responsive -->
        </div><!-- card -->

      
    </div>

  </div><!-- row -->
  
  </div><!-- END MAIN CONTENT -->


  <!-- <?php require_once 'd_footer.php' ?> -->
  </div><!-- sl-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->




<!---
#######  EDIT Service Modal   ######################
----->
 
<!-- The Modal -->
<div class="modal fade" id="editModal" >
        <div class="modal-dialog" style="width: 800px;">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Edit Service</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
           <form action="action.php" method="POST" enctype="multipart/form-data">
            <div class="modal-body" >
                <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" id="name" class="form-control" autocomplete="off" placeholder="Enter name" name="name" required>
                </div>

              <div class="form-group">
                <label for="title">Details:</label>
                <input type="text" id="details" class="form-control" autocomplete="off" placeholder="Enter Details" name="details" required>
              </div> 


              <input type="hidden" id="id" name="id"> 
            </div>

              <!-- Modal footer -->
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary" name="btn-service_edit">Submit</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
           </form>
          </div>
        </div>
</div>



<!---
#######  ADD Service Modal   ######################
----->
 
<!-- The Modal -->
<div class="modal fade" id="addModal" >
        <div class="modal-dialog" style="width: 800px;">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Add Service</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
           <form action="action.php" method="POST" enctype="multipart/form-data">
            <div class="modal-body" >
                <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" id="name" class="form-control" autocomplete="off" placeholder="Enter name" name="name" required>
                </div>

              <div class="form-group">
                <label for="details">Details:</label>
                <input type="text" id="details" class="form-control" autocomplete="off" placeholder="Enter details" name="details" required>
              </div> 
            </div>

              <!-- Modal footer -->
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary" name="btn-service_add">Submit</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
           </form>
          </div>
        </div>
</div>


<!---
  #######  END of ADD Memeber Modal   ######################
----->



  <?php require_once 'd_javascript.php' ?>
  
  <script>

        // Update memeber using modal
        $('.btn-edit').on('click',function(){
          $('#editModal').modal('show');

          $tr = $(this).closest('tr');

          var data = $tr.children("td").map(function(){
            return $(this).text();
          }).get();

          $('#name').val(data[2]);
          $('#details').val(data[3]);
          $('#id').val(data[1]);
         
            
        });


        // CKEDITOR.replace( 'details' );
        
  </script>
  </body>
</html>
