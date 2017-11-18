<!DOCTYPE html>
<html>
	<head>
		<title>Function</title>
	</head>
	<body>
		<h1>Tugas Function</h1>
		<ol>
			<li>
				<h3>Rumus Luas Lingkaran Lingkaran</h3>
				<form method="post">
					<input type="text" id="circle" name="circle" value="<?php if(isset($_POST['circle'])){echo $num = $_POST['circle'];} ?>">
					<input type="submit" value="Hitung...!!!">
				</form>
				<p> Hasil = 
				<?php
					if (isset($_POST['circle'])){
						$num = $_POST['circle'];
						$num = intval($num);
						function x1($r, $phi = 22/7){
							echo $phi * $r * $r;
						}
						x1($num);
					}
				?>
				</p>
			</li>
			<li>
				<h3>Function + Array</h3>
				<?php
					function gimp($play){
						echo "$play Clouziuse.<br>";
					}
					$array = array("Usmang","yahya","Muhammad","Bilal","Ammar","Dika");
					$al = sizeof($array);  
					for($x=0;$x<$al;$x++){
						gimp("$array[$x]");
					}
				?>
			</li>
			<li>
				<h3>Rumus Pythagoras</h3>
				<form method="post">
					<label for="heit">Masukkan Tinggi : </label><br>
					<input type="text" id="heit" name="heit" value="<?php echo $_1=isset($_POST['heit']) ? $_POST['heit'] : ""; ?>"><br><br>
					<label for="wit">Masukkan Lebar : </label><br>
					<input type="text" id="wit" name="wit" value="<?php echo $_2=isset($_POST['wit']) ? $_POST['wit'] : ""; ?>"><br><br>
					<input type="submit" value="Hitung...!!!">
				</form>
				<p> Ukuran sisi miring = 
				<?php
					function phts($heit, $wit){
						$sm = sqrt(pow($heit,2) + pow($wit,2));
						echo $sm;
					}
					if (!empty($_1) && !empty($_2)){
						phts($_1,$_2);
					}
					
				?>
			</li>
			<li>
				<h3>Rumus Luas Persegi</h3>
				<form method="post">
					<label for="sisi">Masukkan Ukuran Sisi : </label><br>
					<input type="text" id="sisi" name="sisi" value="<?php echo $sisi=isset($_POST['sisi']) ? $_POST['sisi'] : ""; ?>"><br><br>
					<input type="submit" value="Hitung...!!!">
				</form>
				<p> Luas Persegi = 
				<?php
					function sisi($s){
						$lp = $s * $s;
						echo $lp;
					}
					if (!empty($sisi)){
						sisi($sisi);
					}
				?>
			</li>
			<li>
				<h3>Rumus Luas Layang-layang</h3>
				<form method="post">
					<label for="d1">Masukkan Ukuran Diagonal 1 : </label><br>
					<input type="text" id="d1" name="d1" value="<?php echo $dd1=isset($_POST['d1']) ? $_POST['d1'] : ""; ?>"><br><br>
					<label for="d2">Masukkan Ukuran Diagonal 2 : </label><br>
					<input type="text" id="d2" name="d2" value="<?php echo $dd2=isset($_POST['d2']) ? $_POST['d2'] : ""; ?>"><br><br>
					<input type="submit" value="Hitung...!!!">
				</form>
				<p> Luas Layang-layang  = 
				<?php
					function d($d1,$d2){
						$ll = ($d1 * $d2)/2;
						echo $ll;
					}
					if (!empty($dd1) && !empty($dd2)){
						d($dd1,$dd2);
					}
				?>
			</li>
		</ol>
		
	</body>
</html>