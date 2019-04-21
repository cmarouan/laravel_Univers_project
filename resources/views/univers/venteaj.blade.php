@extends('layouts.app')

@section('content')
    <div>
    <div class="container" style="background-color:lightsteelblue;">
    <div class="row profile" >
		@include('parte.leftmenu')
		<div class="col-md-9">
            <div class="profile-content" style="min-height:700px;  margin:15px;">
              @if(session()->has('session1'))
                  <div class="alert alert-warning" role="alert">
                        {{ session()->get('session1') }}
                  </div>
              @endif
                <center><h2 style="font-family: fantasy;color: #17a2b8;">Faire une vente</h2></center><br>


                <table class="table" style="font-size: 11px;">
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
                            <form  action="{{ url('mzd/fiarevente/'.$p->id) }}" method="post" enctype="multipart/form-data">
                              Qte V : <input type="text" style="width: 50px;" name="qtev" id="qtev"> 
                            {{ csrf_field() }}
                             <input type="submit" style="width: 56px; font-size: 10px;" class="btn btn-success" />
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