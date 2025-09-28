<!DOCTYPE html>
<html>
<head>
    <title>Register Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center" style="height: 100vh;">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-lg">
                <div class="card-header bg-dark text-white text-center">
                    <h4>Register Admin</h4>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('register.post')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-dark w-100">Register</button>
                        <p class="mt-3 text-center">
                            Sudah punya akun? <a href="<?php echo e(route('login.form')); ?>">Login</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
<?php /**PATH D:\File Akhdan\Xampp\htdocs\webgallery\resources\views/register.blade.php ENDPATH**/ ?>