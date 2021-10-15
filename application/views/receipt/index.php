<?php
    if(isset($_GET["tanggal"])){
        $tanggal = $_GET["tanggal"];
    } else {
        $tanggal = date("Y-m-d");
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Receipt</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.min.css'); ?>">
        <script src="<?php echo base_url('assets/js/jquery-3.5.1.min.js'); ?>"></script>

        <!-- Custom fonts for this template-->
        <link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
            
        <!-- Custom styles for this template-->
        <link href="<?php echo base_url('css/sb-admin-2.min.css'); ?>" rel="stylesheet">

        <link href="<?php echo base_url('assets/datatables/dataTables.bootstrap4.min.css'); ?>" rel="stylesheet">
    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

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
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('receipt/contact_us'); ?>">
                        <i class="fas fa-fw fa-comments"></i>
                        <span>Contact Us</span></a>
                </li>

                <hr class="sidebar-divider">

                <!-- Nav Item - Charts -->
                <li class="nav-item">
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
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hi, Receipt</span>
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
                            <a href="#"  name="update_all" data-toggle="modal" data-target="#update-all">
                                <button type="button" class="btn btn-success">Update Data GA</button></a>
                        </div>

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">List Data</h6>
                            </div>
                            <div class="card-body">
                                    <form method="get" action="<?php echo base_url('receipt/list_receipt') ?>">
                                        <div class="row">
                                            <div class="col-md-3" style="margin-top: 10px;">
                                                <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo $tanggal; ?>">
                                            </div>
                                            <div class="col-md-2" style="margin-top: 10px;">
                                                <button type="submit" class="form-control btn btn-info"><i class="fa fa-search"></i> Cari</button>
                                            </div>
                                            <div class="col-md-2" style="margin-top: 10px;">
                                                <a href="<?php echo base_url('receipt'); ?>" class="form-control btn btn-warning"><i class="fa fa-redo"></i> Reset</a>
                                            </div>
                                        </div>
                                    </form>
                                    <hr>
                                        <div class="row" style="margin-top: 10px;">
                                            <div class="col-md-2" style="margin-top: 10px;">
                                                <?php
                                                    $tanggal_ = (isset($_GET["tanggal"]) ? $_GET["tanggal"] : date("Y-m-d"));
                                                ?>
                                                <a href="<?php echo base_url('Pdfview/prints/'.$tanggal_); ?>" target="_blank" class="form-control btn btn-info"><i
                                                class="fas fa-print"></i> Cetak Rekap</a>
                                            </div>
                                            <!-- <div class="col-md-2" style="margin-top: 10px;">
                                                <a href="<?php echo base_url('receipt/view_all'); ?>" class="form-control btn btn-info">All Data</a>
                                            </div> -->
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
                                    <table class="table table-bordered" id="datatableSimple" width="100%" cellspacing="0" style="text-align: center">
                                        <thead>
                                            <tr>
                                                <th>Option</th>
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
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach($data as $dt){?>
                                            <tr>
                                                <td>
                                                    <?php
                                                        if($dt['ga'] == ""){
                                                            echo '<input type="checkbox" class="update_checkbox" value="'.$dt['id'].'">';
                                                        }else
                                                        echo "";
                                                    ?>
                                                </td>
                                                <td><?php echo $dt['waktu']; ?></td>
                                                <td><?php echo $dt['pengirim']; ?></td>
                                                <td><?php echo $dt['kota_pengirim']; ?></td>
                                                <td><?php echo $dt['tujuan']; ?></td>
                                                <td><?php echo $dt['jenis_barang']; ?></td>
                                                <td><?php echo $dt['security']; ?></td>
                                                <td><b><?php echo $dt['ga']; ?></b></td>
                                                <td><b><?php echo $dt['ob']; ?></b></td>
                                                <td>
                                                   <b> <?php 
                                                        if ($dt['penerima'] == ""){
                                                            echo '<a 
                                                                href="javascript:;"
                                                                data-id="'.$dt['id'].'"
                                                                data-pengirim="'.$dt['pengirim'].'"
                                                                data-kota_pengirim="'.$dt['kota_pengirim'].'"
                                                                data-tujuan="'.$dt['tujuan'].'"
                                                                data-penerima="'. $dt['penerima'].'"
                                                                data-toggle="modal" data-target="#edit-data">
                                                                <button  data-toggle="modal" data-target="#ubah-data" class="btn btn-info">Add Penerima</button>
                                                            </a>';
                                                        }else{
                                                        echo $dt['penerima'];
                                                        }
                                                    ?> </b>
                                                </td>
                                                <td>
                                                    <?php 
                                                        if ($dt['bukti_terima'] == ""){
                                                            echo '<a 
                                                                href="javascript:;"
                                                                data-id="'.$dt['id'].'"
                                                                data-toggle="modal" data-target="#gambar-data">
                                                                <button class="btn btn-info">Add Image</button>
                                                            </a>';
                                                        }else{
                                                            echo '<a 
                                                                href="javascript:;"
                                                                data-bukti_terima="'.$dt['bukti_terima'].'"
                                                                data-toggle="modal" data-target="#lihat-gambar">
                                                                <button class="btn btn-info"><i class="fa fa-image"></i></button>
                                                            </a>';
                                                        }
                                                    ?>   
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

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        <!-- Modal Penerima-->
        <div class="modal fade" id="edit-data">
            <div class="modal-dialog">
                <div class="modal-content">
                        
                <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah Penerima</h4>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
                        
                    <!-- Modal body -->
                    <div class="modal-body">
                        <form method="post" action="<?php echo base_url('receipt/update_dokumen') ?>">
                            <div class="form-group">
                                <label for="id">Pengirim</label>
                                <input type="hidden" id="id" name="id">
                                <input type="text" class="form-control" id="pengirim" name="pengirim" value="<?php echo $dt['pengirim'];?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="id">Kota Pengirim</label>
                                <input type="text" class="form-control" id="kota_pengirim" name="kota_pengirim" value="<?php echo $dt['kota_pengirim'];?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="id">Tujuan</label>
                                <input type="text" class="form-control" id="tujuan" name="tujuan" value="<?php echo $dt['tujuan'];?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="id">Penerima</label>
                                <input required="required" class="form-control" type="text" id="id" name="penerima" />
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
        <!-- Modal GA & OB-->
        <div class="modal fade" id="update-all">
            <div class="modal-dialog">
                <div class="modal-content">
                        
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah Data GA & OB</h4>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
                        
                    <!-- Modal body -->
                    <div class="modal-body">
                        <form method="post" action="<?php echo base_url('receipt/simpan_ga') ?>">
                            <!-- <div class="form-group">
                                <input type="text" id="id" name="id">
                            </div> -->
                            <div class="form-group">
                                <label for="id">General Affair</label>
                                <input type="text" class="form-control" id="ga" name="ga" value="<?php echo $this->session->userdata('name'); ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="id">Office Boy</label>
                                <input type="text" class="form-control" id="ob" name="ob">
                            </div>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button class="btn btn-primary" id="update-all_tombol" type="button">Submit</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Tambah Gambar-->
        <div class="modal fade" id="gambar-data">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah Gambar</h4>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
                        
                    <!-- Modal body -->
                    <div class="modal-body">
                        <form method="post" enctype="multipart/form-data" action="<?php echo base_url('receipt/upload_gambar') ?>">
                            <div class="form-group">
                                <input type="hidden" id="id" name="id" readonly>
                            </div>
                            <div class="form-group">
                                <label for="id">Gambar</label>
                                <input type="file" class="form-control" id="bukti_terima" name="bukti_terima">
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
                        <form method="post" enctype="multipart/form-data" action="<?php echo base_url('receipt/upload_gambar') ?>">
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
                    modal.find('#penerima').attr("value",div.data('penerima'));
                });
                    
                $('#gambar-data').on('show.bs.modal', function (event) {
                    var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
                    var modal          = $(this)

                    // Isi nilai pada field
                    modal.find('#id').attr("value",div.data('id'));
                });

                $('#lihat-gambar').on('show.bs.modal', function (event) {
                    var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
                    var modal          = $(this)
                        
                    // Isi nilai pada field
                    modal.find('#bukti_terima').attr("src",'<?=base_url()?>uploads/'+div.data('bukti_terima'));
                });
            });
        </script>
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
                        <form method="post" action="<?php echo base_url('receipt/contact') ?>">
                            <div class="form-group">
                                <label for="id">Nama</label>
                                <input required="required" class="form-control" type="text" id="id" name="nama" placeholder="Nama" />
                            </div>
        
                            <div class="form-group">
                                <label for="id">Email</label>
                                <input required="required" class="form-control" type="text" id="id" name="email" placeholder="Email" />
                            </div>
                            <div>
                                <label for="id">Message</label>
                                <textarea class="form-control" type="text" id="id" name="message" placeholder="Message" required></textarea>
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


    </body>
</html>
<style>
.editRow{
    background-color: #1aff00;
    color: #fff;
}
</style>
<script>
$(document).ready(function(){
    $('.update_checkbox').click(function(){
        if($(this).is(':checked'))
        {
            $(this).closest('tr').addClass('editRow');
        }else{
            $(this).closest('tr').removeClass('editRow');    
        }  
    });
});
</script>
<script>
$(document).ready(function(){
    $('#update-all_tombol').click(function(){
        // alert("aaa");
        var checkbox = $('.update_checkbox:checked');
        // console.log(checkbox.length);
        if(checkbox.length > 0){
            var checkbox_value = [];
            $(checkbox).each(function(){
                checkbox_value.push($(this).val());
            });
            // console.log(checkbox_value);
            var ga = $("#ga").val();
            var ob = $("#ob").val();
            $.ajax({
                url:"<?php echo base_url('receipt/simpan_ga')?>",
                method:"POST",
                data:{checkbox_value:checkbox_value, ga_:ga, ob_:ob},
                success: function (response) {
                    var obj = JSON.parse(response);
                    if(obj.success == true) {
                        alert("Data Berhasil diSimpan!");
                        location.reload();
                    }
                },
            });
        } else{
            alert('Tidak ada data yang dipilih');
        }
    });
});
</script>