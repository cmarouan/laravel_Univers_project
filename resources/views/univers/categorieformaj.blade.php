@extends('layouts.app')

@section('content')
   
    <div>
    <div class="container" style="background-color:lightsteelblue;">
    <div class="row profile" >
		@include('parte.leftmenu')
		<div class="col-md-9">
            <div class="profile-content" style="min-height:700px;  margin:15px;">
               
              <center><h2 style="font-family: fantasy;color: #17a2b8;">Ajoute categorie</h2></center><br>
               <form  action="{{ url('/categorieaffectajt') }}" method="post" enctype="multipart/form-data">
                   {{ csrf_field() }}
                     <div class="form-group row">
                        <label for="libelle" class="col-sm-2 col-form-label">Libelle</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="libelle" id="libelle" placeholder="Nom categorie">
                        </div>
                      </div>
                      <div class="form-group" >
                        <input type="submit" value="Enregistrer"  class="form-control btn btn-primary">
                    </div>
                      
                </form>
            </div>
            
		</div>
	</div>
</div>
       
    </div>
    


@endsection