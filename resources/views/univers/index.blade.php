@extends('layouts.app')

@section('content')
   <form id="form1" >
    <div>
    <div class="container" style="background-color:lightsteelblue;">
    <div class="row profile" >
		@include('parte.leftmenu')
		<div class="col-md-9">
            <div class="profile-content" style="min-height:700px;  margin:15px;">
            	<img src="{{ url('img/mzd.jpg') }}" style="width: 100%; height: 650px;">
			   
            </div>
		</div>
	</div>
</div>
       
    </div>
    </form>


@endsection