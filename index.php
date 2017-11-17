<! DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>OOP in PHP</title>
			<?php include("class_lib.php");?>

	</head>
	<body>
		<?php
			$tio = new person();
			$tio->set_name ("TIOTIMUS");
			$tio->set_alamat ("sekadau, kalimantan barat");
			$tio->set_jenisKelamin ("laki-laki");
			$tio->set_hobby ("Otomotif");
			$tio->set_citaCita ("Programer");

			echo "Nama Lengkap :".$tio->get_name()."</br>";
			echo "Alamat :".$tio->get_alamat()."</br>";
			echo "Jenis Kelamin :".$tio->get_jenisKelamin()."</br>";
			echo "Hobby :".$tio->get_hobby()."</br>";
			echo "Cinta-Cita :".$tio->get_citaCita()."</br>";

		?>
	</body>
</html>