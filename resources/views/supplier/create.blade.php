@extends('layouts.admin')
@section('content')
<div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
            <h5>Add Produk</h5>
          </div>
          	<div class="widget-content nopadding">
			  	<form action="{{ route('supplier.store') }}" id="form-wizard" class="form-horizontal" method="post" >
			  		{{ csrf_field() }}


			  		<div class="control-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama :</label>
			  			<div class="controls">	
			  			<input type="text" name="nama" class="form-control"  required>
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
			  			<textarea name="alamat" class="form-control" rows="10" required></textarea>
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
			  			<input type="number" name="no_telepon" class="form-control"  required>
			  			@if ($errors->has('no_telepon'))
                            <span class="help-block">
                                <strong>{{ $errors->first('no_telepon') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			  		<div class="form-actions">
			  			<button type="reset" class="btn btn-danger"><a href="{{ url()->previous() }}">Back</a></button>
              			<button type="submit" class="btn btn-primary">Save</button>
            		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection