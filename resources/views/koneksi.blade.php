<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <dic class="col-lg-12 bg-primary py py-4"></div>
        </div>
        <div class="row">
            <div class="col-lg-12 vh-100">
            <div class="d-flex align-items-start">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link" id="v-pills-home-tab" data-bs-toggle="pill" href=#>Home</a> 
                    <a class="nav-link active" id="v-pills-profile-tab" data-bs-toggle="pill" href="/mahasiswa">>Mahasiswa</a>
                    <a class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill" href =#>Dosen</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href =#>KRS</button>
                    <a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" href =#>Settings</button>
                </div>
            </div>
            <div class="col-lg-10 vh-100">
                <div class="card">
                    <div class="card-header">
                    <a name= "" id="" class="btn btn-primary" href="/mahasiswa/formulirmahasiswa" role="button"><i class="bi bi-plus-square-fill"></i>ADD MAHASISWA</a>
                    <form class="form-inline my-2 my-lg-0 float=right" method=right action="/mahasiswa/cari">
                        <input class="form-control mr-sm-2" name = "cari" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    </div>
                    <div class="card-body">
                        @if (session('alert'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>{{ session('alert')}}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    <table class="table">
                        <thead>
                            <tr>
                                
                                <th scope="col">nim</th>
                                <th scope="col">nama</th>
                                <th scope="col">gender</th>
                                <th scope="col">jurusan</th>
                                <th scope="col">bidang_minat</th>
                                <th scope="col">tambah</th>
                                <th scope="col">aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($mahasiswa as $no => $mhs)
                            <tr>
                                <th scope="row">{{$mahasiswa -> firstItem() + $no}}</th>
                               
                                <td> {{$mhs -> nim}}</td>
                                <td> {{$mhs -> nama}}</td>
                                <td> {{$mhs -> gender}}</td>
                                <td> {{$mhs -> jurusan}}</td>
                                <td> {{$mhs -> bidang_minat}}</td>
                                <td>
                                  <a href="/mahasiswa/editmahasiswa/{{ $mhs -> id }}" class="btn btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
                                  <a href="/mahasiswa/hapusmahasiswa/{{ $mhs -> id }}" class="btn btn-outline-primary"><i class="bi bi-x-square"></i></a>

                                </td>
                            </tr>
                           @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>