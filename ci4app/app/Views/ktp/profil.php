<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $title; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <title>Kartu Penduduk</title>
  <style>
    .card {
      width: 500px;
      border: 1px solid #000;
      padding: 15px;
    }
    .header {
      text-align: center;
      margin-bottom: 10px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
    }
    table td {
      padding: 5px;
    }
    .photo-cell {
      width: 30%;
    }
    .photo {
      width: 100%;
      height: 100%;
    }
  .card {
    width: 500px;
    border: 1px solid #000;
    padding: 15px;
    margin: 0 auto; /* Add this line to center the card horizontally */
    margin-top: 50px; /* Adjust the top margin as desired */
  }
  /* Rest of the styles... */
</style>
  </style>
</head>
<body>

  <div class="card">
    <div class="header">
      <h2>Kartu Identitas</h2
      Foto Identitas>
    </div>
    <table>
      <tr>
        <td class="photo-cell" rowspan="6">
        <img src="img/kayes.jpg" alt="Foto Identitas" class="photo">

        </td>
        <td>Nama:</td>
        <td>Kharisma Cahaya</td>
      </tr>
      <tr>
        <td>Alamat:</td>
        <td>Jalan Merdeka No. 10</td>
      </tr>
      <tr>
        <td>Tanggal Lahir:</td>
        <td>2003-12-03</td>
      </tr>
      <tr>
        <td>Jenis Kelamin:</td>
        <td>Perempuan</td>
      </tr>
      <tr>
        <td>No. KTP:</td>
        <td>1234567890</td>
      </tr>
      <tr>
        <td>Pekerjaan:</td>
        <td>Security Engineer</td>
      </tr>
   
    </table>
  </div>

</body>
</html>
