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
<table class="table table-hover">
        <h4><i class="fa fa-angle-right"></i> Daftar Laba Rugi</h4>
        <tr>
          <th>No</th>
          <th>Tahun</th>
          <th>User</th>
          <th>Penjualan </th>
          <th>Pengeluaran</th>
          <th>Laba</th>
        </tr>
        <?php 
        $no = 1;
        foreach($labarugi as $key){ 
        ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo date('Y',strtotime($key->tanggal)) ?></td>
          <td><?php echo $key->username ?></td>
          <td><?php echo  rupiah($key->penjualan) ?></td>
          <td><?php echo  rupiah($key->harga_pokok_penjualan) ?></td>
          <td><?php echo rupiah($key->laba_usaha_bersih) ?></td>
          <td>
          </td>
      </tr>
	</table>
</body>
</html>