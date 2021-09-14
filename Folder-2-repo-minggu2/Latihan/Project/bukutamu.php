<!DOCTYPE html>
<html>
<head>
<title>CitraComputer</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	*{ box-sizing: border-box;
	}
	body{
	background-image: url("graynoodle.png");
	margin:0;}
	/* Style the header */
	.header{
	padding:20px;
	text-align:center;
	color: white;
	}
	/* Style the top navigation bar */
	.topnav{
	overflow:hidden;
	background-color:#696969;
	border-radius: 5px;
	}
	/* Style the topnav links */
	.topnav a{
	float:left;
	display:block;
	font-size:13px;
	font-family:'Open Sans', Tahoma, sans-serif;
	font-weight:700;
	position:relative;
	color:#fff;
	text-align:center;
	padding:14px 16px;
	text-decoration:none;
	}
	/* Change color on hover */
	.topnav a:hover{
	background-color:gray;
	color:#fc0;
	}
	/*Isian*/
	.container {
	border-radius: 4px;
	background-color: #f2f2f2;
	}
	
	</style>
</head>
<body>
	<div class="header">
		<h1>Buku Tamu</h1>
		<p>Toko Citra Computer</p>
	</div>
	<div class="topnav">
		<a href="http://localhost/project/">Home</a>
		<a href="http://localhost/project/pesan.php">Pemesanan</a>
		<a href="http://localhost/project/bukutamu.php">Buku Tamu</a>
	</div>
	<font color=white>
	<h2>Buku Tamu</h2>
	<table>
		<form action="saran.php" method="get">
		<tr><td>Nama Lengkap</td><td> : <input type="text" name="nama_lengkap" size="55"  class="container"></td></tr>
		<tr><td>Jenis Kelamin</td><td> : <input type="radio" name="jenis_kelamin" value="L"> Laki-laki / <input type="radio" name="jenis_kelamin" value="P"> Perempuan</td></tr>
		<tr><td>Alamat</td><td>: <input type="text" name="alamat" size="55"  class="container"></td></tr>
		<tr><td>Email</td><td>: <input type="email" name="email" size="55"  class="container"></td></tr>
		<tr><td>Sosial Media</td><td>: <input type="checkbox" name="facebook" value="Ya"> Facebook <input type="checkbox" name="twitter" value="Ya"> Twitter <input type="checkbox" name="instagram" value="Ya"> Instagram <input type="checkbox" name="path" value="Ya"> Path</td></tr>
		<tr><td>Mengetahui Web Ini dari</td><td>: <select name="tau"  class="container">
				<option selected="select"> =Pilih= </option>
				<option value="web_udinus">Web Udinus</option>
				<option value="surat_kabar">Surat Kabar</option>
				<option value="teman">Teman</option>
				<option value="browsing_internet">Browsing Internet</option>
				</select></td></tr>
		<tr><td>Pesan</td><td>:</td></tr>
		<tr><td></td><td><textarea name="pesan" cols="40" rows="5"  class="container"></textarea></br><br>
			<input name="submit" type="submit" value="submit">&emsp;<input name="reset" type="reset" value="reset"></td></tr>
		</form>  
	</table>
</body>
</html>