<x-main>
    <div class="library">
        <ul class=" ms-auto">
            <a href="{{ route('categories.create')}}" class="btn btn-info" >Inserisci</a>
           
    </div>
    
    
    
    </div class="container">
    
    <div class="rounded-3 py-5 px-4 px-md-5 mb-5">
      
      <div class="text-center container">
              <h1>Elenco Categorie presenti</h1>
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
                            <th scope="col">Categorie</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $category)
                            <tr>
                                <th scope="row">#{{ $category->id }}</th>
                                <td>{{ $category->name }}</td>
                                
                                <td>
                                    {{-- <img class="card-img-top" style="width:3rem"
                                        src="{{ $book->image ? Storage::url($book->image) : '/template/assets/aulab-logo.svg' }}"
                                        alt="..." /> --}}
                                </td>
                                <td>
    
                                   <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                      
                                            <a href=""
                                                class="btn btn-warning me-md-2 ">
                                                Modifica
                                            </a>
                                            <a href=""
                                                class="btn btn-primary me-md-2">
                                                Visualizza
                                            </a>
    
                                            <form action="{{ route('categories.destroy', ['category' => $category->id])}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger me-md-2">Elimina</button>
                                            </form>
                                      
    
                                      
                                    </div> 
                                </td>
                            </tr>
                        @empty
                        @endforelse
    
                    </tbody>
                </table>
                {{ $categories->links() }}
            </div>
    
    
        </div>
    
    
    </x-main>