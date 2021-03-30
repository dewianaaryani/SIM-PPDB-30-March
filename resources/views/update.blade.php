<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
</head>
<body>
    @if($errors->any())
        <div class="alert">
            <strong>Ada yang salah dengan inputan mu</strong>
            <ul>
                @foreach($errors->all() as $errors)
                    <li>{{$errors}}</li>
                @endforeach

            </ul>
        </div>

    @endif
    <h1>Pendaftaran Peserta Didik</h1>
    <form action="{{route('peserta.store')}}" method="post" enctype="multipart/form-data">
    @csrf
            <div class="row">
                <div class="col-12">
                    <div class="col-3">
                        <label for="">Nama</label>
                        <input type="text" name="name">
                    </div>
                        <div class="col-3">
                            <label for="">Jenis Kelamin</label>
                            <select name="gender" id="">
                            <option> choose..</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    <div class="col-3">
                        <label for="">Tempat Tanggal Lahir</label>
                        <input type="text" name="birth_place">
                        <input type="date" name="birth_date" id="">           
                    </div>
                    <div class="col-3">
                        <label for="">Alamat</label>
                        <textarea name="address" id="" cols="30" rows="2"></textarea>
                    </div>
                    <div class="col-3">
                        <label for="">Asal sekolah</label>
                        <input type="text" name="asal_sekolah">
                    </div>
                    <div class="col-3">
                        <label for="">Jurusan yang diminati</label>
                        <select name="major" id="">
                        <option> choose..</option>
                            <option value="RPL">Rekayasa Perangkat Lunak</option>
                            <option value="MMD">Multimedia</option>
                            <option value="TKJ">Teknik Komputer dan Jaringan</option>
                            <option value="TBG">Tata Boga</option>
                            <option value="HTL">Perhotelan</option>
                            <option value="BDP">Bisnis Daring dan Pemasaran</option>
                            <option value="OTKP">Otomatisasi Tata Kelola Perkantoran</option>
                        </select>
                    </div>     
                    <div class="col-3">
                        <label for="">email</label>
                        <input type="email" name="email">
                    </div>       
                    <div class="col-3">
                        <label for="">password</label>
                        <input type="password" name="password">
                    </div>       
                    <button type="submit">Add</button>
                </div>                
            </div>
    </form>
</body>
</html>