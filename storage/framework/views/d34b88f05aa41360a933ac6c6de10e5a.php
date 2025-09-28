<!DOCTYPE html>
<html>
<head>
    <title>Edit Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="mb-4">Edit Gambar</h2>
    <form action="<?php echo e(route('gallery.update', $gallery->id)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="title" value="<?php echo e($gallery->title); ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control"><?php echo e($gallery->description); ?></textarea>
        </div>
        <div class="mb-3">
            <label>Gambar Sekarang</label><br>
            <img src="<?php echo e(asset('storage/'.$gallery->image)); ?>" width="150" class="mb-2">
            <input type="file" name="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark">Update</button>
        <a href="<?php echo e(route('gallery.index')); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>

</body>
</html>
<?php /**PATH D:\File Akhdan\Xampp\htdocs\webgallery\resources\views/admin/gallery/edit.blade.php ENDPATH**/ ?>