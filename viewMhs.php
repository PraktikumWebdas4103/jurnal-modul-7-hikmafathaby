<?php include_once 'konekMhs.php';
?>
<?php 
	$sql = "SELECT * FROM mhsform";
	$view = mysqli_query($conn,$sql);
	foreach ($view as $haha) {
		# code...
					
	?>

<!DOCTYPE html>
<html>
<head>
	<title>viewMhs</title>
</head>
<body bgcolor="lightgrey">
	<center>
		<table rules= all border="5" style="width: 25%; height: 10%">
			<tr>
				<td colspan="2" align="center" style="padding-top: 20px"><h3>Data Mahasiwa</h3></td>
			</tr>	
			<tr>
				<td style="padding-left: 10px"><b>Nama</b></td>
				<td align="center">
					<?php echo $haha['Nama']; ?></td>
				</td>
			</tr>
			<tr>
				<td style="padding-left: 10px"><b>NIM</b></td>
				<td align="center">
					<?php echo $haha['NIM']; ?></td>
			</tr>
			<tr>
				<td style="padding-left: 10px"><b>Jenis Kelamin</b></td>
				<td align="center">
					<?php echo $haha['Jenis Kelamin']; ?></td>
				</td>
			</tr>
			<tr>
				<td style="padding-left: 10px"><b>Program Studi</b></td>
				<td align="center">
					<?php echo $haha['Program Studi']; ?></td>
				</td>
			</tr>
			<tr>
				<td style="padding-left: 10px"><b>Fakultas</b></td>
				<td align="center">
					<?php echo $haha['Fakultas']; ?></td>
				</td>
			</tr>
			<tr>
				<td style="padding-left: 10px"><b>Asal</b></td>
				<td align="center">
					<?php echo $haha['Asal']; ?></td>
				</td>
			</tr>
			<tr>
				<td style="padding-left: 10px"><b>Motto Hidyup</b></td>
				<td align="center">
					<?php echo $haha['Motto Hidup']; ?></td>
			</tr>
			
		</table>
	<?php } ?>

		</body>
		</html>