<x-main>
<div class="library">
    <form class=" container" method="POST" action="{{route('authors.store')}}">
        @csrf
        <div class="mb-3">
            <label for="firstname" class="form-label" >FirstName</label>
            <input type="text" name="firstname" value="{{old('firstname')}}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">SecondName</label>
            <input type="text" name="lastname" value="{{old('lastname')}}" class="form-control">
        </div>
        
        <button type="submit" class="btn btn-info">Salva</button>


    
</div>










</x-main>