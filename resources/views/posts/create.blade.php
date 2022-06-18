  @extends('layouts.master');


  @section('title','Create Page',)
      
  

  @section('content')

          
      <div class="container mt-5">

        <div class="card">
            <div class="card-header"><h3>Now Create a post here!</h3>
            </div>
            <div class="card-body">


<form action="/cagethories" method="POST">
    @csrf

   <div class="mb-3">
    <label for="" class="form-lable">Title</label>
    <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" value=" {{ old('title') }}">

    @error('title')

    <div style="color :tomato" class="invalid-feedback"> {{ $message }}</div>

    @enderror
   </div>

 {{-- <div style="color: chocolate">The title field is required</div> --}}

   <div class="mb-3">

<label for="" class="form-label">Body</label>
<textarea class="form-control @error ('body') is-invalid @enderror" rows="5"  name="body" value=" {{ old('title') }}">
        
    </textarea>
    @error('body')
    <div style="color :rgb(226, 43, 119)" class="invalid-feedback"> {{ $message }}</div>
    @enderror
   
    </form>

   <div class="d-flex justify-content-between mt-3">

    <button type="submit" class="btn btn-outline-primary">create</button>
    <a href="/cagethories" class="btn btn-outline-warning">cancle</a>
   </div>
   </div>



      </div>

            </div>
        </div>
        



  @endsection

   

{{-- 
@if($errors->any())
    <ul>
    @foreach ($errors->all() as $error) 
     <li style="color :red"> {{ $error }}</li>
     

    @endforeach
</ul>
@endif --}}




