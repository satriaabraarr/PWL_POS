<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QAlY2jxjPEj15u3WaiMR0OFpQekCYtVmrSoWpY12RaJKhoJYmJGYNmAL+Elvti" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>File Upload</title>
</head>

<body>
    <div class="container mt-3">
        <h2>File Upload</h2>
        <hr>
        <form action="{{ url('/file-upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="namaFile" class="form-label">Nama File Akhir</label>
                <input type="text" class="form-control" id="namaFile" name="namaFile" placeholder="Masukkan nama file">
                @error('namaFile')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="berkas" class="form-label">Gambar Profile</label>
                <input type="file" class="form-control" id="berkas" name="berkas">
                @error('berkas')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary my-2">Upload</button>
        </form>

        @if (session('pathBaru'))
            <div class="mt-3">
                {{-- <h4>Proses upload berhasil!</h4>
                <p>Data disimpan pada: {{ session('path') }}</p> --}}
                <p>Gambar berhasil diupload ke <a href="{{ session('pathBaru') }}">{{ basename(session('pathBaru')) }}</a></p>
                <img src="{{ session('pathBaru') }}" alt="Uploaded Image" class="img-thumbnail">
            </div>
        @endif
    </div>
</body>

</html>
