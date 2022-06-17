

<h2>Create a New Post</h2>

<form action="/cagethory/store" method="POST">
    @csrf
    <label for="">Title</label>
    <input type="text" name="title"><br><br>


    <label for="">Body</label>
    <textarea name="body"></textarea><br><br>


    <button type="submit">Create</button>




</form>