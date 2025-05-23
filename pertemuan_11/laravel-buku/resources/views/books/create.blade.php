<h2>Tambah Buku</h2>

<form action="/books" method="POST">
    @csrf

    <label for="title">Judul:</label><br>
    <input type="text" id="title" name="title" required><br><br>

    <label for="author">Penulis:</label><br>
    <input type="text" id="author" name="author" required><br><br>

    <label for="year">Tahun:</label><br>
    <input type="number" id="year" name="year" required><br><br>

    <button type="submit">>Simpan</button>
</form>
