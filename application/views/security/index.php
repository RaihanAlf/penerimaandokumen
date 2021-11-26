<?php
    date_default_timezone_set('Asia/Makassar');
    if(isset($_GET["tanggal"])){
        $tanggal = $_GET["tanggal"];
    } else {
        $tanggal = date("Y-m-d");
    }
    // if(isset($_GET["waktu"])){
    //     $waktu = $_GET["waktu"];
    // } else {
    //     $waktu = date("h:i:s a");
    // }
?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Security</title>

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
            <ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">

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
                    <a class="nav-link" href="">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Nav Item - Charts -->
                <!-- <li class="nav-item">
                    <a class="nav-link" href="" data-toggle="modal" data-target="#contact_us">
                        <i class="fas fa-fw fa-comments"></i>
                        <span>Contact Us</span></a>
                </li> -->
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url('security/contact_us'); ?>">
                        <i class="fas fa-fw fa-comments"></i>
                        <span>Contact Us</span></a>
                </li>

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


                            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                            <li class="nav-item dropdown no-arrow d-sm-none">

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hi, Security</span>
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

                            <!-- <a style="margin-bottom: 10px; color: white;" class="btn btn-primary" data-toggle="modal" data-target="#modal_add_new">
                                <i class="fa fa-plus"></i> Tambah Data</a> -->
                            <a style="margin-bottom: 10px; color: white;" class="btn btn-primary" id="tambah_data" data-toggle="modal">
                                <i class="fa fa-plus"></i> Tambah Data</a>
                        </div>

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-table"></i> List Data</h6>
                            </div>
                            <div class="card-body">
                                    <form method="get" action="">
                                        <div class="row">
                                            <div class="col-md-3" style="margin-top: 10px;">
                                                <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo $tanggal; ?>" readonly>
                                            </div>
                                        </div>
                                    </form>
                                    <hr>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="datatableSimple" width="100%" cellspacing="0" style="text-align: center">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Waktu</th>
                                                <th>Pengirim</th>
                                                <th>Kota Pengirim</th>
                                                <th>Tujuan</th>
                                                <th>Jenis Barang</th>
                                                <th>Security</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $no = 0;
                                                foreach($data as $dt){?>
                                            <tr>
                                                <td><?php echo ++$no; ?></td>
                                                <td><?php echo $dt['waktu']; ?></td>
                                                <td><?php echo $dt['pengirim']; ?></td>
                                                <td><?php echo $dt['kota_pengirim']; ?></td>
                                                <td><?php echo $dt['tujuan']; ?></td>
                                                <td><?php echo $dt['jenis_barang']; ?></td>
                                                <td><?php echo $dt['security']; ?></td>
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

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
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
                        <form method="post" action="<?php echo base_url('security/simpan_dokumen') ?>">
                            <input required="required" class="form-control" type="hidden" id="nomor_data" name="nomor_data" />                            
                            <div class="form-group text-center" style="width: 80px; margin: auto;">
                                <p id="nomor_data_judul" style="color: #949c00; font-size: 50px; font-weight: 600; border-style: solid; border-radius: 15px 15px;"><b>0</b></p>
                            </div>                           
                            <div class="form-group">
                                <label for="id">Pengirim</label>
                                <input required="required" class="form-control" type="text" id="pengirim" name="pengirim" />
                            </div>
                            <div class="form-group">
                                <label for="id">Kota Pengirim</label>
                                <input required="required" class="form-control" type="text" id="id" name="kota_pengirim" />
                            </div>
                            <div class="form-group">
                                <label for="id">Tujuan</label>
                                <input required="required" class="form-control" type="text" id="id" name="tujuan" />
                            </div>
                            <div class="form-group">
                                <label for="id">Jenis Barang</label>
                            <div class="col-xs-8">
                                <select name="jenis_barang" class="form-control" required>
                                    <option value="">-PILIH-</option>
                                    <option value="dokumen">Dokumen</option>
                                    <option value="paket">Paket</option>
                                </select>
                            </div>
                            </div>     
                            <div class="form-group">
                                <label for="id">Security</label>
                                <input required="required" class="form-control" type="text" id="id" name="security" value="<?php echo $this->session->userdata('name'); ?>" readonly/>
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
        <!-- Modal Contact-->
        <div class="modal fade" id="contact_us">
            <div class="modal-dialog">
                <div class="modal-content">
                        
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Contact Us</h4>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
                        
                    <!-- Modal body -->
                    <div class="modal-body">
                        <form method="post" action="<?php echo base_url('security/contact') ?>">
                            <div class="form-group">
                                <label for="id">Nama</label>
                                <input required="required" class="form-control" type="text" id="name" name="name" placeholder="Nama" />
                            </div>

                            <div class="form-group">
                                <label for="id">Email</label>
                                <input required="required" class="form-control" type="text" id="email" name="email" placeholder="Email" />
                            </div>
                            <div>
                                <label for="id">Message</label>
                                <textarea class="form-control" type="text" id="message" name="message" placeholder="Message" required></textarea>
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
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
        <script>
            $(document).ready(function(){
                $('#tambah_data').click(function(){
                    // alert("aaa");
                    $.ajax({
                        url:"<?php echo base_url('security/minta_lastno')?>",
                        method:"POST",
                        success: function (response) {  
                            // console.log(response);
                            $("#nomor_data").val(response);
                            $("#nomor_data_judul").text(response);
                            $('#modal_add_new').modal('show');
                            
                        },
                    });
                });
            });
        </script>
    </body>
</html>