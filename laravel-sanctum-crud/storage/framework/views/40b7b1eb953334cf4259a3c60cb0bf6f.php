<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body">

                    <h4 class="text-center mb-4">Login</h4>

                    
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <?php echo e($errors->first()); ?>

                        </div>
                    <?php endif; ?>

                    <form action="/login" method="post">
                        <?php echo csrf_field(); ?>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input
                                type="email",
                                name="email",
                                class="form-control",
                                placeholder="Masukkan email",
                                required
                            >
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input
                                type="password",
                                name="password",
                                class="form-control",
                                placeholder="Masukkan password",
                                required
                            >
                        </div>

                        <button class="btn btn-primary w-100">
                            Login
                        </button>
                    </form>
                </div>
            </div>

            <p class="text-center mt-3 text-muted">
                © <?php echo e(date('Y')); ?> CRUD App
            </p>
        </div>
    </div>

    <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

</body>
</html><?php /**PATH /Users/hafidzzamzam0206/laravel-sanctum-crud/resources/views/auth/login.blade.php ENDPATH**/ ?>