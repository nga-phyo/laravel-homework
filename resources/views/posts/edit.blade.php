

  @extends('layouts.master')


  @section('title','Edit Page')

  @section('content')



          
  <div class="container">

    <div class="card-header"> <h3>Now Edit a new POst</h3></div>

    <div class="card-body">


    <form action="/cagethories/{{ $cagethory->id }}" method="post">
        @csrf
        @method('PUT')
    <label for="">Title</label>
    <input type="text" name="title" value=" {{ $cagethory->title }}">
    @error('title')
    
    <div style="color: darkgreen">{{ $message }}</div>
    
    @enderror
    <br><br>

  <label for="">Body</label>
  <textarea name="body">
      {{ $cagethory->body }}
  </textarea>
  @error('body')
  
  <div style="color :fuchsia">{{ $message }}</div>
  
  @enderror
  <br><br>
 
  
  <button type="submit" class="btn btn-outline-primary">edit</button>
  <a href="/cagethories" class="btn btn-outline-warning">cancle</a>
  
  </form>
 


    </div>

  </div>




  @endsection
      

      {{-- @if($errors->any())
      
      <ul>
          @foreach($errors->all() as $error){
      
              <li style="color :darkgreen">{{ $error }}</li>
          }
      
      </ul>
      
      @endif --}}
      
      

           
        
          






