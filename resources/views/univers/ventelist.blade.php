@extends('layouts.app')

@section('content')
    <div>
    <div class="container" style="background-color:lightsteelblue;">
    <div class="row profile" >
		@include('parte.leftmenu')
		<div class="col-md-9">
            <div class="profile-content" style="min-height:700px;  margin:15px;">
              @if(session()->has('session1'))
                  <div class="alert alert-primary" role="alert">
                        {{ session()->get('session1') }}
                  </div>
              @endif
              <center><h2 style="font-family: fantasy;color: #17a2b8;">Liste des ventes</h2></center><br>
                <table class="table">
                   <thead>
                     <tr>
                       <th scope="col">#</th>
                       <th scope="col">Produit</th>
                       <th scope="col">Quantite V</th>
                       <th scope="col">Prix Unitaire</th>
                       <th scope="col">Prix Total</th>
                       <th scope="col">Date</th>
                     </tr>
                   </thead>
                    <tbody>
                      @foreach($pro as $p)
                           <tr>
                          <td>{{ $p->id }}</td>
                          <td>{{ $p->Produit->libelle }}</td>
                          <td>{{ $p->qteV }}</td>
                          <td>{{ $p->Produit->prixU }}</td>
                          <td>{{ $p->prixT }}</td>
                          <td>{{ $p->created_at }}</td>
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