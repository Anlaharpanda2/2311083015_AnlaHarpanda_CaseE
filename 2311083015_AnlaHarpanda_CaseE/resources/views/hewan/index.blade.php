{{-- index --}}
@extends('layouts.main')

@section('title')
Daftar Hewan
@endsection

@section('content')
<div class="container mt-4">
    <br><br>
    <h1 class="text-center text-primary">Data Hewan</h1>

    <a href="{{ route('hewan.create') }}" class="btn btn-primary mb-3">
        Tambah Data Hewan
    </a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table id="myTable" class="table table-bordered table-striped table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Nama Hewan</th>
                    <th class="text-center">Jenis</th>
                    <th class="text-center">Ras</th>
                    <th class="text-center">Tanggal Lahir</th>
                    <th class="text-center">Nama Pemilik</th>
                    <th class="text-center">Kontak Pemilik</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($hewans as $index => $hewan)
                <tr>
                    <td>{{$index + 1 }}</td>
                    <td class="text-start">{{ $hewan->nama_hewan }}</td>
                    <td class="text-start">{{ $hewan->jenis_hewan }}</td>
                    <td class="text-start">{{ $hewan->ras }}</td>
                    <td class="text-start">{{ $hewan->tanggal_lahir }}</td>
                    <td class="text-start">{{ $hewan->nama_pemilik }}</td>
                    <td class="text-start">{{ $hewan->kontak_pemilik }}</td>
                    <td class="text-center">
                        @if ($hewan->status === 'tidak_aktif')
                            <span class="badge bg-secondary">Tidak Aktif</span>
                        @else
                            <span class="badge bg-success">Aktif</span>
                        @endif
                    </td>
                    <td>
                        <div class="d-flex gap-2">
                            <a href="{{ route('hewan.edit', $hewan->id) }}" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <form action="{{ route('hewan.destroy', $hewan->id) }}" method="POST" onsubmit="return ">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination nyo pak -->
        <div class="d-flex justify-content-center mt-3">
            {{ $hewans->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>

<!-- Untuk pencarian CDN nyo-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#myTable').DataTable({
        });
    });
</script>

@endsection
