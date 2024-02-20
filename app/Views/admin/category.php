<!DOCTYPE html>
<html lang="en">

<head>

    <title>SB Admin 2 - Dashboard</title>
    <?php include("common/head_lib.php")?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       <?php include("common/side_navbar.php")?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include("common/topbar.php")?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <span class="m-0 font-weight-bold text-primary" >Manage Category</span>
                        <button style="margin-left:520px" type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal_insert">
                        Add Category</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="ghj">
                                <table class="table table-bordered">
                                    <tr>
                                        <td>S_No.</td>
                                        <td>Image</td>
                                        <td>Category Name</td>
                                        <td align="center">Parent</td>
                                        <td align="center">Tax</td>
                                        <td colspan="2" align="center">Action</td>
                                    </tr>
                                    <?php
                                    // $parent_category = array();
                                    foreach ($category as $row) {
                                        $parent_category[$row["id"]] = $row["name"];
                                    }
                                    $i= 1;
                                    foreach( $category as $row )
                                    {?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td><img src="<?php echo base_url("assets/Product/")?><?php echo $row["image"]?>"width="100px"/></td> 
                                        <td id="category_name<?php echo $row["id"]?>"><?php echo $row["name"]?></td>
                                        <td id="parent_cat<?php echo $row["id"]?>" rel="<?php echo $row["parent_id"]?>">
                                        <?php
                                                if (isset($parent_category[$row["parent_id"]]))
                                                    echo $parent_category[$row["parent_id"]];
                                                ?>
                                        </td>
                                        <td><?php echo $row["tax"]?></td>
                                        <td style="text-align:center">
                                        <button type="button" class="btn btn-primary edit_user" data-toggle="modal" rel="<?php echo $row["id"]?>" data-target="#myModal_edit">
                                        Edit</button>
                                        </td>
                                        <td style="text-align:center">
                                        <button type="button" class="btn btn-danger delete_user" data-toggle="modal" rel="<?php echo $row["id"]?>" data-target="#myModal_delete">
                                        Delete</button>
                                        </td>
                                    </tr>
                                    <?php $i++; }
                                    ?>
                                   
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <?php if (session()->has('error')): ?>
    <div id="errorAlert" class="alert alert-danger" role="alert">
        <?= session('error') ?>
    </div>
<?php endif; ?>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include("common/foot.php")?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?php echo base_url('home/register')?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

<!-- The Modal -->
<div class="modal" id="myModal_insert">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Category</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action="<?php echo base_url('Admin/add_category')?>" method="post" enctype="multipart/form-data">
        Category:
        <select name="parent_id" class="form-control">
          <option value="0">None
          </option>
            <?php
            foreach($category as $row){
                if($row["parent_id"]==0){
                  echo "<option value='".$row["id"]."' class='optionGroup'>".$row["name"]."</option>";
                
                foreach($category as $row2){
                  if($row["id"]==$row2["parent_id"]){
                  
                    foreach($category as $row){
                    if($row["parent_id"]==1){
                      echo "<option value='".$row["id"]."' class='optionGroup'>--".$row["name"]."</option>";
                    
                    foreach($category as $row2){
                      if($row["id"]==$row2["parent_id"]){
                        echo "<option value='".$row2["id"]."' class='optionChild'>----".$row2["name"]."</option>";}}}}
                  }
                }
              }
            }
            ?>
        </select>
        Category Name:
        <input type="text" id="last" class="form-control" name="category_name"/>
        Image:
        <input type="file" id="email_id" class="form-control" name="image"/><br>
        <input type="submit" id="insert" value="Insert" class="btn btn-info" name="insert"/>
    </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<!-- The Modal -->
<div class="modal" id="myModal_edit">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit Users</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
    <form action="<?php echo base_url('Admin/edit_cat')?>" method="post" enctype="multipart/form-data" >
        Parent Category:
        <select name="parent_id" id="parent_cat" class="form-control">
          <option value="0">None
          </option>
            <?php
            foreach($category as $row){
                if($row["parent_id"]==0){
                  echo "<option value='".$row["id"]."' class='optionGroup'>".$row["name"]."</option>";
                
                foreach($category as $row2){
                  if($row["id"]==$row2["parent_id"]){
                    
                    foreach($category as $row){
                    if($row["parent_id"]==1){
                      echo "<option value='".$row["id"]."' class='optionGroup'>--".$row["name"]."</option>";
                    
                    foreach($category as $row2){
                      if($row["id"]==$row2["parent_id"]){
                        echo "<option value='".$row2["id"]."' class='optionChild'>----".$row2["name"]."</option>";}}}}
                  }
                }
              }
            }
            ?>
        </select>
        Category Name:
        <input type="text" id="category_name" class="form-control" name="category_name"/>
        Image:
        <input type="file" id="image" class="form-control" name="image"/>
        <input type="hidden" id="record_id" class="form-control" name="cat_record_id"/><br>
        <input type="submit" id="edit" value="Edit" class="btn btn-info" name="edit"/>
    </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $(".edit_user").click(function(){
            var $id =$(this).attr("rel");
            var $parent_cat=$("#parent_cat"+$id).attr("rel");
            var $last_name=$("#category_name"+$id).text();
            $("#parent_cat").val($parent_cat);
            $("#category_name").val($last_name);
            $("#record_id").val($id);
        })
    })
</script>



<!-- The Modal -->
<div class="modal" id="myModal_delete">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">User Delete</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <p> Are You Really Want To Delete This User !! </p>
        <form action="<?php echo base_url('Admin/cat_delete')?>" method="post">
            <input type="hidden" id="edit_id" name="delete_cat"/>
    
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
            <input type="submit" value="Yes" class="btn btn-danger"/>
        <button type="button" class="btn btn-info" data-dismiss="modal">No</button>
      </div>
      </form>
    </div>
  </div>
</div>
<script>
    $(document).ready(function(){
        $(".delete_user").click(function(){
            var $id=$(this).attr("rel");
            var $parent_cat=$("#parent_cat"+$id).attr("rel");
            $("#edit_id").val($id);
        })
    })
</script>
<script>
    var errorAlert = document.getElementById('errorAlert');
    setTimeout(function(){
      if(errorAlert){
        errorAlert.style.display = 'none';
      }
    }, 3000);
  </script>

   <?php include("common/foot_lib.php")?>

</body>

</html>