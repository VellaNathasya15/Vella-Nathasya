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
        <form action="/user/simpanuser" method="POST" class="pt-2 pb-2">
            @csrf
            <div class="form-group w-25">
                <label>Nama</label>
                <input type="text" name="name" class="form-control" placeholder="Masukan Nama User" required>
            </div>
            <div class="form-group w-25">
                <label>Email</label>
                <input type="text" name="email" class="form-control" placeholder="Masukan Email" required>
            </div>
            <div class="form-group w-25">
                <label>Password</label>
                <input type="text" name="password" class="form-control" placeholder="Masukan Password" required>
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

