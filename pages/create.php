<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Catatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f9f4ff;
            color: #5d5d5d;
            font-family: 'Arial', sans-serif;
        }

        h2 {
            color: #7553d2;
            font-weight: bold;
        }

        .btn-primary {
            background-color: #ffb6b9;
            border: none;
            font-weight: bold;
        }

        .btn-primary:hover {
            background-color: #f99fa3;
        }

        .form-control {
            border-radius: 8px;
            border: 1px solid #e0c3fc;
            padding: 10px;
            font-size: 16px;
        }

        label {
            font-weight: bold;
            color: #7553d2;
        }

        .container {
            max-width: 700px;
            margin-top: 50px;
        }

        textarea {
            resize: none;
        }
    </style>
</head>

<body class="p-5">
    <div class="container">
        <h2>Tambah Catatan Baru</h2>
        <form action="../actions/store.php" method="POST">
            <div class="mb-3">
                <label for="judul">Judul:</label>
                <input class="form-control" type="text" id="judul" name="judul" required>
            </div>

            <div class="mb-3">
                <label for="isi">Isi Catatan:</label>
                <textarea class="form-control" id="isi" name="isi" rows="5" required></textarea>
            </div>

            <button class="btn btn-primary" type="submit">Simpan</button>
        </form>
    </div>
</body>

</html>
