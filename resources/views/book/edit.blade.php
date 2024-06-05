<x-main>
<div class="library">
    <form class=" container"  action="{{ route('book.update', ['book' => $book])}}" method="POST">
        @csrf
       @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label" >Titolo</label>
            <input type="text" name="title" value="{{$book->title}}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Anno</label>
            <input type="text" name="year" value="{{$book->year}}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Immagine</label>
            <input type="text" name="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-info">Modifica</button>


    
</div>










</x-main>