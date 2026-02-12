<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Edit Student</h2>

    <a href="{{ route('students.index') }}" class="btn btn-secondary mb-3">Kembali</a>

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" value="{{ $student->name }}">
        </div>

        <div class="mb-3">
            <label>Classroom</label>
            <select name="classrooms_id" class="form-control">
                @foreach($classrooms as $class)
                    <option value="{{ $class->id }}"
                        {{ $student->classrooms_id == $class->id ? 'selected' : '' }}>
                        {{ $class->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Gender</label>
            <select name="gender" class="form-control">
                <option value="L" {{ $student->gender == 'L' ? 'selected' : '' }}>
                    Laki-laki
                </option>
                <option value="P" {{ $student->gender == 'P' ? 'selected' : '' }}>
                    Perempuan
                </option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

</body>
</html>
