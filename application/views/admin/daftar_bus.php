<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Daftar Bus</title>
	

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datepicker-bootstrap/css/bootstrap-datepicker.min.css" type="text/css">
		<script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="<?php echo base_url('') ?>assets/datatables.min.css">
        <link rel="stylesheet" href="<?php echo base_url('') ?>assets/bootstrap/css/bootstrap.min.css">
         <link rel="stylesheet" href="<?php echo base_url('') ?>assets/bootstrap/css/bootstrap-left-slide-menu.css">
         <link rel="stylesheet" href="<?php echo base_url('') ?>assets/bootstrap/css/bootstrap.min.css">

	       <style type="text/css">
   			.left    { text-align: left;}
   			.right   { text-align: right;}
   			.center  { text-align: center;}
  			 .justify { text-align: justify;}
</style>
		

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- 	<style type="text/css">
      body
      {
          background-image: url("<?php echo base_url();?>assets/images/bus kramat.png");
          background-size: 100%;
      }
    </style> -->
	</head>
	<body>
			<div id="wrapper" class="">
       <div class="overlay" style="display: none;"></div>
       <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
         <ul class="nav sidebar-nav">
             <li class="sidebar-brand">
                <a href="#"> DOLAND TOUR </a>
             </li>
             <li>
                <a href="<?php echo site_url('admin/index') ?>"><i class="glyphicon glyphicon-camera"></i> Home</a>
             </li>
             <li>
                <a href="<?php echo site_url('daftar_mobil') ?>"><i class="glyphicon glyphicon-facetime-video"></i> Daftar Mobil</a>
             </li>
             <li>
                <a href="<?php echo site_url('daftar_bus') ?>"><i class="glyphicon glyphicon-headphones"></i> Daftar Bus & Elf</a>
             </li>
             <li>
                <a href="<?php echo site_url('daftar_pariwisata') ?>"><i class="glyphicon glyphicon-cloud"></i> Daftar Paket Wisata</a>
             </li>
             <li>
                <a href="<?php echo site_url('transaksi_mobil') ?>"><i class="glyphicon glyphicon-th"></i> Transaksi Mobil</a>
             </li>
             <li>
                <a href="<?php echo site_url('transaksi_bus') ?>"><i class="glyphicon glyphicon-cog"></i> Transaksi Bus & Elf</a>
             </li>
             <li>
                <a href="<?php echo site_url('transaksi_pariwisata') ?>"><i class="glyphicon glyphicon-cog"></i> Transaksi Paket Wisata</a>
             </li>
             <li>
             <a href="<?php echo site_url('admin/logout'); ?>">Logout</a>
             </li>
                                    
          </ul>
       </nav>
       <div id="page-content-wrapper">
          <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
          <span class="hamb-top"></span>
          <span class="hamb-middle"></span>
          <span class="hamb-bottom"></span>
          </button>
          <div class="container">
        
						<!--- ini conten-->
						<div class="content-wrapper">
    <!-- Content Header (Page header) -->
				    <section class="content-header">
				      <h1>
				        <i class="#" aria-hidden="true"></i> Daftar Bus
				      </h1>
				    </section>
				    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <a href="<?php echo site_url('daftar_bus/create/')?>" type="button" class="btn btn-danger">Tambah Data Bus</a>  
                                </div>
                                </div>  
				    <br>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					 <div class="row">
                                
                                </div> 
					<div class="table-responsive">
							<table class="table table-hover" id='example'>
								<thead>
									<tr>
									<!-- 	<th>No</th> -->
										<th>Jenis Bus dan Elf</th>
										<th>Kapasitas</th>
										<th>Biaya Sewa</th>
										<th>Status</th>
                                        <th>Action</th>
                                       
									</tr>
								</thead>
								<tbody>
                                <?php foreach ($bus as $key) { ?>
									<tr>
										<!-- <td><?php echo $key->id_bus_elf ?></td> -->
										<td><?php echo $key->jenis ?></td>
										<td><?php echo $key->kapasitas ?></td>
										<td><?php echo $key->biaya_sewa ?></td>
										<td><?php echo $key->status ?></td>
										
										
										<td>
					                      <a href="<?php echo site_url('bus/update/'.$key->id_bus_elf)?>" type="button" class="btn btn-warning">Update</a>
					                     <a href="<?php echo site_url('bus/delete/'.$key->id_bus_elf)?>" onClick="return confirm('apakah anda yakin?')" type="button" class="btn btn-danger">Delete</a>
					                    </td>
									</tr>
                                    <?php ?>
								<?php } ?>
								</tbody>
							</table>
					</div>
					</div>
					</div>    
					</div>

						

						</div>
						</div>
						</div>



						
					</div>
				</div>
	
		

					



		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    	<script src="<?php echo base_url('') ?>assets/bootstrap/js/bootstrap.min.js"></script>
    	<script src="<?php echo base_url('') ?>assets/bootstrap/js/bootstrap-left-slide-menu.js"></script>
    	<script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="<?php echo base_url('') ?>assets/datatables.min.js"> </script>
        <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        });
        </script>
		<script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/datepicker-bootstrap/js/bootstrap-datepicker.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>