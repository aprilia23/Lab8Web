<?php
include ("koneksi.php");

$sql = 'SELECT * FROM data_barang';
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>DATA BARANG</title>
	<style type="text/css">
		*{
			font-family: "Trebuchet MS"
		}
		h1 {
			text-transform: uppercase;
			color: salmon;
		}
		table {
			border: solid 1px #DDEEEE;
			border-collapse: collapse;
			border-spacing: 0;
			width: 90%;
		}
		table thead th {
			background-color: #DDEFEF;
	        border: solid 1px #DDEEEE;
	        color: #336B6B;
	        padding: 10px;
	        text-align: left;
	        text-shadow: 1px 1px 1px #fff;
	        text-decoration: none; 
		}
		table tbody td {
			border: solid 1px #DDEEEE;
	        color: #333;
	        padding: 10px;
	        text-shadow: 1px 1px 1px #fff;
		}
		a {
			background-color: #7FFFD4;
	        color: black;
	        padding: 10px;
	        text-decoration: none;
	        font-size: 12px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Data Barang</h1>
		<a href="tambah.php">Tambah Data</a>
		<div class="main">
		<br/>
			<table>
				<thead>
					<tr>
						<th>Gambar</th>
						<th>Nama Barang</th>
						<th>Kategori</th>
						<th>Harga Beli</th>
						<th>Harga Jual</th>
						<th>Stok</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php if ($result): ?>
					<?php while ($row = mysqli_fetch_array($result)): ?>
					<tr>
						<td><img src="gambar/<?= $row['gambar'];?>" alt="<?= $row['nama']; ?>"></td>
						<td><?= $row['nama']; ?></td>
						<td><?= $row['kategori']; ?></td>
						<td><?= $row['harga_beli']; ?></td>
						<td><?= $row['harga_jual']; ?></td>
						<td><?= $row['stok']; ?></td>
						<td>
							<a href="ubah.php?id=<?php echo $row['id_barang']; ?>">Ubah</a> |
							<a href="hapus.php?id=<?php echo $row['id_barang']; ?>">Hapus</a>
						</td>
					</tr>
					<?php endwhile; else: ?>
					<tr>
						<td colspan="10">Belum ada data</td>
					</tr>
					<?php endif; ?>
			</tbody>
			</table>
		</div>
	</div>
</body>
</html>