<!doctype html>
<html>
<head>
	<title>Laporan</title>
	<style>
	table{
		border-collapse: collapse;
		width: 100%;
		margin: 0 auto;
	}
	table th{
		border: 1px solid #000;
		padding: 3px;
		font-weight: bold;
		text-align: center;
	}
	table td{
		border: 1px solid #000;
		padding: 3px;
		vertical-align: top;
	}
	</style>
</head>
<body>


<!-- <br>
<br>
<br> -->
	<p style="text-align: center">Tabel Ekstrakulikuler</p>
	<table>
		<tr>
			<th>No</th>
			<th>Nama Ekstrakulikuler</th>
			<th>Nama Siswa</th>
			<th>Alamat</th>
			<th>Kelas</th>
			<th>Telepon</th>
		</tr> 
			<?php $id=0; foreach ($ekstra as $key){
			$id++;
		?>
		<tr>
			<td><?php echo $id ?></td>
			<td><?php echo $key->ekstra ?></td>
			<td><?php echo $key->name ?></td>
			<td><?php echo $key->address ?></td>
			<td><?php echo $key->class ?></td>
			<td><?php echo $key->telephone ?></td>
		</tr>
		<?php }?>
	</table>
</body>
</html>