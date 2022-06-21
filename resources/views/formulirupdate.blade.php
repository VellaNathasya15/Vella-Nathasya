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
        <form action="/mahasiswanew/editmahasiswanew/{{$mahasiswanew ->id}}" method="POST" class="pt-2 pb-2">
            
            @method('PUT')
            <div class="form-group w-25">
                <label>NIM</label>
                <input type="number" name="nim" class="form-control" value="{{$mahasiswanew->nim}}">
            </div>
            <div class="form-group w-25">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" value="{{$mahasiswanew->nama}}">
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
                    <option value="teologi">teologi</option>
                    <option value="informatika">informatika</option>
                    <option value="teknik sipil">teknik sipil</option>
                </select>
            </div>
            <div class="form-group w-25">
                <label>Bidang_minat</label>
                <select name="bidang_minat" class="form-control">
                    <option value="SIK">SIK</option>
                    <option value="SIE">SIE</option>
                    <option value="Database">Database</option>
                    <option value="UI/UX">UI/UX</option>
                    <option value="Farmasi">Farmasi</option>
                    <option value="Nutrisi">Nutrisi</option>
                    <option value="Konstruksi">Konstruksi</option>
                    <option value="Studi perancangan kota">Studi perancangan kota</option>
                    <option value="Teknologi bahan">Teknologi bahan</option>
                    <option value="Health care">Health care</option>
                    <option value="Studi praktik arsitektur">Studi praktik arsitektur</option>
                </select>
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
    </div>
</body>
</head>