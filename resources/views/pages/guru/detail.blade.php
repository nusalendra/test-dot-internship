<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-3">
                <div class="p-3 bg-white border-b border-gray-200 fs-5 font-black">
                    Detail Data Guru
                </div>
                <div class="mx-4 my-4">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Guru : {{ $guru->nama }}</label>
                    </div>
                    <div class="mb-3">
                        <label for="mata_pelajaran" class="form-label">Mata Pelajaran :
                            {{ $guru->mata_pelajaran }}</label>
                    </div>
                    <div class="mb-2 bg-white border-b border-gray-200 fs-5 font-black">
                        Daftar siswa mata pelajaran ini :
                    </div>
                    <div class="mx-2">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Siswa</th>
                                    <th scope="col">Mata Pelajaran</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($siswa as $index => $item)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->guru->mata_pelajaran }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <a href="/guru" class="btn btn-danger">
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Aksi Dihentikan',
                text: '{{ session('error') }}',
            });
        </script>
    @endif
</x-app-layout>
