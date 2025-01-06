<html>

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>

<style>
    * {
        font-family: 'Quicksand', sans-serif;
    }

    body {
        background: -webkit-linear-gradient(to right, #082A3A, #1f6cab);
        background: linear-gradient(to right, #082A3A, #1f6cab);
    }

    .text-secondary {
        color: #DFF6FF !important;
    }

    .sgn-up {
        background: #06283D !important;
        border: 1px solid #06283D !important;
    }

    .row label {
        color: #DFF6FF !important;
    }

    .form-name {
        border-radius: 10px;
        background-color: transparent !important;
        border: 1px solid #816797 !important;
        color: #DFF6FF !important;
        line-height: 1.5 !important;
        display: block;
        width: 100%;
        height: calc(1.5em + 0.75rem + 2px);
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
    }

    .form-name:hover {
        border-color: #816797 !important;
        background-color: transparent !important;
    }

    .form-name:focus {
        background-color: none;
        border-color: none;
    }

    ::placeholder {
        color: #DFF6FF !important;
        opacity: 1;
        /* Firefox */
    }

    :-ms-input-placeholder {
        /* Internet Explorer 10-11 */
        color: #DFF6FF !important;
    }

    ::-ms-input-placeholder {
        /* Microsoft Edge */
        color: #DFF6FF !important;
    }

    input[type="text"]:focus,
    input[type="password"]:focus {
        border: none;
        background: none;
        outline: none;
        transition: .5s ease-in all;
    }

    .btn-regis {
        background: #1F4690 !important;
        border-color: transparent !important;
        border: 2px solid #1F4690 !important;
        border-radius: 30px;
        color: #DFF6FF !important;
        padding: 8px;
        transition: all 0.3s ease-in-out;
    }

    .btn-regis:hover {
        /* color: #76BA99 !important; */
        background: none !important;
    }

    .btn-regis:focus {
        outline: none;
        border: none;
        background: none;
    }

    p .link-login {
        color: #76BA99 !important;
    }
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="signup-form">
                    <form action="./register.php" method="post" class="mt-5 border p-4 bg-light shadow sgn-up">
                        <h4 class="mb-5 text-secondary align-items-center" style="text-align:center;">Form Daftar</h4>
                        <div class="row">

                            <div class="mb-3 col-md-12">
                                <label>Name<span class="text-danger">*</span></label>
                                <input type="text" name="nama" class="form-name" placeholder="Enter Name" value="<?= $_SESSION['nama'] ?? '' ?>">
                            </div>

                            <div class="mb-3 col-md-12">
                                <label>Email<span class="text-danger">*</span></label>
                                <input type="text" name="email" class="form-name" placeholder="Enter Name" value="<?= $_SESSION['email'] ?? '' ?>">
                            </div>

                            <div class="mb-3 col-md-12">
                                <label>Nomor Hp<span class="text-danger">*</span></label>
                                <input type="text" name="no_hp" class="form-name" placeholder="Enter Name" value="<?= $_SESSION['no_hp'] ?? '' ?>">
                            </div>

                            <div class="mb-3 col-md-12">
                                <label>Jenis Kelamin<span class="text-danger">*</span></label>
                                <select name="jenis_kelamin" class="form-name" placeholder="Jenis Kelamin" value="<?= $_SESSION['jenis_kelamin'] ?? '' ?>">
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>

                            <div class="mb-3 col-md-12">
                                <label>Username<span class="text-danger">*</span></label>
                                <input type="text" name="username" class="form-name" placeholder="Enter Name" value="<?= $_SESSION['username'] ?? '' ?>">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label>Password<span class="text-danger">*</span></label>
                                <input type="password" name="password" class="form-name" placeholder="Enter Password" value="<?= $_SESSION['password'] ?? '' ?>">
                            </div>

                            <div class="mb-3 col-md-12">
                                <label>Confirm Password<span class="text-danger">*</span></label>
                                <input type="password" name="confirmpassword" class="form-name" placeholder="Confirm Password" value="<?= $_SESSION['confirmpassword'] ?? '' ?>">
                            </div>

                            <div class="mb-3 col-md-12">
                                <label>Role<span class="text-danger">*</span></label>
                                <select name="role" class="form-name" placeholder="Role" value="<?= $_SESSION['role'] ?? '' ?>">
                                    <option value="admin">Admin</option>
                                    <option value="customer">Customer</option>
                                </select>
                            </div>

                            <div class="mb-3 col-md-12 mt-2" style="text-align: center;">
                                <button class="btn-regis" type="submit">Daftar Sekarang</button>
                            </div>
                        </div>
                    </form>
                    <p class="text-center mt-3 text-secondary">Jika anda telah mempunyai akun, Silahkan <a href="indexlogin.php" class="link-login">Login Sekarang</a></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
</body>

</html>