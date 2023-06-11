<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Asisten Praktikum</title>
    <style>
        body {
            background-color: #6c50a3;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.1);
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .table th,
        .table td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }
        .table th {
            background-color: #ff0000;
            color: #ffffff;
        }
        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        h1 {
            background-color: #00ff00;
            padding: 10px;
            color: #ffffff;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Pendaftaran Asisten Praktikum</h1>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Kelas Praktikum</th>
                    <th>IPK</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($list as $l): ?>
                    <tr>
                        <td><?= $l['NIM']; ?></td>
                        <td><?= $l['NAMA']; ?></td>
                        <td><?= $l['PRAKTIKUM']; ?></td>
                        <td><?= $l['IPK']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
