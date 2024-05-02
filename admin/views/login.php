<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Portal Berita - Muhammad Rizky">
    <meta name="author" content="Muhammad Rizky">
    <title>Login Admin</title>


    <link href="../bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="../css/sign-in.css" rel="stylesheet">
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">

    <main class="form-signin w-100 m-auto">
        <?php
        extract($_POST);
        if (isset($btnLogin)) {
            $dataLogin = oneData(
                $table = "user",
                $where = "email = '$email' AND
                password = '$password'"
            );

            //jika berhasil login//
            if (is_array($dataLogin)) {
                //tambahkan session//
                $_SESSION['email'] = $dataLogin['email'];
                $_SESSION['nama'] = $dataLogin['nama_user'];

                echo "<script>location='index.php'</script>";
            } else {
                echo '<div class="alert alert-danger" role="alert">
                    Username atau password Anda salah!
                    Silahkan login kembali</div>';
            }
        }
        ?>

        <form action="" method="post">
            <h1 class="h3 mb-3 fw-normal text-center">Please Sign In</h1>

            <div class="form-floating">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="form-check text-start my-3">
                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Remember me
                </label>
            </div>
            <button class="btn btn-primary w-100 py-2" name="btnLogin" type="submit">Sign in</button>
            <p class="mt-2 mb-3 text-body-secondary text-center">Muhammad Rizky &copy; 2024-<?= date('Y') ?></p>
        </form>
    </main>
    <script src="../bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>