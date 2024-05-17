<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru | PNM</title>
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('bg.jpg');
        }
        header {
            background-color: #f08080;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 2.5em;
        }

        header h3 {
            margin: 0;
            font-size: 1.5em;
        }

        h4 {
            text-align: center;
        }

        .nav-pills .nav-link.active {
        background-color: #f4978e;
        }

        .nav-pls .nav-link.active {
        background-color: #f4978e;
        }
    </style>
</head>

<body>
        <header class="text-center mb-4">
            <h1>Pendaftaran Siswa Baru</h1>
            <h2>Politeknik Negeri Madiun</h2>
        </header>

        <div class="container mt-5">
        <nav class="mb-4">
            <h4>Menu</h4>

            <ul class="nav nav-pills justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" href="form-daftar.php">Daftar Baru</a>
                </li>
                
                <ul class="nav nav-pls mx-4 justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" href="list-siswa.php">Pendaftar</a>
                </li>
            </ul>
            </ul>
        </nav>

        <?php if(isset($_GET['status'])): ?>
            <div class="alert <?php echo ($_GET['status'] == 'sukses') ? 'alert-success' : 'alert-danger'; ?>" role="alert">
                <?php
                    if($_GET['status'] == 'sukses'){
                        echo "Pendaftaran siswa baru berhasil!";
                    } else {
                        echo "Pendaftaran gagal!";
                    }
                ?>
            </div>
        <?php endif; ?>
    </div>
    <script src="vendor/twbs/bootsrap/dist/js/jquery.min.js"></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
