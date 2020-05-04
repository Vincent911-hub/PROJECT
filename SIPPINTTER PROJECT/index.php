<html>
<head>	
	<title>SIPPINTTER</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<html lang='en-US'>
<div class="content">
	<header>
		<h1 class="judul">SIPPINTTER</h1>
	</header>

	<div class="menu">
		<ul>
			<li><a href="index.php?page=home">HOME</a></li>
			<li><a href="index.php?page=dataperkara">Data Perkara</a></li>
			<li><a href="index.php?page=profile">Profile</a></li>
			<li><a href="index.php?page=inputberkas">Input Berkas</a></li>
		</ul>
	</div>

	<div class="badan">


	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];

		switch ($page) {
			case 'home':
				include "home.php";
				break;
			case 'dataperkara':
				include "dataperkara.php";
				break;
			case 'profile':
				include "profile.php";
				break;
			case 'inputberkas':
				include "inputberkas.php";
				break;			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "home.php";
	}

	 ?>

	</div>
</div>
</body>
</html>