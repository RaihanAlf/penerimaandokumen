<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Admin</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/bootstrap.min.css'); ?>">
        <script src="<?php echo base_url('assets/js/jquery-3.5.1.min.js'); ?>"></script>    
        
        <!-- Custom fonts for this template-->
        <link href="<?php echo base_url('/assets/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="<?php echo base_url('/css/sb-admin-2.min.css'); ?>" rel="stylesheet">

        <link href="<?php echo base_url('/assets/datatables/dataTables.bootstrap4.min.css'); ?>" rel="stylesheet">


    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <!-- <i class="fas fa-laugh-wink"></i> -->
                    </div>
                    <div class="sidebar-brand-text mx-3">Trio Motor</div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url('admin/dashboard'); ?>">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Nav Item - Charts -->
                <li class="nav-item active">
                    <a class="nav-link" href="<?= site_url('admin/user')?>">
                        <i class="fas fa-fw fa-users"></i>
                        <span>User List</span></a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('admin/feedback')?>">
                        <i class="fas fa-fw fa-comments"></i>
                        <span>Feedback</span></a>
                </li> -->

                <hr class="sidebar-divider">

                <!-- Nav Item - Charts -->
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url('auth/logout'); ?>">
                        <i class="fas fa-fw fa-sign-out-alt"></i>
                        <span>Logout</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hi, Admin</span>
                                    <i class="fas fa-user fa-fw"></i>
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">User List</h1>
                            <a style="margin-bottom: 10px; color: white;" class="btn btn-primary" data-toggle="modal" data-target="#modal_add_new"><i class="fa fa-plus"></i> Tambah User</a>
                        </div>

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-users"></i> List Data</h6>
                            </div>
                            <div class="card-body">                            
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTableSimple" width="100%" cellspacing="0" style="text-align: center">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Level</th>
                                                <th>Status</th>
                                                <th>Tanggal</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach($data as $dt){?>
                                            <tr>
                                                <td>
                                                    <?php echo $dt['user_id']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $dt['user_name']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $dt['user_email']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $dt['user_password']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $dt['user_level']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $dt['user_status']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $dt['create_at']; ?>
                                                </td>
                                                <td width="">
                                                    <div class="action">
                                                        <a 
                                                        href="javascript:;"
                                                        data-user_id="<?php echo $dt['user_id']; ?>"
                                                        data-user_name="<?php echo $dt['user_name']; ?>"
                                                        data-user_email="<?php echo $dt['user_email']; ?>"
                                                        data-user_password="<?php echo $dt['user_password']; ?>"
                                                        data-user_level="<?php echo $dt['user_level']; ?>"
                                                        data-user_status="<?php echo $dt['user_status']; ?>"
                                                        data-toggle="modal" data-target="#edit-data">
                                                        <button  data-toggle="modal" data-target="#ubah-data" class="btn btn-info"><i class="fa fa-edit"></i></button>
                                                        </a>
                                                        <a href="#" 
                                                        data-delete-url="<?= site_url('admin/user/delete/'.$dt['user_id']) ?>" 
                                                        class="button button-small button-danger" 
                                                        role="button"
                                                        onclick="deleteConfirm(this)"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>   
                                                    </div>       
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2021</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
                    function deleteConfirm(event){
                        Swal.fire({
                            title: 'Delete Confirmation!',
                            text: 'Are you sure to delete the item?',
                            icon: 'warning',
                            showCancelButton: true,
                            cancelButtonText: 'No',
                            confirmButtonText: 'Yes Delete',
                            confirmButtonColor: 'red'
                        }).then(dialog => {
                            if(dialog.isConfirmed){
                                window.location.assign(event.dataset.deleteUrl);
                            }
                        });
                    }
                </script>

                <?php if($this->session->flashdata('message')): ?>
                    <script>
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                        })

                        Toast.fire({
                            icon: 'success',
                            title: '<?= $this->session->flashdata('message') ?>'
                        })
                    </script>
                <?php endif ?>
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
                    <div class="modal-body">Silahkan pilih "Logout" untuk keluar</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="<?php echo base_url('auth/logout'); ?>">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Tambah-->
        <div class="modal fade" id="modal_add_new">
            <div class="modal-dialog">
                <div class="modal-content">
                    
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah Data</h4>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                        <form method="post" action="<?php echo base_url('admin/user/tambah_user') ?>">
                            <div class="form-group">
                                <label for="id">Nama</label>
                                <input required="required" class="form-control" type="text" id="nama" name="user_name" />
                                <!-- <input required="required" class="form-control" type="hidden" id="nama" name="create_at" value="<?php echo $tanggal; ?>"  readonly /> -->
                            </div>

                            <div class="form-group">
                                <label for="id">Email</label>
                                <input required="required" class="form-control" type="email" id="email" name="user_email" />
                            </div>

                            <div class="form-group">
                                <label for="id">Password</label>
                                <input required="required" class="form-control" type="text" id="password" name="user_password" />
                            </div>

                            <div class="form-group">
                                <label for="id">Level</label>
                            <div class="col-xs-8">
                                <select name="user_level" class="form-control" required>
                                    <option value="">-PILIH-</option>
                                    <!-- <option value="admin">Admin</option> -->
                                    <option value="security">Security</option>
                                    <option value="receipt">Receipt</option>
                                    <option value="book">Book</option>
                                </select>
                            </div>
                            </div>
                                    <!-- <div class="form-group">
                                        <label for="id">Status</label>                    
                                    <div class="col-xs-8">
                                        <select name="user_status" class="form-control" required>
                                            <option value="">-PILIH-</option>
                                            <option value="1">1 (Aktif)</option>
                                            <option value="0">0 (Tidak Aktif)</option>
                                        </select>
                                    </div>
                                    </div> -->
                                    
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button class="btn btn-primary" type="submit">Submit</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                            </div>
                        </form>                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Edit-->
        <div class="modal fade" id="edit-data">
            <div class="modal-dialog">
                <div class="modal-content">
                        
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Data</h4>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
                        
                    <!-- Modal body -->
                    <div class="modal-body">
                        <form method="post" action="<?php echo base_url('admin/user/edit_user') ?>">
                            <div class="form-group">
                                <label for="id">Nama</label>
                                <input type="hidden" id="user_id" name="user_id">
                                <input type="text" class="form-control" id="user_name" name="user_name" value="<?php echo $dt['user_name'];?>">
                            </div>
                            <div class="form-group">
                                <label for="id">Email</label>
                                <input type="text" class="form-control" id="user_email" name="user_email" value="<?php echo $dt['user_email'];?>">
                            </div>
                            <div class="form-group">
                                <label for="id">Password</label>
                                <input type="text" class="form-control" id="user_password" name="user_password" value="<?php echo $dt['user_password'];?>">
                            </div>
                            <div class="form-group">
                                <label for="id">Level</label>
                                <input type="text" class="form-control" id="user_level" name="user_level" value="<?php echo $dt['user_level'];?>">
                            </div>
                            <div class="form-group">
                                <label for="id">Status</label>
                                <input type="text" class="form-control" id="user_status" name="user_status" value="<?php echo $dt['user_status'];?>">
                            </div>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button class="btn btn-primary" type="submit">Submit</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            <script>
                $(document).ready(function() {
                    // Untuk sunting
                    $('#edit-data').on('show.bs.modal', function (event) {
                        var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
                        var modal          = $(this)

                        // Isi nilai pada field
                        modal.find('#user_id').attr("value",div.data('user_id'));
                        modal.find('#user_name').attr("value",div.data('user_name'));
                        modal.find('#user_email').attr("value",div.data('user_email'));
                        modal.find('#user_password').attr("value",div.data('user_password'));
                        modal.find('#user_level').attr("value",div.data('user_level'));
                        modal.find('#user_status').attr("value",div.data('user_status'));
                    });
                });
            </script>
        <!-- Bootstrap core JavaScript-->
        <script src="<?php echo base_url('/assets/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('/assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?php echo base_url('/assets/jquery-easing/jquery.easing.min.js'); ?>"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?php echo base_url('/js/sb-admin-2.min.js');?>"></script>
        <script src="<?php echo base_url('js/sb-admin-2.js');?>"></script>

        <!-- Page level plugins -->
        <script src="<?php echo base_url('/assets/chart.js/Chart.min.js'); ?>"></script>

        <!-- Page level custom scripts -->
        <script src="<?php echo base_url('/js/demo/chart-area-demo.js'); ?>"></script>
        <script src="<?php echo base_url('/js/demo/chart-pie-demo.js'); ?>"></script>
        
        <!-- Bootstrap core JavaScript-->
        <script src="<?php echo base_url('/assets/jquery/jquery.min.js'); ?>"></script>
        <script src="<?php echo base_url('/assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?php echo base_url('/assets/jquery-easing/jquery.easing.min.js'); ?>"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?php echo base_url('/js/sb-admin-2.min.js'); ?>"></script>

        <!-- Page level plugins -->
        <script src="<?php echo base_url('/assets/datatables/jquery.dataTables.min.js'); ?>"></script>
        <script src="<?php echo base_url('/assets/datatables/dataTables.bootstrap4.min.js'); ?>"></script>

        <script src="<?php echo base_url('/js/demo/datatables-demo.js');?>"></script>
    </body>

</html>