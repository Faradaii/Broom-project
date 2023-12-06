<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<!-- load bootstrap, font-awesome, style  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url('assets/styles/sidebar.css')?>">
</head>
<body>
    <div class="container-fluid vh-100 position-relative d-flex">
		<!-- sidebar only  -->
        <div class="menubar p-3 h-100 d-flex flex-column">
				<div class="d-flex align-items-center gap-2 hide justify-content-center">
					<img src="<?= base_url('assets/images/logo-pnb.png')?>" width="60vw" class="logo">
					<div class="d-flex flex-column tablet-mode">
						<h2 class="geologica m-0">BRoom</h2>
						<small class="gabarito m-0 fs-7">Aplikasi Peminjaman Ruangan</small>
					</div>
				</div>
                
                <div class="menubutton mt-4 h-100 text-center d-flex flex-md-column text-md-center bg-white">
                        <a href="#" class="btn gabarito btn-primary py-2 mb-3 fs-5 rounded-3 text-start w-100"><i class="fa fa-home fa-lg p-2"></i> <span>Dashboard</span></a>
                        <a href="#" class="btn gabarito py-2 mb-3 fs-5 rounded-3 text-start w-100 "><i class="fa-solid fa-xl fa-building p-2"></i> <span>Ruangan</span></a>
                        <a href="#" class="btn gabarito py-2 mb-3 fs-5 rounded-3 text-start w-100 "><i class="fa-solid fa-file-circle-plus fa-lg p-2"></i> <span>Reservasi</span></a>
                        <a href="#" class="btn gabarito py-2 mb-3 fs-5 rounded-3 text-start w-100 "><i class="fa fa-bell fa-lg p-2"></i> <span>Notifikasi</span></a>
                        <span class="flex-grow-1 hide"></span>
						<a href="#" class="btn gabarito py-2 mb-3 fs-5 rounded-3 text-start w-100 "><i class="fa fa-gear px-2"></i> <span>Pengaturan</span></a>
                        <a href="#" class="btn gabarito py-2 mb-3 fs-5 rounded-3 text-start w-100 hide"><i class="fa-solid fa-right-from-bracket p-2"></i></i> <span>Logout</span></a>
                </div>
        </div>

		<!-- content  -->
		<div class="content ps-4 pt-4 flex-grow-1 overflow-auto">
						
			<div>
				<h2>Halaman Daftar</h2>
				<form name="formdaftar" method="post" action="<?php echo base_url('cregister/register'); ?>">
					<div>
					<label>Email</label>
					<input type="text" name="email">
					</div>

					<div>
					<label>Password</label>
					<input type="password" name="password">
					</div>

					<div>
					<label>Nomor Induk</label>
					<input type="text" name="id">
					</div>

					<div>
					<label>Name</label>
					<input type="text" name="name">
					</div>

					<div>
					<label>Telp</label>
					<input type="text" name="phone">
					</div>

				<hr>

				<button type="submit" >Daftar</button>
				<button type="button" onClick="login()">Login</button>
			</form>
			</div>
						
			<div>
				<h2>Halaman Daftar</h2>
				<form name="formdaftar" method="post" action="<?php echo base_url('cregister/register'); ?>">
					<div>
					<label>Email</label>
					<input type="text" name="email">
					</div>

					<div>
					<label>Password</label>
					<input type="password" name="password">
					</div>

					<div>
					<label>Nomor Induk</label>
					<input type="text" name="id">
					</div>

					<div>
					<label>Name</label>
					<input type="text" name="name">
					</div>

					<div>
					<label>Telp</label>
					<input type="text" name="phone">
					</div>

				<hr>

				<button type="submit" >Daftar</button>
				<button type="button" onClick="login()">Login</button>
			</form>
			</div>
						
			<div>
				<h2>Halaman Daftar</h2>
				<form name="formdaftar" method="post" action="<?php echo base_url('cregister/register'); ?>">
					<div>
					<label>Email</label>
					<input type="text" name="email">
					</div>

					<div>
					<label>Password</label>
					<input type="password" name="password">
					</div>

					<div>
					<label>Nomor Induk</label>
					<input type="text" name="id">
					</div>

					<div>
					<label>Name</label>
					<input type="text" name="name">
					</div>

					<div>
					<label>Telp</label>
					<input type="text" name="phone">
					</div>

				<hr>

				<button type="submit" >Daftar</button>
				<button type="button" onClick="login()">Login</button>
			</form>
			</div>
						
			<div>
				<h2>Halaman Daftar</h2>
				<form name="formdaftar" method="post" action="<?php echo base_url('cregister/register'); ?>">
					<div>
					<label>Email</label>
					<input type="text" name="email">
					</div>

					<div>
					<label>Password</label>
					<input type="password" name="password">
					</div>

					<div>
					<label>Nomor Induk</label>
					<input type="text" name="id">
					</div>

					<div>
					<label>Name</label>
					<input type="text" name="name">
					</div>

					<div>
					<label>Telp</label>
					<input type="text" name="phone">
					</div>

				<hr>

				<button type="submit" >Daftar</button>
				<button type="button" onClick="login()">Login</button>
			</form>
			</div>

		</div>
       

    </div>
</body>
</html>