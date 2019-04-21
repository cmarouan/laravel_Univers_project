@extends('layouts.app')

@section('content')
   
    <div>
    <div class="container" style="background-color:lightsteelblue;">
    <div class="row profile" >
		@include('parte.leftmenu')
		<div class="col-md-9">
            <div class="profile-content" style="min-height:700px;  margin:15px;">
               <form  action="{{url('mzd')}}" method="post" enctype="multipart/form-data">
                   {{ csrf_field() }}
                     <div class="form-group row">
                        <label for="libelle" class="col-sm-2 col-form-label">Libelle</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="libelle" id="libelle" placeholder="Libelle ( hp elitebook - souris - clavier ... )">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="qte" class="col-sm-2 col-form-label">Quantite</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="qte" id="qte" placeholder="Quantite">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="cat" class="col-sm-2 col-form-label">Categorie</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="cat" id="cat" placeholder="1:Phone - 2:PC - 3:Accessoire - 4:Reparation">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="prix" class="col-sm-2 col-form-label">Prix unitaire</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="prix" id="prix" placeholder="Prix unitaire">
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