@extends('layouts.app')

@section('content')
   
    <div>
    <div class="container" style="background-color:lightsteelblue;">
    <div class="row profile" >
		@include('parte.leftmenu')
		<div class="col-md-9">
            <div class="profile-content" style="min-height:700px;  margin:15px;">
              <center><h2 style="font-family: fantasy;color: #17a2b8;">Modifier une societe</h2></center><br>
               <form  action="{{url('mzd/updateste/'. $p->id)}}" method="post" enctype="multipart/form-data">
                   {{ csrf_field() }}
                     <div class="form-group row">
                        <label for="nm" class="col-sm-2 col-form-label">Societe</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="nm" id="nm" placeholder="Nom de societe" value="{{ $p->nomsociete }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="adresse" class="col-sm-2 col-form-label">Adresse</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="adresse" placeholder="Adresse" value="{{ $p->adresse }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="tel" class="col-sm-2 col-form-label">Telephone</label>
                        <div class="col-sm-10">
                          <input type="tel" class="form-control" name="tel"  placeholder="0XXXXXXXXX" value="{{ $p->tele }}">
                        </div>
                      </div>
                      <div class="form-group" >
                        <input type="submit" value="Modifier"  class="form-control btn btn-primary">
                    </div>
                      
                </form>
            </div>
            
		</div>
	</div>
</div>
       
    </div>
    


@endsection