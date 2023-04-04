<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DAFTAR MAHASISWA</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div class="container"> 
            <h1>Daftar Mahasiswa</h1>
            <ul>
                <li>
                    Nama : Frank Verquez <br>
                    Nim : 221402021 <br>
                    Jurusan : Teknologi informasi <br>
                    <form action="/detail_mahasiswa" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">
                            Lihat Detail Mahasiswa [POST]
                        </button>
                    </form>
                    <br>
                    <form action="/detail_mahasiswa" method="GET">
                        @csrf
                        <button type="submit" class="btn btn-primary">
                            Lihat Detail Mahasiswa [GET]
                        </button>
                    </form>

                
                </li>
                <li>
                    Nama : Jazquins Albert  <br>
                    Nim : 221402021 <br>
                    Jurusan : Teknologi informasi <br>
                </li>
            </ul>
    </div>
</body>
</html>