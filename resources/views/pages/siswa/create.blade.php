<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-3">
                <div class="p-3 bg-white border-b border-gray-200 fs-5 font-black">
                    Tambah Data Siswa
                </div>
                <form class="mx-4 my-4" action="/siswa" method="POST" role="form text-left">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Siswa <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="nama" id="nama" required
                            placeholder="Masukkan Nama Siswa">
                    </div>
                    <div class="mb-3">
                        <label for="guru_id" class="form-label">Pengajar <span class="text-danger">*</span></label>
                        <select class="form-select" name="guru_id" aria-label="Default select example" required>
                            <option value="" selected disabled>Pilih Pengajar</option>
                            @foreach ($guru as $item)
                                <option value="{{ $item->id }}">{{ $item->nama }} - Guru
                                    {{ $item->mata_pelajaran }}</option>
                            @endforeach
                        </select>
                    </div>
                    <a href="/siswa" class="btn btn-danger">
                        Kembali
                    </a>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
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
