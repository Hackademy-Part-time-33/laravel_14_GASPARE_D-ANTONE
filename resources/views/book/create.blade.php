<x-main>
<div class="library">
    <form class=" container" method="POST" action="{{route('store')}}">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label" >Titolo</label>
            <input type="text" name="title" value="{{old('title')}}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Anno</label>
            <input type="text" name="year" value="{{old('year')}}" class="form-control">
        </div>
        <div class="mb-3">
            <select name="author_id" id="" class="form-controller">
                @foreach ($authors as $author )
                <option value="{{ $author->id }}">{{ $author->firstname . ' ' . $author->lastname}}</option>
                    
                @endforeach


            </select>
        </div>
        <div class="mb-3">
          @foreach ( $categories as $category )
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="categories[]"
                value="{{$category->id}}">
                <label for="category_id" class="form-check-label">{{ $category->name}}</label>
                

            </div>
              
          @endforeach
                

            </select>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Immagine</label>
            <input type="text" name="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-info">Salva</button>


    
</div>










</x-main>