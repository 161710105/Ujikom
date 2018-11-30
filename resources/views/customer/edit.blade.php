@extends('layouts.admin')
@section('content')
<div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
            <h5>Edit Customer</h5>
          </div>
          <div class="widget-content nopadding">

			  	<form action="{{ route('customer.update',$customer->id) }}" id="form-wizard" class="form-horizontal" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}


			  		<div class="control-group {{ $errors->has('nama_customer') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Customer :</label>
			  			<div class="controls">	
			  			<input type="text" name="nama_customer" class="form-control" value="{{ $customer->nama_customer }}"  required>
			  			@if ($errors->has('nama_customer'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_customer') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			  		<div class="control-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
			  			<label class="control-label">Alamat :</label>
			  			<div class="controls">	
			  			<input type="text" name="alamat" class="form-control" value="{{ $customer->alamat }}"  required>
			  			@if ($errors->has('alamat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alamat') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			  		<div class="control-group {{ $errors->has('no_telpon') ? ' has-error' : '' }}">
			  			<label class="control-label">No Telphone :</label>
			  			<div class="controls">	
			  			<input type="number" name="no_telpon" class="form-control" value="{{ $customer->no_telpon }}"  required>
			  			@if ($errors->has('no_telpon'))
                            <span class="help-block">
                                <strong>{{ $errors->first('no_telpon') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			  		<div class="control-group {{ $errors->has('tgl_mulai') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Mulai :</label>
			  			<div class="controls">	
			  			<input type="date" name="tgl_mulai" class="form-control" value="{{ $customer->tgl_mulai }}"  required>
			  			@if ($errors->has('tgl_mulai'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_mulai') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			  		<div class="control-group {{ $errors->has('tgl_akhir') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Akhir :</label>
			  			<div class="controls">	
			  			<input type="date" name="tgl_akhir" class="form-control" value="{{ $customer->tgl_akhir }}"  required>
			  			@if ($errors->has('tgl_akhir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_akhir') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			  		<div class="form-actions">
			  			<button type="reset" class="btn btn-danger"><a href="{{ url()->previous() }}">Back</a></button>
              			<button type="submit" class="btn btn-success">Update</button>
            		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection