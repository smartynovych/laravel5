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
    <form name="article" method="POST" action="/article/update/{{ $article->id }}" class="form">
        <input type="hidden" name="_method" value="PATCH" />
        {{ csrf_field() }}

        <div class="form-group">
            <label class="form-control-label required" for="name">Name</label>
            <input type=text" name="name" value="{{ $article->name }}" class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
        Description<textarea name="description" class="form-control" placeholder="Description">{{ $article->description }}</textarea>
        </div>
        <div class="form-group">
            <label class="form-control-label required" for="created_at">Date Create</label>
            <input type="datetime-local" name="created_at" value="{{ $article->created_at->format('Y-m-d') }}T{{ $article->created_at->format('H:i:s') }}" class="form-control">
        </div>
        <input type="submit" name="Update" value="Update" class="btn btn-primary">
    </form>
@endsection
