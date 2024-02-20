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
                            <span class="m-0 font-weight-bold text-primary" >Manage Users</span>
                        <button style="margin-left:520px" type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal_insert">
                        Add User</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="ghj">
                                <table class="table table-bordered">
                                    <tr>
                                        <td>Id</td>
                                        <td>First_name</td>
                                        <td>Last_Name</td>
                                        <td align="center">Email</td>
                                        <td colspan="2" align="center">Action</td>
                                    </tr>
                                    <?php
                                    $i= 1;
                                    foreach( $user as $row )
                                    {?>
                                    <tr>
                                        <td><?php echo $row["id"]?></td>
                                        <td id="first_name<?php echo $row["id"]?>"><?php echo $row["first_name"]?></td>
                                        <td id="last_name<?php echo $row["id"]?>"><?php echo $row["last_name"]?></td>
                                        <td id="email<?php echo $row["id"]?>"><?php echo $row["email"]?></td>
                                        <td style="text-align:center">
                                        <button type="button" class="btn btn-primary edit_user" data-toggle="modal" rel="<?php echo $row["id"]?>" data-target="#myModal_edit">
                                        Edit</button>
                                        </td>
                                        <td>
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
        <h4 class="modal-title">Add Users</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action="<?php echo base_url('Admin/user_insert')?>" method="post">
        First Name:
        <input type="text" id="first" class="form-control" name="first_name"/>
        Last Name:
        <input type="text" id="last" class="form-control" name="last_name"/>
        Email:
        <input type="text" id="email_id" class="form-control" name="email"/><br>
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
    <form action="<?php echo base_url('Admin/user_update')?>" method="post">
        First Name:
        <input type="text" id="first_name" class="form-control" name="first_name"/>
        Last Name:
        <input type="text" id="last_name" class="form-control" name="last_name"/>
        Email:
        <input type="text" id="email" class="form-control" name="email"/>
        <input type="hidden" id="record_id" class="form-control" name="record_id"/><br>
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
            var $first_name=$("#first_name"+$id).text();
            var $last_name=$("#last_name"+$id).text();
            var $email=$("#email"+$id).text();
            $("#first_name").val($first_name);
            $("#last_name").val($last_name);
            $("#email").val($email);
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
        <form action="<?php echo base_url('Admin/user_delete')?>" method="post">
            <input type="hidden" id="edit_id" name="edit_id"/>
    
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
            $("#edit_id").val($id);
        })
    })
</script>


   <?php include("common/foot_lib.php")?>

</body>

</html>