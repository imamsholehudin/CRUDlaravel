@extends('layout.master2')

@section('nama_halaman')
   {{$name_web}}
@endsection

@section('content')
        
                    <a href="/periode/tambah" class="btn btn-primary">Input Periode Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Bulan</th>
                                <th>Tahun</th>
                                <th>Waktu Kerja</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1;?>
                            @foreach($periode as $p)
                            <tr>
                                <td>{{ $no++}}</td>
                                <td>{{ $p->bulan }}</td>
                                <td>{{ $p->tahun }}</td>
                                <td>{{ $p->waktu_kerja }}</td>
                                <td>
                                    <a href="/periode/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/periode/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                
@endsection