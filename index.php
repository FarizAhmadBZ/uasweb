<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>

	<form action="testingInsert.php" method="POST" enctype="multipart/form-data">
		
		<center><h2>FORM REGISTRASI</h2></center>
		<table>
			<tr>
				<td>Nama: </td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin: </td>
				<td><input type="text" name="jenKel"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir: </td>
				<td><input type="date" name="tglLahir"></td>
			</tr>
			<tr>
				<td>Domisili: </td>
				<td><input type="text" name="domisili"></td>
			</tr>
			<tr>
				<td>Email: </td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Link Github: </td>
				<td><input type="text" name="linkGit"></td>
			</tr>
			<tr>
				<td>Password: </td>
				<td><input type="Password" name="pw"></td>
			</tr>
			<tr>
				<td>Upload gambar: </td>
				<td><input type="file" name="gambar"></td>
			</tr>

			<tr>
				<td colspan="2" align="center">
					<button type="submit" name="submit">Daftar</button>
				</td>
			</tr>
		</table>
	</form>

</body>
</html>