<x-main>
<div class="library">
    <form class=" container" method="POST" action="{{route('categories.store')}}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label" >categoria</label>
            <input type="text" name="name" value="{{old('name')}}" class="form-control">
        </div>
      
        
        <button type="submit" class="btn btn-info">Salva

        </button>


    
</div>










</x-main>