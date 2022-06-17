
<h1>Do YOu remember your laravel code</h1>


<a href="cagethory/create">Create a new Post</a>

<ol>

    @foreach ($cagethory as $cagethory)
         <a href="cagethory/show/{{ $cagethory->id }}"><li> {{ $cagethory->title }}</li></a>

         [<a href="cagethory/update/{{ $cagethory->id }}">Edit</a>]
         [<a href="">Delete</a>]
         <br><br>
    @endforeach
</ol>