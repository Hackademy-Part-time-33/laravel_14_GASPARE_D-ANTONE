<x-main>
<div class="library">
    <ul class=" ms-auto">
        <a href="{{ route('create')}}" class="btn btn-info" >Inserisci</a>
       
</div>



</div class="container">

<div class="rounded-3 py-5 px-4 px-md-5 mb-5">
  
  <div class="text-center container">
          <h1>Elenco libri presenti</h1>
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <div class="container mt-1">
            
            <table class="table border mt-2">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Immagine</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($books as $book)
                        <tr>
                            <th scope="row">#{{ $book->id }}</th>
                            <td>{{ $book->title }}</td>
                            <td>
                                {{-- <img class="card-img-top" style="width:3rem"
                                    src="{{ $book->image ? Storage::url($book->image) : '/template/assets/aulab-logo.svg' }}"
                                    alt="..." /> --}}
                            </td>
                            <td>

                                {{-- <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    @auth
                                        <a href="{{ route('books.edit', ['book' => $book->id]) }}"
                                            class="btn btn-warning me-md-2">
                                            Modifica
                                        </a>
                                        <a href="{{ route('books.show', ['book' => $book->id]) }}"
                                            class="btn btn-primary me-md-2">
                                            Visualizza
                                        </a>

                                        <form action="{{ route('books.destroy', ['book' => $book->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger me-md-2">Elimina</button>
                                        </form>
                                    @endauth

                                  
                                </div> --}}
                            </td>
                        </tr>
                    @empty
                    @endforelse

                </tbody>
            </table>
            {{-- {{ $books->links() }} --}}
        </div>


    </div>


</x-main>