@extends('layouts.admin2')
@section('content')
<div class="container-fluid">
	<div class="row">
        <div class="col-md-12">    
			<div class="card">
    			
        			<div class="card-body">
            			<h4 class="card-title">Supplier</h4>
          			</div>
          	
			  	<form action="{{ route('supplier.store') }}" id="form-wizard" class="form-horizontal" method="post" >
			  		{{ csrf_field() }}


			  		<div class="form-group row {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label for="fname" class="col-sm-3 text-right control-label col-form-label">Nama </label>
			  			<div class="col-sm-8">	
			  			<input type="text" name="nama" id="nama" class="form-control"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			  		<div class="form-group row {{ $errors->has('alamat') ? ' has-error' : '' }}">
			  			<label for="fname" class="col-sm-3 text-right control-label col-form-label">Alamat </label>
			  			<div class="col-sm-8">	
			  			<textarea name="alamat" id="alamat" class="form-control" rows="10" required></textarea>
			  			@if ($errors->has('alamat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alamat') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			  		<div class="form-group row {{ $errors->has('no_telepon') ? ' has-error' : '' }}">
			  			<label for="fname" class="col-sm-3 text-right control-label col-form-label">No Telphone </label>
			  			<div class="col-sm-8">	
			  			<input type="text" name="no_telepon" id="no_telepon" class="form-control "required>
			  			@if ($errors->has('no_telepon'))
                            <span class="help-block">
                                <strong>{{ $errors->first('no_telepon') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			  		<div class="border-top">
                        <div class="card-body">
			  				<button type="reset" class="btn btn-danger"><a href="{{ url()->previous() }}">Back</a></button>
              				<button type="submit" class="btn btn-primary">Save</button>
            			</div>
            		</div>
            	</form>
           
        </div>
    </div>
</div>
</div>

@endsection