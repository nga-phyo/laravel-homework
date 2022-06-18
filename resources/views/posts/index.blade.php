
      @extends('layouts.master')

      @section('title')
       Home Page
       @endsection



          
      @section('content')

      <h3>Show All Data </h3>
     
      
      <div class="container mt-5">
            
          @foreach($cagethory as $cagethory)
          <div>
                <h4> <a href="/cagethories/{{ $cagethory->id }}">{{ $cagethory->title }}</a></h4>
                24/july/2022/ 4:30:2
                <p> {{ $cagethory->body }}</p>
      
       
                <div class="d-flex justify-content-end">
                  <a href="/cagethories/{{ $cagethory->id }}/edit" class="btn btn-outline-success">Edit</a>
      
                  <form action="/cagethories/{{ $cagethory->id }}" method="POST">
          
                      @csrf
                      @method('DELETE')
          
                      <button type="submit" onclick="return confirm('are you sure')" class="btn btn-outline-danger ms-2">Delete</button>
                  
                  </form>
                </div>
           
              
         
      
      
            </div>
            <hr>
            
            @endforeach
      </div> 
      
         
            


      @endsection
      
      
   