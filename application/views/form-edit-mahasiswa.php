<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 50px;
        }
        .form-container {
            max-width: 500px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        label {
            font-weight: bold;
            margin-bottom: 5px;
        }
        button {
            width: 100%;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Edit Mahasiswa</h2>
    <form action="<?= base_url('edit-mahasiswa') ?>" method="POST">
    <input type="hidden" name="id" value="<?= $mahasiswa->id ?>">
        <div class="mb-3">
            <label for="nama" class="form-label">NAMA:</label>
            <input type="text" name="nama" id="nama" class="form-control" value="<?= $mahasiswa->nama ?>" required>
        </div>
        <div class="mb-3">
            <label for="nim" class="form-label">NIM:</label>
            <input type="text" name="nim" id="nim" class="form-control" value="<?= $mahasiswa->nim ?>" required>
        </div>
        <div class="mb-3">
            <label for="prodi" class="form-label">PRODI:</label>
            <input type="text" name="prodi" id="prodi" class="form-control" value="<?= $mahasiswa->prodi ?>" required>
        </div>
        <button type="submit" class="edit-btn">Edit</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>