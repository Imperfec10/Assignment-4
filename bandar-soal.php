<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bandar Soal | Bandar Ilkom</title>
	<link rel="icon" type="image/png" href="title-logo.png">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/title.css">
	<link rel="stylesheet" type="text/css" href="css/bandar-soal.css">
</head>
<body style="margin: 0px;">
	<section>
		<div id="title">
			<br>
			<?php if($_SESSION['login']==1) : ?>
				<h1>Selamat Datang, <?php echo $_SESSION['username'] ?></h1>
			<?php else : ?>
				<hi>Selamat Datang!</h1>
			<?php endif ?>
			<h3>Tempat ilmu-ilmu penting komputer bisa diakses dengan mudah</h3>
			<br>
		</div>
		<nav id="navbar">
			<a href="account.php">Akun</a>
			<a href="home.php">Beranda</a>
			<a href="bandar-materi.php">Bandar Materi</a>
			<a href="bandar-soal.php">Bandar Soal</a>
			<a href="ruang-diskusi.php">Ruang Diskusi</a>
			<a href="weekly-funfact.php">Funfact Mingguan</a>
			<form action="search.html" method="SEARCH" id="search">
		</nav>
		<h1 id="title-2"><strong>Bandar Soal</strong></h1>
		<div id="utama">
			<h1>PAKET SOAL</h1>
			<div id="paket-soal">
				<a href="#">50 Soal matematika diskret terbaru</a>
				<a href="#">Selesaikan dengan Java</a>
				<a href="#">20 Soal bilangan biner hexadesimal</a>
				<a href="#">Soal pengetahuan Basis Data</a>
				<a href="#">Lihat pake soal lain</a>
			</div>
			<br>
			<br>
			<br>
			<br>
			<h1>SOAL MENURUT PELAJARAN</h1>
			<div id="soal-pelajaran">
				<a href="#">Matematika</a>
				<a href="#">Komputer</a>
				<a href="#">Programming</a>
				<a href="#">Yang lain-lain</a>
			</div>
		</div>
	</section>
	<footer>
		<strong><a href="saran-request.php">Kotak Pendapat</a></strong>
		<strong><a href="about.php">Tentang Kami</a></strong>
		<strong><a href="#kontak">Kontak</a></strong>
		<img src="assets/img/logo.jpg">
	</footer>
	<script type="text/javascript" src="js/sticky-navbar.js"></script>
</body>
</html>