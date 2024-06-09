<x-main>
<div class="library">
    <ul class=" ms-auto">
        <a href="{{ route('authors.create')}}" class="btn btn-info" >Inserisci</a>
       
</div>



</div class="container">

<div class="rounded-3 py-5 px-4 px-md-5 mb-5">
  
  <div class="text-center container">
          <h1>Elenco autori presenti</h1>
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
                        <th scope="col">Autore</th>
                        <th scope="col">cognome</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @forelse ($authors as $author)
                        <tr>
                            <th scope="row">#{{ $author->id }}</th>
                            <td>{{ $author->firstname }}</td>
                            <td>{{ $author->lastname }}</td>
                            <td>
                                {{-- <img class="card-img-top" style="width:3rem"
                                    src="{{ $book->image ? Storage::url($book->image) : '/template/assets/aulab-logo.svg' }}"
                                    alt="..." /> --}}
                            </td>
                            <td>

                               <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="{{ route('authors.show', ['author' => $author->id])}}"
                                    class="btn btn-primary me-md-2">
                                    Visualizza
                                </a>
                                  
                                        {{-- <a href="{{ route('book.edit', ['book' => $book->id]) }}"
                                            class="btn btn-warning me-md-2 ">
                                            Modifica
                                        </a>
                                        <a href="{{ route('book.show', ['book' => $book->id])}}"
                                            class="btn btn-primary me-md-2">
                                            Visualizza
                                        </a>

                                        <form action="{{ route('book.destroy', ['book' => $book->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger me-md-2">Elimina</button>
                                        </form>
                                   --}}

                                  
                                </div> 
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