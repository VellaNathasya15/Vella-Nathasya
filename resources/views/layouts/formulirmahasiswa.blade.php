<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


</head>
<body>
    <div class="container-fluid mt-4 rounded">
        <form action="/mahasiswa/simpanmahasiswa" method="POST" class="pt-2 pb-2">
            @csrf
            <div class="form-group w-25">
                <label>Nim</label>
                <input type="number" name="nim" class="form-control" placeholder="Masukan NIM" required>
            </div>
            <div class="form-group w-25">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required>
            </div>
            <div class="form-group w-25">
                <input type="radio" name="gender" value="pria" class="form-check-input">
                <label>Pria</label>
            </div>
            <div class="form-group w-25">
                <input type="radio" name="gender" value="wanita" class="form-check-input">
                <label>Wanita</label>
            </div>
            <div class="form-group w-25">
                <label>Jurusan</label>
                <select name="jurusan" class="form-control">
                    <option value="sistem informasi">sistem informasi</option>
                    <option value="kedokteran">kedokteran</option>
                    <option value="arsitek">arsitek</option>
                    <option value="informatika">informatika</option>
                    <option value="teknik sipil">teknik sipil</option>
                </select>
            </div>
            <label>bidang_minat</label>
            <div class="form-check w-25">
                <input type="checkbox" name="bidang_minat[]" value="SIE" class="form-check-input">
                <label>SIE</label>
            </div>
            <div class="form-check w-25">
                <input type="checkbox" name="bidang_minat[]" value="SIK" class="form-check-input">
                <label>SIK</label>
            </div>
            <div class="form-check w-25">
                <input type="checkbox" name="bidang_minat[]" value="Database" class="form-check-input">
                <label>Database</label>
            </div>
            <div class="form-group pt-4">
                <input type="submit" value="SIMPAN" class="btn btn-outline-primary">
            </div>

        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</body>
</head>

