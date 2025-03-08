<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
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
    <h2 class="text-center">Form Mahasiswa</h2>
    <form action="<?= base_url('insert-mahasiswa') ?>" method="POST">
    
        <div class="mb-3">
            <label for="nama" class="form-label">NAMA:</label>
            <input type="text" name="nama" id="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="nim" class="form-label">NIM:</label>
            <input type="text" name="nim" id="nim" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="kelas" class="form-label">KELAS:</label>
            <select name="kelas_id" id="kelas" class="form-select" required>
                <?php
                // Ambil data kelas dari database
                $kelas_list = $this->db->get('kelas')->result();
                foreach ($kelas_list as $kelas) {
                    echo "<option value='{$kelas->id}'>{$kelas->nama}</option>";
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="prodi" class="form-label">PRODI:</label>
            <select name="prodi" id="prodi" class="form-select" required>
                <?php
                // Ambil data prodi dari database
                $prodi_list = $this->db->get('prodi')->result();
                foreach ($prodi_list as $prodi) {
                    echo "<option value='{$prodi->id}'>{$prodi->nama}</option>";
                }
                ?>
            </select>
        </div>
        <button type="submit" class="btn btn-success">SIMPAN</button>
       
    </form>
</div>
<div class="text-center">
    <a class="btn btn-success" href="<?php echo base_url('view-mahasiswa'); ?>">Kembali</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 