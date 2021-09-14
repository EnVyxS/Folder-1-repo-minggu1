<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css2?family=Bungee+Outline&family=Josefin+Sans:wght@500&family=Luckiest+Guy&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
	<title>Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* { box-sizing:border-box;}
body {margin:0;}
/* Style the header */
.header { background-color: #f1f1f1:; padding: 20px; text-align:center;}
/* Style the top navigation bar */
.topnav { overflow:hidden; background-color: #333;}
/* Style the topnav links */
.topnav a { float:left; display:block; color:#f2f2f2; text-align:center; padding:14px 16px; text-decoration: none;}
/* Change color on hover */
.topnav a:hover { background-color:#ddd; color:black;}



body {background-image; url("bg2.jpg"); }
h1 {background-color:black;}
div.gallery { margin: 5px; border: 1px solid #ccc; float: right; width 180px; }

h1 { text-shadow: 2px 2px 5px navy; letter-spacing: 3px; color: yellow; }
h2 { text-shadow: 2px 2px 5px navy; letter-spacing: 3px; color: yellow; }

.p1 { font-family: 'Luckiest Guy', cursive; }
.p2 { font-family: 'Sofia', sans-serif;}

</style>
</head>
<body>
<div class="header">
	<h1><p class="p1">FIGURE SHOP</p></h1>
	<h2>--Tempatnya Jual Action Figure Original--</h2>
</div>

<div class="topnav">
	<a href="http://localhost/index.php"">Home</a>
	<a href="http://localhost/olshop/pesan.php">Order</a>
	<a href="http://localhost/olshop/login_user.php">Login</a>
</div>

	<h1> <h2> <h1 style="color:white;text-align:center;">== Login ==</h1> </h2> </h1>
	
	</a>
	</div>
	<table>
		<form action="saran.php" method="get">
		<tr><td>Nama Lengkap</td><td>: <input type="text" name="nama_lengkap" size="55"></td></tr>
		<tr><td>Jenis Kelamin</td><td>: <input type="radio" name="jenis_kelamin" value="L"> Laki-laki/ <input type="radio" name="jenis_kelamin" value="P"> Perempuan</td></tr>
		<tr><td>Alamat Tinggal</td><td>: <input type="text" name="alamat_tinggal" size="55"></td></tr>
		<tr><td>Email</td><td>: <input type="text" name="email" size="55"></td></tr>
		<tr><td>Media Sosial</td><td>: <input type="checkbox" name="facebook" value="ya"> Facebook /<input type="checkbox" name="instagram" value="ya"> Instagram /
		<input type="checkbox" name="twitter" value="ya"> Twitter /<input type="checkbox" name="path" value="ya"> Path</td></tr>
		<tr><td>Mengetahui Web ini dari</td><td>: <select name="tahu">
				<option selected="select">==Pilih==</option>
				<option value="Web_Udinus">Web Udinus</option>
				<option value="Surat Kabar">Surat Kabar</option>
				<option value="Teman Kerabat">Teman Kerabat</option>
				<option value="browsing internet">Browsing Internet</option>
			</select></td></tr>
		<tr><td>Pesan</td><td>:</td></tr>
		<tr><td></td><td><textarea name="pesan" cols="40" rows="5"></textarea><br><br>
			<input type="submit" value="submit" name=submit> <input type="reset" value="reset" name="batal"></td></tr>
		</form>
	</table>
</body>
</html>