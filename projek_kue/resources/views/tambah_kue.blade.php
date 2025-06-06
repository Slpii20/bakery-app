@extends('master')

@section('judul_halaman', 'Tambah Data Kue | Aplikasi Pengelolaan Data Kue Kering')


@section('konten')
    <h1 class="mt-4">tambah data kue</h1>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">beranda</a></li>
            <li class="breadcrumb-item"><a href="/tambah_kue">data kue</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah</li>
        </ol>
    </nav>

    <div class="card mb-4">
        <div class="card-header bg-primary text-light">
            <i class="fas fa-table me-1"></i>
            tambah daftar data kue
        </div>
        <div class="card-body text-capitalize">
            <form action="/tambah_kue" method="post" >
                @csrf

                <div class="mb-4 row">
                    <label for="text" class="col-sm-2 col-form-label">Nama Kue</label>
                    <div class="col-sm-10">
                        <input name="nama_kue" class="form-control " type="text" placeholder="Masukkan nama produk" id="text" aria-label=".form-control-lg example">
                    </div>
                </div>
                <div class="mb-4 row">
                    <label for="text" class="col-sm-2 col-form-label">deskripsi kue</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text"  name="deskripsi_kue" placeholder="Masukkan deskripsi produk" id="text">
                    </div>
                </div>
                <div class="mb-4 row">
                    <label for="text" class="col-sm-2 col-form-label">harga kue</label>
                    <div class="col-sm-10">
                        <input name="harga_kue"  class="form-control " type="number" placeholder="Masukkan harga" id="text" aria-label=".form-control-lg example">
                    </div>
                </div>
                <div class="mb-4 row">
                    <label for="stok" class="col-sm-2 col-form-label">stok</label>
                    <div class="col-sm-10">
                        <input name="stok" class="form-control " type="number" placeholder="Masukkan jumlah stok" id="stok" aria-label=".form-control-lg example">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
