<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <link rel="stylesheet" href="{{ asset('/assets/css/adminlte.css') }}">
</head>
<body>

    <h1>Daftar Buku</h1>
    <a href="{{ route('books.create') }}">Tambah Buku</a>

    <table class="table" border="1" cellpadding="8" cellspacing="0" style="text-align: center; margin-top: 20px;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tahun</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->year }}</td>
                   
                </tr>
            @empty
                <tr>
                    <td colspan="5" style="text-align:center;">Tidak ada data buku</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>
