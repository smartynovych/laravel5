@extends ('layout')

@section ('content')

    <div class="col">
    <h2>{{ $article->name }}</h2>

    <span>{{ $article->created_at->format('d.m.Y H:i') }}</span>

    <p class="text-md-left">{{ $article->description }}</p>
    </div>

    <hr>

    <div class="comments">
        <ul class="list-group">
        @foreach($article->comments as $comment)
            <li class="list-group-item">
                <strong>
                    {{ $comment->created_at->diffForHumans() }}
                </strong>
                {{ $comment->body }}
            </li>
         @endforeach
        </ul>
    </div>

    <hr>

    <div class="card">
        <div class="card-body">
            @if (count($errors))
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" class="form" action="/article/{{ $article->id }}/comments">
                {{ csrf_field() }}
                <div class="form-group">
                    <textarea name="body" placeholder="Your comment text" class="form-control">

                    </textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Comment</button>
                </div>
            </form>
        </div>
    </div>

    <br>
    <br>
    <a href="/article/" class="btn btn-primary">Back to the article list</a>

@endsection
