<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-3">
                <div class="p-3 bg-white border-b border-gray-200 fs-5 font-black">
                    Edit Data Guru
                </div>
                <form class="mx-4 my-4" action="/siswa/{{ $siswa->id }}" method="POST" role="form text-left">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Siswa</label>
                        <input type="text" class="form-control" name="nama" id="nama"
                            value="{{ $siswa->nama }}" placeholder="Masukkan Nama Siswa">
                    </div>
                    <div class="mb-3">
                        <label for="guru_id" class="form-label">Pengajar</label>
                        <select class="form-select" name="guru_id" aria-label="Default select example">
                            <option value="" selected disabled>Pilih Pengajar</option>
                            @foreach ($guru as $item)
                                <option value="{{ $item->id }}"
                                    {{ $siswa->guru && $siswa->guru_id == $item->id ? 'selected' : '' }}>
                                    {{ $item->nama }} - Guru {{ $item->mata_pelajaran }}</option>
                            @endforeach
                        </select>
                    </div>
                    <a href="/siswa" class="btn btn-danger">
                        Kembali
                    </a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
