<!DOCTYPE html>
<html>
<head>
	<title>Latihan Page Php</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<!-- 
Author : diki alfarabi hadi 
Site : www.malasngoding.com
-->
<div class="content">
	<header>
		<h1 class="judul">Latihan Page</h1>
		<h3 class="deskripsi">Membuat Halaman Web Dinamis Dengan PHP</h3>
	</header>
	<div class="menu">
		<ul>
			<li><a href="index.php?page=home">HOME</a></li>
			<li><a href="index.php?page=tentang">TENTANG</a></li>
			<li><a href="index.php?page=tutorial">TUTORIAL</a></li>
		</ul>
	</div>

	<div class="badan">
	<div><h3>Atas</h3></div>
	<a href=""><?php include 'halaman/tentang.php'?>Tentang</a>
	</div>
	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non accusamus eveniet itaque mollitia blanditiis. Mollitia error omnis consequuntur. Ipsum at totam repudiandae animi ea repellat, tenetur eos illo. Ab, doloribus?</p>
</div>
<?php 
		if(isset($_GET['page'])){
			$page = $_GET['page'];
			switch ($page) {
				case 'home':
					include "halaman/home.php";
					break;
				case 'tentang':
					include "halaman/tentang.php";
					break;
				case 'tutorial':
					include "halaman/tutorial.php";
					break;			
				default:
					echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
					break;
			}
		}else{
			include "halaman/home.php";
		}

	 ?>
</body>
</html>