<div class="container">
    <h2>Daftar Siswa</h2>
    @if(session('sukses'))
        <div style="color: green; margin-bottom: 20px;">
            {{ session('sukses') }}
        </div>
    @endif

    <form action="{{ route('siswa.store') }}" method="POST">
    @csrf
    <div>
        <label for="nama">Nama Siswa:</label>
        <input type="text" id="nama" name="nama" required>
    </div>
    <div>
        <button type="submit">Tambah Siswa</button>
    </div>
    <table border="1" style="width: 100%; margin-top: 20px;">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($siswas as $siswa)
            <tr>
                <td>{{ $siswa->nama}}</td>
                <td>
                    <a href="{{ route('siswa.edit', $siswa->id) }}">Edit</a>
                    <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="2">DATA KOSONG</td>
        </tr>
        @endforelse    
    </tbody>
    </table>
</div>