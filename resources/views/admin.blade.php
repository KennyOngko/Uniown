@extends('layouts.layadmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    @if ($message = Session::get('success'))
	  <div class="alert alert-success alert-block">
		<button type="button" class="close" data-dismiss="alert">×</button>	
		  <strong>{{ $message }}</strong>
	  </div>
	@endif
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <center>Admin</center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection