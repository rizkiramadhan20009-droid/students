<!DOCTYPE html>
<html>
<head>
    <title>Detail Classroom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Detail Classroom</h2>

    <a href="{{ route('classrooms.index') }}" class="btn btn-secondary mb-3">Kembali</a>

    <div class="card">
        <div class="card-body">
            <p><strong>Name:</strong> {{ $classroom->name }}</p>
            <p><strong>Level:</strong> {{ $classroom->level }}</p>
        </div>
    </div>
</div>

</body>
</html>
