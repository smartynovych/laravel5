@extends ('layout')

@section ('content')

    <div class="row">
        <div class="col">
            <div class="alert alert-light">
                <h1>Laravel tasks</h1>
            </div>
        </div>
        <div class="col">
            <div class="alert alert-light">
                <p class="text-md-right"> <a href="">Home</a></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Exercise name</th>
                    <th>Description</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>CRUD on Laravel</td>
                    <td></td>
                    <td><a href="/article/">View</a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection