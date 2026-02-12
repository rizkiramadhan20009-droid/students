<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Data Students</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Tambah Student</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Classroom</th>
                <th>Gender</th>
                <th width="200px">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $key => $student)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->classroom->name }}</td>
                <td>
                    {{ $student->gender == 'L' ? 'Laki-laki' : 'Perempuan' }}
                </td>
                <td>
                    <a href="{{ route('students.show', $student->id) }}" class="btn btn-info btn-sm">Detail</a>
                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm">Edit</a>

                    <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
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
