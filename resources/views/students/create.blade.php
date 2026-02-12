<!DOCTYPE html>
<html>
<head>
    <title>Tambah Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Tambah Student</h2>

    <a href="{{ route('students.index') }}" class="btn btn-secondary mb-3">Kembali</a>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="mb-3">
            <label>Classroom</label>
            <select name="classrooms_id" class="form-control">
                <option value="">-- Pilih Classroom --</option>
                @foreach($classrooms as $class)
                    <option value="{{ $class->id }}">
                        {{ $class->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Gender</label>
            <select name="gender" class="form-control">
                <option value="">-- Pilih Gender --</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>

</body>
</html>
