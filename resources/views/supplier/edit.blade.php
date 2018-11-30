@extends('layouts.admin')
@section('content')
<div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
            <h5>Edit Produk</h5>
          </div>
          <div class="widget-content nopadding">

			  	<form action="{{ route('supplier.update',$supplier->id) }}" id="form-wizard" class="form-horizontal" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}


			  		<div class="control-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama :</label>
			  			<div class="controls">	
			  			<input type="text" name="nama" class="form-control" value="{{ $supplier->nama }}"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			  		<div class="control-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
			  			<label class="control-label">Alamat :</label>
			  			<div class="controls">	
			  			<input type="text" name="alamat" class="form-control" value="{{ $supplier->alamat }}"  required>
			  			@if ($errors->has('alamat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alamat') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			  		<div class="control-group {{ $errors->has('no_telepon') ? ' has-error' : '' }}">
			  			<label class="control-label">No Telphone :</label>
			  			<div class="controls">	
			  			<input type="number" name="no_telepon" class="form-control" value="{{ $supplier->no_telepon }}"  required>
			  			@if ($errors->has('no_telepon'))
                            <span class="help-block">
                                <strong>{{ $errors->first('no_telepon') }}</strong>
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