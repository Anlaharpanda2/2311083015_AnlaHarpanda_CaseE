{{-- create --}}
@extends('layouts.main')
@section('title')
Daftar Dosen Jurusan Teknologi Informasi
@endsection
@section('content')

<style>
    .form-container {
        max-width: 500px;
        margin: 50px auto;
        padding: 20px;
        background: #ffffff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    .form-container h2 {
        text-align: center;
        color: #333;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .form-group input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }

    .form-group input:focus {
        border-color: #007bff;
        outline: none;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    button {
        width: 100%;
        padding: 10px;
        background: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background 0.3s;
    }

    button:hover {
        background: #0056b3;
    }
</style>

<div class="form-container">
    <h2>Tambah Dosen</h2>
    <form action="{{ route('hewan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama Hewan :</label>
            <input type="text" name="nama_hewan" required>
        </div>

        <div class="form-group">
            <label>Jenis Hewan :</label>
            <select class="form-select" id="jenis_hewan" name="jenis_hewan" required>
                <option value="anjing">Anjing</option>
                <option value="kucing">Kucing</option>
                <option value="kelinci">Kelinci</option>
            </select>
        </div>

        <div class="form-group">
            <label>Ras :</label>
            <input type="text" name="ras" required>
        </div>

        <div class="form-group">
            <label>Tanggal lahir :</label>
            <input type="date" name="tanggal_lahir" >
        </div>

        <div class="form-group">
            <label>Nama Pemilik :</label>
            <input type="text" name="nama_pemilik" >
        </div>

        <div class="form-group">
            <label>Kontak Pemilik :</label>
            <input type="text" name="kontak_pemilik" required>
        </div>
        <div>
            <label>Status : </label>
            <select class="form-select" name="status" required>
                <option value="aktif">Aktif</option>
                <option value="tidak_aktif">Tidak Aktif</option>
            </select>
        </div>
        <br>
        <button type="submit">Simpan</button>
    </form>
</div>

@endsection


