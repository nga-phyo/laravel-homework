



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg bg-light">


        <div class="container">
          <a class="navbar-brand" href="#">Blog</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cagethories/create">Create A Post</a>
              </li>
              {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul> 
              </li> --}}
              
              
            </ul>
            
          </div>
        </div>
        
      </nav>
      
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
        

     

   
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>







{{-- 
@if($errors->any())
    <ul>
    @foreach ($errors->all() as $error) 
     <li style="color :red"> {{ $error }}</li>
     

    @endforeach
</ul>
@endif --}}




