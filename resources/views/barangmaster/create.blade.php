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
			  	<form action="{{ route('barangmaster.store') }}" id="form-wizard" class="form-horizontal" method="post">
			  		<div id="form-wizard-1" class="step">
			  		{{ csrf_field() }}


			  	
			  		<div class="control-group {{ $errors->has('nama_barang') ? ' has-error' : '' }}">	
			  			<label class="control-label">Produk Name : </label>
			  			<div class="controls">
			  			<input type="text" name="nama_barang" class="tip-left" placeholder="Nama Produk" required>
			  			@if ($errors->has('nama_barang'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_barang') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>


			  		<div class="control-group {{ $errors->has('jenis_barang') ? ' has-error' : '' }}">
			  			<label class="control-label">Jenis Produk : </label>
			  			 <div class="controls">
			  			 	<select class="select2 form-control custom-select" name="jenis_barang" style="width: 100%; height: 36px;">
			  			 		<option>Jenis Barang</option>
			  			 		<option value="1">Sayuran</option>
			  			 		<option value="2">Buah-Buahan</option>
			  			 	</select>
			  			 </div>
			  		</div>
			  	

			  		<div class="control-group {{ $errors->has('satuan') ? ' has-error' : '' }}">
			  			<label class="control-label">Satuan : </label>
			  			 <div class="controls">
			  			 	<select class="select2 form-control custom-select" name="satuan" style="width: 100%; height: 36px;">
			  			 		<option>Satuan</option>
			  			 		<option value="1">Ikat</option>
			  			 		<option value="2">Kilogram</option>
			  			 	</select>
			  			 </div>
			  		</div>

			  		<div class="control-group {{ $errors->has('quantity') ? ' has-error' : '' }}">
			  			<label class="control-label">Quantity : </label>
			  			<div class="controls">	
			  			<input type="text" name="quantity" class="form-control" placeholder="Quantity" required>
			  			@if ($errors->has('quantity'))
                            <span class="help-block">
                                <strong>{{ $errors->first('quantity') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			  		<div class="control-group {{ $errors->has('harga_barang') ? ' has-error' : '' }}">
			  			<label class="control-label">Harga Produk : </label>
			  			<div class="controls">	
			  			<input type="text" name="harga_barang" class="form-control" placeholder="Harga Pasar" required>
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
			  			<input type="text" name="harga_jual" class="form-control" placeholder="Harga Jual" required>
			  			@if ($errors->has('harga_jual'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga_jual') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			  		<div class="form-actions">
			  			<button type="reset" class="btn btn-danger"><a href="{{ url()->previous() }}">Back</a></button>
              			<button type="submit" class="btn btn-primary">Save</button>
            		</div>
			  	</div>
			  </form>
			</div>
		</div>
	</div>
</div>
</div>

@endsection