<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="http://localhost/task_2/gambar/LogoITERA.jpg">
    <title>Detail Informasi</title>
    <link rel="stylesheet" href="http://localhost/task_2/css/halaman2.css">
</head>
<body>
    <table>
      <tr>
        <td colspan="2"><h2>Detail Informasi Pendaftaran</h2></td>
      </tr>
      <tr>
        <td colspan="2">
          <p>Hi <?php echo $_GET["nama"]; ?></p>
          <p>Apakah anda sudah yakin dengan data yang anda inputkan ?</p>
          <br>
        </td>
      </tr>
      <tr>
        <td>E-mail</td>
        <td>: <?php echo $_GET["email"]; ?></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td>: <?php echo $_GET["nama"]; ?></td>
      </tr>
      <tr>
        <td>NIM</td>
        <td>: <?php echo $_GET["nim"]; ?></td>
      </tr>
      <tr>
        <td>Prodi</td>
        <td>: <?php echo $_GET["prodi"]; ?></td>
      </tr>
      <tr>
        <td>NIK</td>
        <td>: <?php echo $_GET["nik"]; ?></td>
      </tr>
      <tr>
        <td>Tanggal Lahir</td>
        <td>: <?php echo $_GET["tanggal_lahir"]; ?></td>
      </tr>
      <tr>
        <td>Nomor HP</td>
        <td>: <?php echo $_GET["nomor_hp"]; ?></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td>: <?php echo $_GET["jenis_kelamin"]; ?></td>
      </tr>
       <tr>
       <td colspan="2">
          <p>Jika anda merasa salah menginputkan data</p>
          <p>Silahkan klik tombol perbaiki di bawah ini</p>
          <br>
        </td>
       </tr>
       <tr>
         <td><a href="http://localhost/task_2/halaman1.html"><button>Perbaiki</button></a></td>
       </tr>   
    </table>
</body>
</html>