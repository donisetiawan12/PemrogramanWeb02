<form action="{{ $action }}" method="POST">
    @csrf
    @if($method === 'PUT')
        @method('PUT')
    @endif

    <div>
        <label for="title">Judul:</label><br>
        <input type="text" id="title" name="title" value="{{ old('title', $book->title ?? '') }}" required>
    </div>

    <div>
        <label for="author">Penulis:</label><br>
        <input type="text" id="author" name="author" value="{{ old('author', $book->author ?? '') }}" required>
    </div>

    <div>
        <label for="year">Tahun:</label><br>
        <input type="number" id="year" name="year" value="{{ old('year', $book->year ?? '') }}" required>
    </div>

    <button type="submit">{{ $buttonText }}</button>
</form>
