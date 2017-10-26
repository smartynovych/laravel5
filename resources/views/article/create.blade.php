@extends ('layout')

@section ('content')

    <h2>Create new article</h2>
@if (count($errors))
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form name="article" method="POST" action="/article" class="form">
        {{ csrf_field() }}

        <div class="form-group">
            <label class="form-control-label required" for="name">Name</label>
            <input type=text" name="name" value="" class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
        Description<textarea name="description" class="form-control" placeholder="Description"></textarea>
        </div>
        <input type="submit" name="Publish" value="Publish" class="btn btn-primary">
    </form>
@endsection
