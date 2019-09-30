@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card px-5 py-2 bg-info">
              <h4 class="font-weight-bold">Create new Vacation</h4>

            @if(session()->has('message')) 
                <div class="alert alert-success"> 
                    {{ session()->get('message') }} 
                </div> 
            @endif 
                
                <form method="POST" action="store" class="form-group">
                    @csrf
                   
                   <select name="lokacijaId" class="form-control" >
                    @foreach($locations as $lokacija)
                       <option class="bg-white font-weight-bold" value="{{$lokacija->idLokacije}}">{{$lokacija->drzava}}</option>
                    @endforeach
                   </select>
                   <label class="font-weight-bold">Place</label>
                   <select name="mjesto" class="form-control">
                   @foreach($locations as $lokacija)
                       <option class="bg-white font-weight-bold" value="{{$lokacija->idLokacije}}">{{$lokacija->mjesto}}</option>
                    @endforeach
                   </select>
                   
                   <label class="font-weight-bold">Title</label>
                      <input type="text" name="naziv" class="form-control" placeholder="Title">

                   <label class="font-weight-bold">Price</label> 
                      <input type="text" name="cijena" class="form-control" placeholder="Price">

                   <label class="font-weight-bold">Date of departure</label>
                      <input type="date" name="datumPolazak" class="form-control" placeholder="Date of Departure">

                   <label class="font-weight-bold">Date Arrival</label>
                      <input type="date" name="datumPovratak" class="form-control" placeholder="Date Arrival">

                   <label class="font-weight-bold">Availability</label>
                      <input type="text" name="raspolozivost" class="form-control" placeholder="Availability">

                    
                      <br/> <br/>
                    <input type="submit" class="btn btn-white col-md-2" value="Submit">
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
</div>
@endsection