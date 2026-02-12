<!DOCTYPE html>
<html>
<head>
    <title>Detail Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Detail Student</h2>

    <a href="{{ route('students.index') }}" class="btn btn-secondary mb-3">Kembali</a>

    <div class="card">
        <div class="card-body">
            <p><strong>Nama:</strong> {{ $student->name }}</p>
            <p><strong>Classroom:</strong> {{ $student->classroom->name }}</p>
            <p><strong>Gender:</strong>
                {{ $student->gender == 'L' ? 'Laki-laki' : 'Perempuan' }}
            </p>
        </div>
    </div>
</div>

</body>
</html>
