<h2>Edit Buku</h2>

<form action="/books/{{ $book->id }}" method="POST">
    @csrf
    @method('PUT')

    <label for="title">Judul:</label><br>
    <input type="text" id="title" name="title" value="{{ $book->title }}" required><br><br>

    <label for="author">Penulis:</label><br>
    <input type="text" id="author" name="author" value="{{ $book->author }}" required><br><br>

    <label for="year">Tahun:</label><br>
    <input type="number" id="year" name="year" value="{{ $book->year }}" required><br><br>

    <button type="submit">Update</button>
</form>
