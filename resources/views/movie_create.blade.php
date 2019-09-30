@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add movie</div>
                <form method="POST" action="store">

                	<div class="form-group">
                		<label>Title</label>
                		<input type="text" name="title" class="form-control">
                	</div>
                	<div class="form-group">
                		
                		<input type="submit" name="Save" class="form-control">
                		<input type="hidden" name="_token" value="{{ csrf_token() }}">
                	</div>
                </form>
                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            </div>
        </div>
    </div>
</div>
@endsection
