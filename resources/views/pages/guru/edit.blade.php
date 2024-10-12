<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-3">
                <div class="p-3 bg-white border-b border-gray-200 fs-5 font-black">
                    Edit Data Guru
                </div>
                <form class="mx-4 my-4" action="/guru/{{ $data->id }}" method="POST" role="form text-left">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                      <label for="nama" class="form-label">Nama Guru</label>
                      <input type="text" class="form-control" name="nama" id="nama" value="{{ $data->nama }}" placeholder="Masukkan Nama Guru">
                    </div>
                    <div class="mb-3">
                      <label for="mata_pelajaran" class="form-label">Mata Pelajaran</label>
                      <input type="text" class="form-control" name="mata_pelajaran" id="mata_pelajaran" value="{{ $data->mata_pelajaran }}" placeholder="Masukkan Mata Pelajaran">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
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
