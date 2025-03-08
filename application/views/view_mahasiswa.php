<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DATA MAHASISWA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #adb5bd;
            padding: 100px;
        }
        h1 {
            text-align: center;
            color: black;
            border: 1px solid black;
            border-radius: 10px;
            padding: 10px;
            background-color: #e9ecef;
        }
        .table-container {
            margin-top: 10px;
            border-radius: 50px;
            overflow: hidden;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th {
            background-color: #f8f9fa;
            color: #f4f4f4;
            text-align: center;
        }
        td {
            text-align: center;
        }
        .btn {
            margin: 5px;
        }
    </style>
</head>
<body>

<h1>DATA MAHASISWA</h1>

<div class="table-container">
    <table class="table  table-dark table-bordered table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>NIM</th>
                <th>PRODI</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $i = 1; // Inisialisasi nomor urut
            foreach ($mahasiswa as $row) { ?>
                <tr class="table-info table-striped-columns">
                    <td><?php echo $i++; ?></td> <!-- Menampilkan nomor urut -->
                    <td><?php echo htmlspecialchars($row->nama); ?></td>
                    <td><?php echo htmlspecialchars($row->nim); ?></td>
                    <td><?php echo htmlspecialchars($row->prodi); ?></td>
                
                    <td>
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url("form-edit-mahasiswa/".$row->id); ?>">Edit</a>
                    
                        <a class="btn btn-sm btn-danger" href="<?php echo base_url("hapus-mahasiswa/".$row->id); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<div class="text-center">
    <a class="btn btn-success" href="<?php echo base_url('form-mahasiswa'); ?>">Tambah</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>