@extends('layouts.app')

@section('content')
    <div>
    <div class="container" style="background-color:lightsteelblue;">
    <div class="row profile" >
		@include('parte.leftmenu')
		<div class="col-md-9">
            <div class="profile-content" style="min-height:700px;  margin:15px;">
               <a href="{{ url('mzd/formproduitaj') }}" class="btn btn-outline-success">+</a><br><br>
                <table class="table">
                   <thead>
                     <tr>
                       <th scope="col">#</th>
                       <th scope="col">Libelle</th>
                       <th scope="col">Quantite reste</th>
                       <th scope="col">Categorie</th>
                       <th scope="col">Prix Unitaire</th>
                       <th  scope="col">Traitement</th>
                       
                     </tr>
                   </thead>
                    <tbody>
                      @foreach($pro as $p)
                           <tr>
                          <td>{{ $p->id }}</td>
                          <td>{{ $p->libelle }}</td>
                          <td>{{ $p->qteR }}</td>
                          <td>{{ $p->Categorie->libelle }}</td>
                          <td>{{ $p->prixU }}</td>
                          
                          <td>
                                <form action="{{ url('mzd/'.$p->id) }}" method="post">
                                   {{ csrf_field() }}
                                   {{ method_field('DELETE') }}
                                   <a href="{{ url('mzd/'.$p->id.'/edit') }}" class="btn btn-warning">Modifier</a>
                                   <button type="submit" class="btn btn-danger">Supprimer</button>
                                </form>
                          </td>
                          </tr>
                      @endforeach
                   </tbody>
                  </table>
            </div>

            
		</div>
	</div>
</div>
       
    </div>
   


@endsection