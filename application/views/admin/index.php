<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Admin</title>

        <!-- Custom fonts for this template-->
        <link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="<?php echo base_url('css/sb-admin-2.min.css'); ?>" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.min.css'); ?>">
        <script src="<?php echo base_url('assets/js/jquery-3.5.1.min.js'); ?>"></script>


        <link href="<?php echo base_url('assets/datatables/dataTables.bootstrap4.min.css'); ?>" rel="stylesheet">


    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                    <div class="sidebar-brand-icon">
                        <!-- <i class="fas fa-laugh-wink"></i> -->
                    </div>
                    <div class="sidebar-brand-text mx-3">Trio Motor</div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="">
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
                            <h1 class="h3 mb-0 text-gray-800">List Data</h1>
                            
                        </div>

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-table"></i> List Data</h6>
                            </div>
                            <div class="card-body">
                                <div class="row" style="margin-top: 10px;">
                                    <div class="col-md-3" style="margin-top: 10px;">
                                        <form action="" method="post">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Cari Data..." name="keyword">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="submit">Cari</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <hr> 
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTableSimple" style="text-align: center">
                                        <thead>
                                            <tr>
                                                <th>Tanggal</th>
                                                <th>Waktu</th>
                                                <th>Pengirim</th>
                                                <th>Kota Pengirim</th>
                                                <th>Tujuan</th>
                                                <th>Jenis Barang</th>
                                                <th>Security</th>
                                                <th>GA</th>
                                                <th>OB</th>
                                                <th>Penerima</th>
                                                <th>Bukti Terima</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>                    
                                        <tbody>
                                            <?php
                                                foreach($data as $dt){?>
                                            <tr>
                                                <td><?php echo $dt['tanggal']; ?></td>
                                                <td><?php echo $dt['waktu']; ?></td>
                                                <td><?php echo $dt['pengirim']; ?></td>
                                                <td><?php echo $dt['kota_pengirim']; ?></td>
                                                <td><?php echo $dt['tujuan']; ?></td>
                                                <td><?php echo $dt['jenis_barang']; ?></td>
                                                <td><?php echo $dt['security']; ?></td>
                                                <td><?php echo $dt['ga']; ?></td>
                                                <td><?php echo $dt['ob']; ?></td>
                                                <td>
                                                <?php echo $dt['penerima']; ?></td>
                                                <td>
                                                    <?php 
                                                        echo '<a 
                                                                href="javascript:;"
                                                                data-bukti_terima="'.$dt['bukti_terima'].'"
                                                                data-toggle="modal" data-target="#lihat-gambar">
                                                                <button class="btn btn-info"><i class="fa fa-image"></i></button>
                                                            </a>'                                               
                                                    ?>   
                                                </td>
                                                <td width="250">
                                                    <div class="action">
                                                        <a 
                                                            href="javascript:;"
                                                            data-id="<?php echo $dt['id']; ?>"
                                                            data-pengirim="<?php echo $dt['pengirim']; ?>"
                                                            data-kota_pengirim="<?php echo $dt['kota_pengirim']; ?>"
                                                            data-tujuan="<?php echo $dt['tujuan']; ?>"
                                                            data-jenis_barang="<?php echo $dt['jenis_barang']; ?>"
                                                            data-security="<?php echo $dt['security']; ?>"
                                                            data-ga="<?php echo $dt['ga']; ?>"
                                                            data-ob="<?php echo $dt['ob']; ?>"
                                                            data-penerima="<?php echo $dt['penerima']; ?>"                                                        
                                                            data-bukti_terima="<?php echo $dt['bukti_terima']; ?>"
                                                            data-toggle="modal" data-target="#edit-data">
                                                            <span  data-toggle="modal" data-target="#ubah-data"><i class="fa fa-edit"></i></span>
                                                        </a>
                                                        &nbsp;
                                                        <a href="#" 
                                                            data-delete-url="<?= site_url('admin/dashboard/delete/'.$dt['id']) ?>" 
                                                            class="button button-small button-danger" 
                                                            role="button"
                                                            onclick="deleteConfirm(this)"><span class="text-danger"><i class="fa fa-trash"></i></span>
                                                        </a>
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
                            <form method="post" action="<?php echo base_url('admin/dashboard/edit_dokumen') ?>">
                                <div class="form-group">
                                    <label for="id">Pengirim</label>
                                    <input type="hidden" id="id" name="id">
                                    <input type="text" class="form-control" id="pengirim" name="pengirim" value="<?php echo $dt['pengirim'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="id">Kota Pengirim</label>
                                    <input type="text" class="form-control" id="kota_pengirim" name="kota_pengirim" value="<?php echo $dt['kota_pengirim'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="id">Tujuan</label>
                                    <input type="text" class="form-control" id="tujuan" name="tujuan" value="<?php echo $dt['tujuan'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="id">Jenis Barang</label>
                                    <select type="text" class="form-control" id="jenis_barang" name="jenis_barang">
                                        <?php 
                                            $jenis_barang[0]="";
                                            $jenis_barang[1]="";
                                            switch ($hasil->jenis_barang){
                                                case "Dokumen" : $jenis_barang[0]="selected"; break;
                                                case "Paket" : $jenis_barang[1]="selected"; break;
                                            }
                                        ?>
                                        <option value="Dokumen" <?php echo $jenis_barang[0]; ?>>Dokumen</option>
                                        <option value="Paket" <?php echo $jenis_barang[1]; ?>>Paket</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="id">Security</label>
                                    <input type="text" class="form-control" id="security" name="security" value="<?php echo $dt['security'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="id">General Affair</label>
                                    <input type="text" class="form-control" id="ga" name="ga" value="<?php echo $dt['ga'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="id">Office Boy</label>
                                    <input type="text" class="form-control" id="ob" name="ob" value="<?php echo $dt['ob'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="id">Penerima</label>
                                    <input class="form-control" type="text" id="penerima" name="penerima" value="<?php echo $dt['penerima'];?>">
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

            <!-- Modal lihat Gambar-->
            <div class="modal fade" id="lihat-gambar">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Lihat Gambar</h4>
                            <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
                        
                        <!-- Modal body -->
                        <div class="modal-body">
                            <form method="post" enctype="multipart/form-data" action="<?php echo base_url('receipt/dashboard/upload_gambar') ?>">
                                <div class="form-group">
                                    <img src="" alt="" id="bukti_terima" width="100%">
                                </div>
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

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
        <script>
            $(document).ready(function() {
                // Untuk sunting
                $('#edit-data').on('show.bs.modal', function (event) {
                    var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
                    var modal          = $(this)

                    // Isi nilai pada field
                    modal.find('#id').attr("value",div.data('id'));
                    modal.find('#pengirim').attr("value",div.data('pengirim'));
                    modal.find('#kota_pengirim').attr("value",div.data('kota_pengirim'));
                    modal.find('#tujuan').attr("value",div.data('tujuan'));
                    modal.find('#jenis_barang').attr("value",div.data('jenis_barang'));
                    modal.find('#security').attr("value",div.data('security'));
                    modal.find('#ga').attr("value",div.data('ga'));
                    modal.find('#ob').attr("value",div.data('ob'));
                    modal.find('#penerima').attr("value",div.data('penerima'));
                });

                $('#lihat-gambar').on('show.bs.modal', function (event) {
                    var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
                    var modal          = $(this)
                    
                    // Isi nilai pada field
                    modal.find('#bukti_terima').attr("src",'<?=base_url()?>uploads/'+div.data('bukti_terima'));
                });
            });
        </script>
        <!-- Bootstrap core JavaScript-->
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js'); ?>"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?php echo base_url('js/sb-admin-2.min.js');?>"></script>
        <script src="<?php echo base_url('js/sb-admin-2.js');?>"></script>


        <!-- Page level plugins -->
        <script src="<?php echo base_url('assets/chart.js/Chart.min.js'); ?>"></script>

        <!-- Page level custom scripts -->
        <script src="<?php echo base_url('js/demo/chart-area-demo.js'); ?>"></script>
        <script src="<?php echo base_url('js/demo/chart-pie-demo.js'); ?>"></script>
        
        <!-- Bootstrap core JavaScript-->
        <script src="<?php echo base_url('assets/jquery/jquery.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js'); ?>"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?php echo base_url('js/sb-admin-2.min.js'); ?>"></script>

        <!-- Page level plugins -->
        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap4.min.js'); ?>"></script>

        <script src="<?php echo base_url('js/demo/datatables-demo.js');?>"></script>
    </body>

</html>