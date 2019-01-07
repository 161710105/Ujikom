@extends('layouts.admin2')
@section('content')
<div class="container-fluid">
	<div class="row">
        <div class="col-md-12">    
			<div class="card">
    			
        			<div class="card-body">
            			<h4 class="card-title">Customer</h4>
          			</div>
          	
			  	<form action="{{ route('customer.store') }}" id="form-wizard" class="form-horizontal" method="post" >
			  		{{ csrf_field() }}


			  		<div class="form-group row {{ $errors->has('nama_customer') ? ' has-error' : '' }}">
			  			<label for="fname" class="col-sm-3 text-right control-label col-form-label">Nama Customer </label>
			  			<div class="col-sm-8">	
			  			<input type="text" name="id_customer" id="id_customer" class="form-control"  required>
			  			@if ($errors->has('nama_customer'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_customer') }}</strong>
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

			  		<div class="form-group row {{ $errors->has('no_telpon') ? ' has-error' : '' }}">
			  			<label for="fname" class="col-sm-3 text-right control-label col-form-label">No Telphone </label>	
			  			<div class="col-sm-8">
			  			<input type="number" name="no_telpon" id="no_telpon" class="form-control"  required>
			  			@if ($errors->has('no_telpon'))
                            <span class="help-block">
                                <strong>{{ $errors->first('no_telpon') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			  		<div class="form-group row {{ $errors->has('tgl_mulai') ? ' has-error' : '' }}">
			  			<label for="fname" class="col-sm-3 text-right control-label col-form-label">Tanggal Mulai </label>
			  			<div class="col-sm-8">	
			  			<input type="date" name="tgl_mulai" id="tgl_mulai" class="form-control"  required>
			  			@if ($errors->has('tgl_mulai'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_mulai') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			  		<div class="form-group row {{ $errors->has('tgl_akhir') ? ' has-error' : '' }}">
			  			<label for="fname" class="col-sm-3 text-right control-label col-form-label">Tanggal Akhir</label>	
			  			<div class="col-sm-8">
			  			<input type="date" name="tgl_akhir" id="tgl_akhir" class="form-control"  required>
			  			@if ($errors->has('tgl_akhir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_akhir') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			  		
			  				<button type="reset" class="btn btn-danger"><a href="{{ url()->previous() }}">Back</a></button>
              				<button type="submit" class="btn btn-primary">Save</button>
            			
            	</form>
            
        </div>
    </div>
</div>
</div>

@endsection