<form action="{{ route('siswa.store') }}" method="POST">
    @csrf
    <div>
        <label for="nama">Nama Siswa:</label>
        <input type="text" id="nama" name="nama" required>
    </div>
    <div>
        <button type="submit">Tambah Siswa</button>
    </div>