@extends ('layout')

@section ('content')

    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Date</th>
            <th>Operation</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($article as $element)
        <tr>
            <td>{{ $element->id }}</td>
            <td>{{ $element->name }}</td>
            <td>{{ $element->description }}
            <td>{{ $element->created_at->format('d.m.Y H:i') }}</td>
            </td>
            <td></td>
            <td>
                <a href="/article/detail/{{ $element->id }}">Detail</a>
                | <a href="">Update</a>
                | <a href="">Delete</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <a href="/article/create/" class="btn btn-primary">Create new article</a>

@endsection
