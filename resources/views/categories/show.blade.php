<x-main>
    <div class="container mt-5 ">
        <div class="row g-5">
            <div class="col-md-12 library">
                <div class="pb-5 ">
                    <h1 class="text-black">
                        {{$author->firstname}} {{$author->lastname}}
                    </h1>
                    <div>
                        <ul>
                            @foreach ($author->books as $book )
                            <li>
                               {{ $book->title}}

                            </li>
                                
                            @endforeach
                        </ul>
                            
                       
                         
                    </div>
                </div>
    
            </div>
    
        </div>
    
     </div>







</x-main>