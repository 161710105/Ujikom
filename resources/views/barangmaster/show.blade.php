@extends('layouts.admin')
@section('content')
<div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-eye-open"></i> </span>
            <h5>Show Produk</h5>
            	<div class="panel-title pull-right"><a href="{{ url()->previous() }}" class="btn btn-danger"><i class="icon-remove"></i></a></div>
          </div>
          <div class="widget-content nopadding">
          	<form id="form-wizard" class="form-horizontal">

        			<div class="control-group">
			  			<label class="control-label">Nama Produk : </label>
			  			<div class="controls">	
			  			<input type="text" name="nama_barang" class="form-control" value="{{ $barangmaster->nama_barang}}"  readonly>
			  		</div>
			  	</div>

			  		<div class="control-group">
			  			<label class="control-label">Jenis Barang : </label>
			  			<div class="controls">	
			  			<input type="text" name="jenis_barang" class="form-control" value="{{ $barangmaster->jenis_barang}}"  readonly>
			  		</div>
			  	</div>

			  		<div class="control-group">
			  			<label class="control-label">Satuan : </label>	
			  			<div class="controls">
			  			<input type="text" name="satuan" class="form-control" value="{{ $barangmaster->satuan}}"  readonly>
			  		</div>
			  	</div>

			  		<div class="control-group">
			  			<label class="control-label">Quantity : </label>
			  			<div class="controls">	
			  			<input type="text" name="quantity" class="form-control" value="{{ $barangmaster->quantity }}"  readonly>
			  		</div>
			  	</div>

			  		<div class="control-group">
			  			<label class="control-label">Harga Produk : </label>
			  			<div class="controls">	
			  			<input type="text" name="harga_barang" class="form-control" value="{{ $barangmaster->harga_barang}}"  readonly>
			  		</div>
			  	</div>

			  		<div class="control-group">
			  			<label class="control-label">Harga Jual</label>	
			  			<div class="controls">
			  			<input type="text" name="harga_jual" class="form-control" value="{{ $barangmaster->harga_jual}}"  readonly>
			  		</div>
			  	</div>
			  	</form>
			  </div>
			</div>
		</div>
	</div>
</div>
@endsection