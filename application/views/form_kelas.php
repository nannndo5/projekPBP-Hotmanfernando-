<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .form-container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2 class="text-center">Form Kelas</h2>
    <form action="<?= base_url('insert-kelas') ?>" method="POST">
        <div class="mb-3">
            <label for="nama" class="form-label">NAMA KELAS:</label>
            <input type="text" name="nama" id="nama" class="form-control" required>
        </div>
        
        
        <button type="submit" class="btn btn-success">SIMPAN</button>
    </form>
</div>
<div class="text-center">
    <a class="btn btn-success" href="<?php echo base_url('view-kelas'); ?>">Kembali</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 