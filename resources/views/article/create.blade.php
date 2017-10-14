@extends ('layout')

@section ('content')

    <h2>Create new article</h2>

<form method="POST" action="/article/store" class="form">
    {{ csrf_field() }}

    <form name="article" method="post">
    <div class="form-group">
        <label class="form-control-label required" for="name">Name</label>
        <input type=text" name="name" value="" class="form-control">
    </div>
    <div class="form-group">
    Description<textarea name="description" class="form-control">
    </textarea>
    </div>
    <input type="submit" name="Publish">

</form>

@endsection
