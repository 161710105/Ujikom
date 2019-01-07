@extends('layouts.admin2')
@section('content')
<div class="container-fluid">
	<div class="row">
        <div class="col-md-12">    
			<div class="card">
    			<form class="form-horizontal">
        			<div class="card-body">
            			<h4 class="card-title">Supplier</h4>
          			</div>
         

			  	<form action="{{ route('supplier.update',$supplier->id) }}" id="form-wizard" class="form-horizontal" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}


			  		<div class="form-group row {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label for="fname" class="col-sm-3 text-right control-label col-form-label">Nama </label>
			  			<div class="col-sm-8">	
			  			<input type="text" name="nama" class="form-control" value="{{ $supplier->nama }}"  required>
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
			  			<input type="text" name="alamat" class="form-control" value="{{ $supplier->alamat }}"  required>
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
			  			<input type="number" name="no_telepon" class="form-control" value="{{ $supplier->no_telepon }}"  required>
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
              				<button type="submit" class="btn btn-success">Update</button>
            			</div>
            		</div>
            	</form>
            </form>
        </div>
    </div>
</div>
</div>

@endsection