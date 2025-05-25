@extends('Master')

@section('title', 'home')

@section('konten')

<div class="container">
    <h1 class="text-center mb-4">Selamat Datang di SIMADA</h1>

    {{-- @if(Auth::user()->peran == 'admin') --}}
    <div class="row">
        <div class="col-md-3">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body text-center">
                    <h5 class="card-title">Manajemen Guru</h5>
                    {{-- <a href="{{ route('guru.index') }}" class="btn btn-light mt-2">Kelola</a> --}}
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-success mb-3">
                <div class="card-body text-center">
                    <h5 class="card-title">Manajemen Siswa</h5>
                    {{-- <a href="{{ route('siswa.index') }}" class="btn btn-light mt-2">Kelola</a> --}}
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-info mb-3">
                <div class="card-body text-center">
                    <h5 class="card-title">Mata Pelajaran</h5>
                    {{-- <a href="{{ route('mapel.index') }}" class="btn btn-light mt-2">Kelola</a> --}}
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-warning mb-3">
                <div class="card-body text-center">
                    <h5 class="card-title">Pendaftaran Siswa</h5>
                    {{-- <a href="{{ route('pendaftaran.index') }}" class="btn btn-light mt-2">Kelola</a> --}}
                </div>
            </div>
        </div>
    </div>

    {{-- @elseif(Auth::user()->peran == 'guru') --}}
    <div class="card mb-3">
        <div class="card-header bg-success text-white">Mata Pelajaran yang Diampu</div>
        <div class="card-body">
            <ul>
                {{-- @foreach($mapel as $item)
                <li>{{ $item->nama_mapel }}</li>
                @endforeach --}}
            </ul>
        </div>
    </div>

    {{-- @elseif(Auth::user()->peran == 'siswa') --}}
    <div class="card mb-3">
        <div class="card-header bg-info text-white">Mata Pelajaran yang Diambil</div>
        <div class="card-body">
            <ul>
                {{-- @foreach($jadwal as $item)
                <li>{{ $item->mata_pelajaran->nama_mapel }}</li>
                @endforeach --}}
            </ul>
        </div>
    </div>
</div>
@endsection


