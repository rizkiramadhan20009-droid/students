<!DOCTYPE html>
<html>
<head>
    <title>Edit Classroom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Edit Classroom</h2>

    <a href="{{ route('classrooms.index') }}" class="btn btn-secondary mb-3">Kembali</a>

    <form action="{{ route('classrooms.update', $classroom->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $classroom->name }}">
        </div>

        <div class="mb-3">
            <label>Level</label>
            <input type="text" name="level" class="form-control" value="{{ $classroom->level }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

</body>
</html>
    