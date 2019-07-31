<!DOCTYPE html>
<html>

<body>


<h4>Tampilan json tabel Tempat</h4>
<?php
include'koneksi.php';

$query = mysqli_query($koneksi1, 'select * from place');

if (mysqli_num_rows($query) > 0) {
	# buat array
	$responsistem3 = array();
	$responsistem3["data3"] = array();
	while ($row = mysqli_fetch_assoc($query)) {
		# kerangka format penampilan data json
		$data3['id'] = $row["place_id"];
		$data3['nama'] = $row["name"];
		$data3['foto'] = $row["thumbnail"];
		array_push($responsistem3["data3"], $data3);
	}
	echo json_encode($responsistem3);
} else {
	# menmapilkan pesan jika tidak ada data dalam tabel
	$responsistem3["message"]="tidak ada data";
	echo json_encode($responsistem3);
}
?>

<h4>Tampilan json tabel Pesanan detail</h4>
<?php
include'koneksi.php';

$query = mysqli_query($koneksi1, 'select * from reservasi_menu_view');

if (mysqli_num_rows($query) > 0) {
	# buat array
	$responsistem5 = array();
	$responsistem5["data5"] = array();
	while ($row = mysqli_fetch_assoc($query)) {
		# kerangka format penampilan data json
		$data5['id'] = $row["reservasi_menu_id"];
		$data5['reservasi_id'] = $row["reservasi_id"];
		$data5['nama menu'] = $row["name"];
				$data5['harga'] = $row["price"];
								$data5['total harga'] = $row["total"];
		array_push($responsistem5["data5"], $data5);
	}
	echo json_encode($responsistem5);
} else {
	# menmapilkan pesan jika tidak ada data dalam tabel
	$responsistem5["message"]="tidak ada data";
	echo json_encode($responsistem5);
}
?>
<h4>Tampilan json tabel menu detail</h4>
<?php
include'koneksi.php';

$query = mysqli_query($koneksi1, 'select * from menu_view');

if (mysqli_num_rows($query) > 0) {
	# buat array
	$responsistem6 = array();
	$responsistem6["data6"] = array();
	while ($row = mysqli_fetch_assoc($query)) {
		# kerangka format penampilan data json
		$data6['id'] = $row["menu_id"];
		$data6['name'] = $row["name"];
		$data6['deskripsi'] = $row["description"];
		$data6['harga'] = $row["price"];
		$data6['kategori'] = $row["category"];
		array_push($responsistem6["data6"], $data6);
	}
	echo json_encode($responsistem6);
} else {
	# menmapilkan pesan jika tidak ada data dalam tabel
	$responsistem6["message"]="tidak ada data";
	echo json_encode($responsistem6);
}
?>
</body>
</html>
