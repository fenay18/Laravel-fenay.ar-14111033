@extends('layout.default')
@section('content')
	<form method="POST" action="tambah.php">
		<table border="1" width="60%" align="center">
			<tr>
				<th><align ="center" colspan="2">Tambah data</th>
			</tr>
			<tr>
				<td bgcolor="#959595"><strong>NIM</strong></td>
				<td><Input style="text" name="nama" size="80"></td>
			</tr>
			<tr>
				<td bgcolor="#959595"><strong>Nama</strong></td>
				<td><input type=" text" name="nim" size="80"></td>
			</tr>
			<tr>
				<td bgcolor="#959595"><strong>Alamat</strong></td>
				<td><input type=" text" name="alamat" size="80"></td>
			</tr>
			<tr>
				<td colspan="2" align="right"><input name="btn-simpan" type="submit" value="Tambah" /> <input type="button" value="Batal" name="btn-batal"/></td>
			</tr>
		</table>
	</form>
@stop