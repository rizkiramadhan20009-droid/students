<form action="{{ route('buku.update', $buku->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label>Nama Buku</label>
        <input type="text" name="name" value="{{ $buku->name }}" required>
    </div>

    <div>
        <label>Kategori</label>
        <input type="text" name="categories" value="{{ $buku->categories }}" required>
    </div>

    <button type="submit">Update</button>
</form>
