@extends('layouts.app')

@section('content')
    <div>
    <div class="container" style="background-color:lightsteelblue;">
    <div class="row profile" >
		@include('parte.leftmenu')
		<div class="col-md-9">
            <div class="profile-content" style="min-height:700px;  margin:15px;">
              <form action="{{ url('mzd/cat/'.$p->id) }}" method="post">
                {{ csrf_field() }}
                     <div class="form-group row">
                        <label for="libelle" class="col-sm-2 col-form-label">Libelle</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="libelle" id="libelle" value="{{ $p->libelle }}">
                        </div>
                      </div>
                        <input type="submit" value="Modifier"  class="form-control btn btn-primary">
                    </div>
               </form>   
            </div>
		</div>
	</div>
</div>
       
    </div>
   


@endsection