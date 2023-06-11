<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Update</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .title {
      text-align: center;
      color: #6c757d;
      margin-top: 0;
    }
    .form-label {
      font-weight: bold;
    }
    .form-control {
      border: 1px solid #ced4da;
      border-radius: 4px;
      padding: 8px;
      width: 100%;
    }
    .btn-primary {
      background-color: #6c757d;
      border: none;
      width: 100%;
    }
    .btn-primary:hover {
      background-color: #5a6268;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1 class="title">EDIT ASISTEN PRAKTIKUM</h1>
    <form action="/asisten/update" method="post">
      <?= csrf_field() ?>
      <div class="mb-3">
        <label for="nim" class="form-label">NIM:</label>
        <input type="text" name="nim" class="form-control" id="nim">
      </div>
      <div class="mb-3">
        <label for="nama" class="form-label">NAMA:</label>
        <input type="text" name="nama" class="form-control" id="nama">
      </div>
      <div class="mb-3">
        <label for="praktikum" class="form-label">PRAKTIKUM:</label>
        <input type="text" name="praktikum" class="form-control" id="praktikum">
      </div>
      <div class="mb-3">
        <label for="ipk" class="form-label">IPK:</label>
        <input type="text" name="ipk" class="form-control" id="ipk">
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
</body>
</html>
