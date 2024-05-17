<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru | PNM</title>
    <link rel="stylesheet" type="text/css" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('bg.jpg');
        }

        header {
            background-color: #f08080;
            color: white;
            padding: 20px;
            text-align: center;
        }

        header h3 {
            margin: 0;
        }

        .container {
            background-color: white;
        }
        
        .btn-custom {
            color: white;
            background-color: #f08080;
        }

        .btn-custom:hover {
            color: white;
            background-color: #f4978e;
        }
    </style>
</head>

<body>
        <header class="mb-4">
            <h3 class="text-center">Formulir Pendaftaran Siswa Baru</h3>
        </header>

        <div class="container mt-5 border p-4 rounded">
        <form action="proses-pendaftaran.php" method="POST">
            <fieldset class="border p-4 rounded">

                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama lengkap" required>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <textarea class="form-control" name="alamat" rows="3" required></textarea>
                </div>

                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin:</label><br>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="jenis_kelamin" value="laki-laki" required>
                        <label class="form-check-label" for="jenis_kelamin">Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="jenis_kelamin" value="perempuan" required>
                        <label class="form-check-label" for="jenis_kelamin">Perempuan</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="agama">Agama:</label>
                    <select class="form-control" name="agama" required>
                        <option value="">Pilih Agama</option>
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                        <option>Atheis</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="sekolah_asal">Sekolah Asal:</label>
                    <input type="text" class="form-control" name="sekolah_asal" placeholder="Nama sekolah" required>
                </div>

                <div class="form-group text-center">
                    <input type="submit" class="btn btn-custom" value="Daftar" name="daftar">
                </div>

            </fieldset>
        </form>
    </div>
    <script src="vendor/twbs/bootsrap/dist/js/jquery.min.js"></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
