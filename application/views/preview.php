<!doctype html>
<html>
<head>
	<title>Laporan Toko Aksesoris Wanita</title>
	<style>
	table{
		border-collapse: collapse;
		width: 70%;
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

	<p style="text-align: center">Tabel Pemasukan</p>
	<table>
		<tr>
			<th>No</th>
			<th>Kategori</th>
			<th>Jumlah</th>
			<th>Keterangan</th>
			<th>Tanggal</th>
		</tr>
		<?php $id=0; foreach ($home as $key){
			$id++;
		?>
		<tr>
			<td><?php echo $id ?></td>
			<td><?php echo $key->category_income ?></td>
			<td><?php echo $key->cash ?></td>
			<td><?php echo $key->note ?></td>
			<td><?php echo $key->date_attemps ?></td>
		</tr>
		<?php }?>
	</table>
	<p style="text-align: center"><a href="<?php echo base_url()?>cetak/cetakpdf">Cetak Laporan</a></p>
</body>
</html>