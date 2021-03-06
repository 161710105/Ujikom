@extends('layouts.admin2')
@section('content')
<div class="container-fluid">
	<div class="row">
        <div class="col-md-12">    
			<div class="card">
    			<form class="form-horizontal">
        			<div class="card-body">
            			<h4 class="card-title">Customer</h4>
          			</div>
          

			  	<form action="{{ route('customer.update',$customer->id) }}" id="form-wizard" class="form-horizontal" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}


			  		<div class="form-group row {{ $errors->has('nama_customer') ? ' has-error' : '' }}">
			  			<label for="fname" class="col-sm-3 text-right control-label col-form-label">Nama Customer </label>
			  			<div class="col-sm-8">	
			  			<input type="text" name="nama_customer" class="form-control" value="{{ $customer->nama_customer }}"  required>
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
			  			<input type="text" name="alamat" class="form-control" value="{{ $customer->alamat }}"  required>
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
			  			<input type="number" name="no_telpon" class="form-control" value="{{ $customer->no_telpon }}"  required>
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
			  			<input type="date" name="tgl_mulai" class="form-control" value="{{ $customer->tgl_mulai }}"  required>
			  			@if ($errors->has('tgl_mulai'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_mulai') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			  		<div class="form-group row {{ $errors->has('tgl_akhir') ? ' has-error' : '' }}">
			  			<label for="fname" class="col-sm-3 text-right control-label col-form-label">Tanggal Akhir </label>
			  			<div class="col-sm-8">	
			  			<input type="date" name="tgl_akhir" class="form-control" value="{{ $customer->tgl_akhir }}"  required>
			  			@if ($errors->has('tgl_akhir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_akhir') }}</strong>
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