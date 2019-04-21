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

              <center><h2 style="font-family: fantasy;color: #17a2b8;">Liste des societes</h2></center><br>
              <a href="{{ url('mzd/societeajt') }}" class="btn btn-outline-primary">+</a><br><br>
                <table class="table">
                   <thead>
                     <tr>
                       <th scope="col">#</th>
                       <th scope="col">Nom ste</th>
                       <th scope="col">Adresse</th>
                       <th scope="col">Telephone</th>
                       <th scope="col">Modifier</th>
                     </tr>
                   </thead>
                    <tbody>
                      @foreach($pro as $p)
                           <tr>
                          <td>{{ $p->id }}</td>
                          <td>{{ $p->nomsociete }}</td>
                          <td>{{ $p->adresse }}</td>
                          <td>{{ $p->tele }}</td>
                          <td>
                                   <a href="{{ url('mzd/editste/'. $p->id) }}" class="btn btn-warning">Modifier</a>
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