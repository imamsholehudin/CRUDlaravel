@extends('layout.master2')

@section('nama_halaman')
   {{$name_web}}
@endsection

@section('content')
        
<a href="/periode" class="btn btn-primary">Kembali</a>
<br/>
<br/>

<form method="post" action="/periode/store">

    {{ csrf_field() }}

    <div class="form-group">
        <label>Bulan</label>
        <input type="text" name="bulan" class="form-control" placeholder="Bulan Periode..." required>

        @if($errors->has('bulan'))
            <div class="text-danger">
                {{ $errors->first('bulan')}}
            </div>
        @endif

    </div>
    <div class="form-group">
        <label>Tahun</label>
        <input type="number" name="tahun" class="form-control" placeholder="Tahun Periode..." required>

        @if($errors->has('tahun'))
            <div class="text-danger">
                {{ $errors->first('tahun')}}
            </div>
        @endif

    </div>
    <div class="form-group">
        <label>Waktu Kerja</label>
        <input type="number" name="waktu_kerja" class="form-control" placeholder="Waktu Kerja per-periode..." required>

        @if($errors->has('waktu_kerja'))
            <div class="text-danger">
                {{ $errors->first('waktu_kerja')}}
            </div>
        @endif

    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-success" value="Simpan">
    </div>

</form>

                
@endsection