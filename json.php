<!DOCTYPE html>
<html>

<body>

<h4>tampilan format json tabel Menu</h4>
<?php
include'koneksi.php';

$query = mysqli_query($koneksi1, 'select * from menu');

if (mysqli_num_rows($query) > 0) {
	# buat array
	$responsistem = array();
	$responsistem["data"] = array();
	while ($row = mysqli_fetch_assoc($query)) {
		# kerangka format penampilan data json
		$data['id'] = $row["menu_id"];
		$data['Menu'] = $row["name"];
		$data['harga'] = $row["price"];
		array_push($responsistem["data"], $data);
	}
	echo json_encode($responsistem);
} else {
	# menmapilkan pesan jika tidak ada data dalam tabel
	$responsistem["message"]="tidak ada data";
	echo json_encode($responsistem);
}
?>


<h4>Tampilan json tabel Pembayaran</h4>
<?php
include'koneksi.php';

$query = mysqli_query($koneksi1, 'select * from payment');

if (mysqli_num_rows($query) > 0) {
	# buat array
	$responsistem2 = array();
	$responsistem2["data2"] = array();
	while ($row = mysqli_fetch_assoc($query)) {
		# kerangka format penampilan data json
		$data2['id'] = $row["payment_id"];
		$data2['reservasi'] = $row["reservasi_id"];
		$data2['atas nama'] = $row["name_account"];
		$data2['no rek'] = $row["no_account"];
		$data2['bank'] = $row["bank_account"];
		array_push($responsistem2["data2"], $data2);
	}
	echo json_encode($responsistem2);
} else {
	# menmapilkan pesan jika tidak ada data dalam tabel
	$responsistem2["message"]="tidak ada data";
	echo json_encode($responsistem2);
}
?>
<h4>Tampilan json tabel User</h4>
<?php
include'koneksi.php';

$query = mysqli_query($koneksi1, 'select * from user');

if (mysqli_num_rows($query) > 0) {
	# buat array
	$responsistem1 = array();
	$responsistem1["data1"] = array();
	while ($row = mysqli_fetch_assoc($query)) {
		# kerangka format penampilan data json
		$data1['id'] = $row["user_id"];
		$data1['email'] = $row["email"];
		$data1['nama'] = $row["name"];
		array_push($responsistem1["data1"], $data);
	}
	echo json_encode($responsistem1);
} else {
	# menmapilkan pesan jika tidak ada data dalam tabel
	$responsistem1["message"]="tidak ada data";
	echo json_encode($responsistem1);
}
?>
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
<h4>Tampilan json tabel Pesanan</h4>
<?php
include'koneksi.php';

$query = mysqli_query($koneksi1, 'select * from reservasi');

if (mysqli_num_rows($query) > 0) {
	# buat array
	$responsistem4 = array();
	$responsistem4["data4"] = array();
	while ($row = mysqli_fetch_assoc($query)) {
		# kerangka format penampilan data json
		$data4['id'] = $row["reservasi_id"];
		$data4['user_id'] = $row["user_id"];
		array_push($responsistem4["data4"], $data4);
	}
	echo json_encode($responsistem4);
} else {
	# menmapilkan pesan jika tidak ada data dalam tabel
	$responsistem3["message"]="tidak ada data";
	echo json_encode($responsistem4);
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
