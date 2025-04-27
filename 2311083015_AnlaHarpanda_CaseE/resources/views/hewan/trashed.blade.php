{{-- trashed --}}
@extends('layouts.main')

@section('title')
Daftar Hewan
@endsection

@section('content')
<div class="container mt-4">
    <br><br>
    <h1 class="text-center text-primary">Data Hewan dihapus</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table id="myTable" class="table table-bordered table-striped table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th class="text-center">No</th>
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
                    <td>{{ $index + 1 }}</td>
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
                            <a href="{{ route('hewan.pulih', $hewan->id) }}" class="btn bg-success btn-sm">
                                pulihkan
                            </a>

                            <form action="{{ route('hewan.permanen', $hewan->id) }}" method="POST" class="form-hapus">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    Hapus permanen
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

<script>
    $(document).ready(function() {
        $('#myTable').DataTable({
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const forms = document.querySelectorAll('.form-hapus');

        forms.forEach(form => {
            form.addEventListener('submit', function (e) {
                e.preventDefault(); // Mencegah submit otomatis

                Swal.fire({
                    title: 'Yakin?',
                    text: "Data akan dihapus permanen!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit(); // Submit kalau user klik "Ya, hapus"
                    }
                })
            });
        });
    });
</script>


@endsection
