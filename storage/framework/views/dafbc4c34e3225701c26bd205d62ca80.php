<!DOCTYPE html>
<html>
<head>
    <title>Tambah Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="mb-4">Tambah Gambar Baru</h2>
    <form action="<?php echo e(route('gallery.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label>Upload Gambar</label>
            <input type="file" name="image" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-dark">Simpan</button>
        <a href="<?php echo e(route('gallery.index')); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>

</body>
</html>
<?php /**PATH D:\File Akhdan\Xampp\htdocs\webgallery\resources\views/admin/gallery/create.blade.php ENDPATH**/ ?>