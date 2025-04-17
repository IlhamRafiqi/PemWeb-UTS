<!DOCTYPE html>
<html>
<head>
    <title>Admin Buku Tamu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2 class="mb-4">Data Buku Tamu</h2>

    <form method="get" class="row g-3 mb-4">
        <div class="col-md-4">
            <input type="date" name="start" class="form-control" value="<?= $this->input->get('start') ?>">
        </div>
        <div class="col-md-4">
            <input type="date" name="end" class="form-control" value="<?= $this->input->get('end') ?>">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-success">Filter</button>
        </div>
    </form>

    <table class="table table-bordered table-striped shadow">
        <thead class="table-dark">
            <tr>
                <th>Nama</th>
                <th>Instansi</th>
                <th>Keperluan</th>
                <th>Waktu</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tamu as $row): ?>
                <tr>
                    <td><?= $row->nama ?></td>
                    <td><?= $row->instansi ?></td>
                    <td><?= $row->keperluan ?></td>
                    <td><?= date('d-m-Y H:i', strtotime($row->waktu)) ?></td>
                    <td><a href="<?= site_url('admin/delete/' . $row->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin?')">Hapus</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
