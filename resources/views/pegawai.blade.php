@extends('layout.master2')

@section('nama_halaman')
   {{$name_web}}
@endsection

@section('content')
    <a href="/tambah-pegawai" class="btn btn-primary">Tambah Data</a><br><br>
    <a href="/pegawai/exportpdf" class="btn btn-success">Export PDF</a>
    <table class="table table-hover text-nowrap">
        <tr>
            <th>id</th>
            <th>Nama Lengkap</th>
            <th>No Telp</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Jabatan</th>
            <th>Pendidikan Terakhir</th>
            <th >Opsi</th>
        </tr>
        <?php $no =1;?>
        @foreach ($admin as $k)
            
        
        <tr>
            <td>{{$no++}}</td>
            <td>{{$k->nama_karyawan}}</td>
            <td>{{$k->no_telp}}</td>
            <td>{{$k->email}}</td>
            <td>{{$k->alamat}}</td>
            <td>{{$k->jabatan}}</td>
            <td>{{$k->pendidikan_terakhir}}</td>
            <td>
                <a href="#" class="btn btn-primary">Detail</a> <a href="pegawai/edit/{{$k->id}}" class="btn btn-warning">Edit</a> <a href="pegawai/hapus/{{$k->id}}" class="btn btn-danger">Hapus</a>
            </td> 
            
        </tr>
        @endforeach
    </table>
@endsection
