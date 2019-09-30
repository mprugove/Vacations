@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark display-4 text-white">{{$AppTitle}}</div>
                <table class="table table-dark table-hover table-borderles table-sm">
                   
                    <thead>
                        <tr>
                            <th>rbr</th>
                            <th>Title</th>
                            <th>Country</th>
                            <th>Date of arrival</th>
                            <th>Departure date</th>
                            <th>Price</th>
                            <th>Select</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($vacations as $key => $putovanje)
                            <tr>
                                <td class="font-weight-bold"> {{ $loop->iteration }}. </td>
                                <td> <a href="#"> {{ $putovanje->naziv }} </a> </td>
                                <td> {{ $putovanje->locations->drzava }}</td>
                                <td> {{ $putovanje->datumPolazak }} </td>
                                <td> {{ $putovanje->datumPovratak }} </td>
                                <td> {{ $putovanje->cijena }} </td>
                                <td>
                                    <input type="checkbox">
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection