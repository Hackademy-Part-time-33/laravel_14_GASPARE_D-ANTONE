<x-main>
    <div class="container mt-5 ">
        <div class="row g-5">
            <div class="col-md-12 library">
                <div class="pb-5 ">
                    <h1 class="text-black">
                        {{$book->title}}
                    </h1>
                    <div>
                        <ul>
                            <li>
                               

                                <p class="text-black">Anno libro:{{$book->year ?? 'ignoto'}}</p>
                            </li>
                        </ul>
                            
                       
                         
                    </div>
                </div>
    
            </div>
    
        </div>
    
     </div>







</x-main>