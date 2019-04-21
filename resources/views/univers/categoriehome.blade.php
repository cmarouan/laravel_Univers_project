@extends('layouts.app')

@section('content')
    <div>
    <div class="container" style="background-color:lightsteelblue;">
    <div class="row profile" >
		@include('parte.leftmenu')
		<div class="col-md-9">

            <div class="profile-content" style="min-height:700px;  margin:15px;">
              <center><h2 style="font-family: fantasy;color: #17a2b8;">Liste des categories</h2></center><br>
              @if(session()->has('session1'))
                  <div class="alert alert-primary" role="alert">
                        {{ session()->get('session1') }}
                  </div>
              @endif
               <a href="{{ url('mzd/categorieformaj') }}" class="btn btn-outline-success">+</a><br><br>
                <table class="table">
                   <thead>
                     <tr>
                       <th scope="col">#</th>
                       <th scope="col">Libelle</th>
                       <th  scope="col">Traitement</th>
                       
                     </tr>
                   </thead>
                    <tbody>
                      @foreach($pro as $p)
                           <tr>
                          <td>{{ $p->id }}</td>
                          <td>{{ $p->libelle }}</td>
                          <td>
                                
                                   <a href="{{ url('mzd/editcat/'.$p->id) }}" class="btn btn-warning">Modifier</a>
                                   
                              
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