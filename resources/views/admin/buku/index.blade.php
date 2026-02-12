<div class="container">
    <h2>Daftar Buku</h2>
    @if(session('sukses'))
        <div style="color: green; margin-bottom: 20px;">
            {{ session('sukses') }}
        </div>
    @endif

   <form action="{{ route('buku.store') }}" method="POST">
    @csrf
    <div>
        <label>Nama Buku</label>
        <input type="text" name="name" required>
    </div>

    <div>
        <label>Kategori</label>
        <input type="text" name="categories" required>
    </div>

    <button type="submit">Tambah Buku</button>
</form>

    <table border="1" style="width: 100%; margin-top: 20px;">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($bukus as $buku)
        <tr>
            <td>{{ $buku->name }}</td>
            <td>{{ $buku->categories }}</td>
            <td>
                <a href="{{ route('buku.edit', $buku->id) }}">Edit</a>

                <form action="{{ route('buku.destroy', $buku->id) }}"
                      method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="3">DATA KOSONG</td>
        </tr>
        @endforelse
    </tbody>
</table>

</div>