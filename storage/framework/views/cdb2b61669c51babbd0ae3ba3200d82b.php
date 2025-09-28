<!DOCTYPE html>
<html>
<head>
    <title>Homepage Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Web Gallery</a>
    </div>
</nav>

<div class="container mt-5">
    <h1 class="text-center mb-4">Welcome to Web Gallery</h1>
    <div class="row">
        <?php $__empty_1 = true; $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">
                    <img src="<?php echo e(asset('storage/'.$g->image)); ?>" class="card-img-top" alt="<?php echo e($g->title); ?>" style="height:200px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($g->title); ?></h5>
                        <p class="card-text"><?php echo e($g->description); ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p class="text-center">Belum ada gambar di gallery.</p>
        <?php endif; ?>
    </div>
</div>

<footer class="bg-dark text-white text-center py-3 mt-5">
    <p>&copy; <?php echo e(date('Y')); ?> Web Gallery | All Rights Reserved</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH D:\File Akhdan\Xampp\htdocs\webgallery\resources\views/home.blade.php ENDPATH**/ ?>