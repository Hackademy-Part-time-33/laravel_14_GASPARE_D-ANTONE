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
            <label for="image" class="form-label">Immagine</label>
            <input type="text" name="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-info">Salva</button>


    
</div>










</x-main>