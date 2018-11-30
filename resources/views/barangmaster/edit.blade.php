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
			  	<form action="{{ route('barangmaster.update',$barangmaster->id) }}" id="form-wizard" class="form-horizontal" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}


			  		<div class="control-group {{ $errors->has('nama_barang') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama : </label>
			  			<div class="controls">	
			  			<input type="text" name="nama_barang" class="form-control" value="{{ $barangmaster->nama_barang }}"  required>
			  			@if ($errors->has('nama_barang'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_barang') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			  		<div class="control-group {{ $errors->has('jenis_barang') ? ' has-error' : '' }}">
			  			<label class="control-label">Jenis Barang : </label>	
			  			<div class="controls">
			  			<input type="text" name="jenis_barang" class="form-control" value="{{ $barangmaster->jenis_barang }}"  required>
			  			@if ($errors->has('jenis_barang'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jenis_barang') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			  		<div class="control-group {{ $errors->has('satuan') ? ' has-error' : '' }}">
			  			<label class="control-label">Satuan : </label>	
			  			<div class="controls">
			  			<input type="text" name="satuan" class="form-control" value="{{ $barangmaster->satuan }}"  required>
			  			@if ($errors->has('satuan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('satuan') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			  		<div class="control-group {{ $errors->has('quantity') ? ' has-error' : '' }}">
			  			<label class="control-label">Quantity : </label>
			  			<div class="controls">	
			  			<input type="text" name="quantity" class="form-control" value="{{ $barangmaster->quantity }}"  required>
			  			@if ($errors->has('quantity'))
                            <span class="help-block">
                                <strong>{{ $errors->first('quantity') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			  		<div class="control-group {{ $errors->has('harga_barang') ? ' has-error' : '' }}">
			  			<label class="control-label">Harga Barang : </label>
			  			<div class="controls">	
			  			<input type="text" name="harga_barang" class="form-control" value="{{ $barangmaster->harga_barang }}"  required>
			  			@if ($errors->has('harga_barang'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga_barang') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			  		<div class="control-group {{ $errors->has('harga_jual') ? ' has-error' : '' }}">
			  			<label class="control-label">Harga Jual : </label>	
			  			<div class="controls">
			  			<input type="text" name="harga_jual" class="form-control" value="{{ $barangmaster->harga_jual }}"  required>
			  			@if ($errors->has('harga_jual'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga_jual') }}</strong>
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