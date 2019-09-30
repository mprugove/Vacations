@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Movies</div>

                <table class="table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Year</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($movies as $movie)
                            <tr>
                                <td>{{$movie->title}}</td>
                                <td>{{$movie->categories->name}}</td>
                                <td><a href="movies/edit/{{$movie->id}}">Uredi</a></td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</div>
@endsection
