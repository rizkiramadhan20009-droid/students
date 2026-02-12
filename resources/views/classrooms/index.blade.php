<!DOCTYPE html>
<html>
<head>
    <title>Classroom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Data Classroom</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('classrooms.create') }}" class="btn btn-primary mb-3">Tambah Classroom</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Level</th>
                <th width="200px">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($classrooms as $key => $class)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $class->name }}</td>
                <td>{{ $class->level }}</td>
                <td>
                    <a href="{{ route('classrooms.show', $class->id) }}" class="btn btn-info btn-sm">Detail</a>
                    <a href="{{ route('classrooms.edit', $class->id) }}" class="btn btn-warning btn-sm">Edit</a>

                    <form action="{{ route('classrooms.destroy', $class->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
