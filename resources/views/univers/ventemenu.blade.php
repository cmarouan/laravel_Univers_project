@extends('layouts.app')

@section('content')
    <div>
    <div class="container" style="background-color:lightsteelblue;">
    <div class="row profile" >
		@include('parte.leftmenu')
		<div class="col-md-9">
            <div class="profile-content" style="min-height:700px;  margin:15px;">
                  <center>
                      <div id="ventemenu">
                      <a href="{{ url('mzd/ventelist') }}" style="margin-bottom: -432px; width: 53%;" class="btn btn-outline-primary">Liste de vente</a> 
                      <br>
                      <a href="{{ url('mzd/venteaj') }}" style="margin-top: 240px;width: 53%;" class="btn btn-outline-primary">Faire Vente</a>
                      </div>
                  </center>
		        </div>
	  </div>
    </div>
       
    </div>
   


@endsection