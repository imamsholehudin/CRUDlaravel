@extends('layout.master2')

@section('nama_halaman')
   {{$name_web}}
@endsection

@section('content')
    <!-- form start -->
    
    <form action="simpan-pegawai" method="POST">
        {{ csrf_field() }}
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">NIK</label>

                <input type="text" class="form-control" name="nik"
                    id="exampleInputPassword1" placeholder="Enter NIK">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Karyawan</label>

                <input type="text" class="form-control" name="nama"
                    id="exampleInputPassword1" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label>Telp</label>
                <input type="number" class="form-control" name="telp"
                    id="exampleInputPassword1" placeholder="Enter Telp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <input type="email" class="form-control" name="email"
                    id="exampleInputPassword1" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Alamat</label>
                <input type="Text" class="form-control" name="alamat"
                    id="exampleInputPassword1" placeholder="Enter Address">
            </div>
            <div class=" form-group">
                <label for="exampleInputPassword1">Jabatan</label>
                <input type="text" class="form-control" name="jabatan"
                    id="exampleInputPassword1" placeholder="Enter Position">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Pendidikan Terakhir</label>
                <input type="text" class="form-control" name="pendidikan"
                    id="exampleInputPassword1" placeholder="Enter Studies And School">
            </div>


        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <input type="submit" class="btn btn-primary" name="Simpan" value="Simpan">
            <input type="reset" class="btn btn-warning" name="Simpan" value="Reset">
            <a href="/pegawai" type="submit" class="btn btn-danger">Kembali </a>
        </div>
    </form>
@endsection
