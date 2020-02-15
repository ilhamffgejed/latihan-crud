@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ubah Dafter Siswe</div>

                <div class="card-body">
                
                    <div class="form-group">
                        <label>NIS</label>
                        <input type="text" name="nis" class="form-control" value="{{$siswa->nis}}" readonly>
    
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{$siswa->nama}}" readonly>
                
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" cols="20" rows="3" readonly>{{ $siswa->alamat }} </textarea>
                
                        <label>Kelas Siswa</label>
                       <input type="text" value="{{$siswa->kelas->kelas}}" name="kelas" class="form-control" readonly >
                </div>
                <div class="form-group">
                    <a href="{{url()->previous() }}" class="btn btn-primary">Kembali </a>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection