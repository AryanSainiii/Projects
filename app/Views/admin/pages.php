<!DOCTYPE html>
<html lang="en">

<head>

    <title>SB Admin 2 - Dashboard</title>
    <?php include("common/head_lib.php")?>
    <script src="<?= base_url('ckeditor/ckeditor.js')?>"></script>
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
                            <span class="m-0 font-weight-bold text-primary" >Manage Pages</span>
                        <button style="margin-left:520px" type="button" class="btn btn-info" data-toggle="modal" id="pages_add" data-target="#myModal_insert">
                        Add Pages</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="ghj">
                                <table class="table table-bordered">
                                    <tr>
                                        <td>S_No.</td>
                                        <td>Menu Name</td>
                                        <td>Page Name</td>
                                        <td>Page Type</td>
                                        <td colspan="2" align="center">Action</td>
                                    </tr>
                                    <?php
                                    $i= 1;
                                    foreach( $page as $row )
                                    {?>
                                    <tr>
                                        <td id="pages_addd" rel="<?php echo $row["id"]?>"><?php echo $i?></td>
                                        <td id="menu<?php echo$row["id"]?>" rel="<?php echo $row["menu_id"]?>"><?php echo $row["menu_name"]?></td>
                                        <td id="page_name<?php echo $row["id"]?>"><?php echo $row["page_name"]?></td>
                                        <td id="type<?php echo $row["id"]?>"><?php echo $row["page_type"]?></td>
                                        <td style="text-align:center">
                                        <button type="button" class="btn btn-primary edit_user" data-toggle="modal" rel="<?php echo $row["id"]?>" data-target="#myModal_edit">
                                        Edit</button>
                                        </td>
                                        <td align="center">
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
        <h4 class="modal-title">Add Pages</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action="<?php echo base_url('Admin/add_pages')?>" method="post" enctype="multipart/form-data">
        Menu Name:
        <select name="menu_id" class="form-control">
          <option value="0">None
          <?php
            foreach ($menus as $row) {
                echo "<option value='" . $row["id"] . "'>" . $row["menu_name"] . "</option>";
            }
            ?>
          </option>

        </select>
        Page Name:
        <input type="text" id="page_name" class="form-control" name="page_name"/>
        Type:
        <input type="text" id="type" class="form-control" name="type"/>
        Description:
        <textarea type="text" id="insert_desc" class="form-control" name="description"></textarea><br>
        <input type="hidden" id="menuu_id" name="menuu_id"/>
        <input type="submit" id="insert" value="Insert" class="btn btn-info" name="insert"/>
    </form>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function(){
      $("#pages_add").click(function(){
        var menu_id = $("#pages_addd").attr("rel");
        $("#menuu_id").val(menu_id);
      })
      })
      </script>
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
        <h4 class="modal-title">Edit Pages</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
    <form action="<?php echo base_url('Admin/edit_pages')?>" method="post" enctype="multipart/form-data" >
    Menu Name:
        <select id="menuu_select" name="edit_menu_id" class="form-control">
          <option value="0">None
          <?php
            foreach ($menus as $row) {
                echo "<option value='" . $row["id"] . "'>" . $row["menu_name"] . "</option>";
            }
            ?>
          </option>

        </select>
        Page Name:
        <input type="text" id="page_namee" class="form-control" name="edit_page_name" val="" />
        Type:
        <input type="text" id="typee" class="form-control" name="edit_type" val="" />
        Description:
        <textarea id="edit_description" name="edit_description" class="form-control" rows="4" cols="40" ></textarea>
        <input type="hidden" id="record_id" class="form-control" name="page_record_id"/><br>
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
<script>               
  CKEDITOR.replace('edit_description');
  CKEDITOR.replace('insert_desc');
</script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $(".edit_user").click(function(){
            var $id =$(this).attr("rel");
            var $menu_name=$("#menu"+$id).attr("rel");
            var $page_name=$("#page_name"+$id).text();
            var $type=$("#type"+$id).text();
            $("#page_namee").val($page_name);
            $("#typee").val($type);
            $("#record_id").val($id);
            $("#menuu_select").val($menu_name);
            $.ajax({
              url: "<?php echo base_url('Admin/getPageById') ?>",
              type: "POST",
              data: "id=" + $id,
              dataType: "json",
              success: function(result) {
                  CKEDITOR.instances["edit_description"].setData(result.description);
              }
          });
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