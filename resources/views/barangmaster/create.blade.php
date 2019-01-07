@extends('layouts.admin2')
@section('content')

<div class="container-fluid">
	<div class="row">
        <div class="col-md-12">    
			<div class="card">
        			<div class="card-body">
            			<h4 class="card-title"><i class="fas fa-plus">Add Produk</i></h4>
          			</div>
          
			  	<form action="{{ route('barangmaster.store') }}" id="form-wizard" class="form-horizontal" method="post" enctype="multipart/form-data">
			  		{{ csrf_field() }}


			  	
			  		<div class="form-group row {{ $errors->has('nama_barang') ? ' has-error' : '' }}">	
			  			<label for="fname" class="col-sm-3 text-right control-label col-form-label">Produk Name  </label>
			  			<div class="col-sm-8">
			  			<input type="text" name="nama_barang" id="produk" class="form-control" placeholder="Nama Produk" id="fname" required>
			  			@if ($errors->has('nama_barang'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_barang') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

                <div class="form-group row {{ $errors->has('jenis_barang') ? ' has-error' : '' }}">
                    <label class="col-sm-3 text-right control-label col-form-label">Jenis Produk </label>
                        <div class="col-sm-8">
                            <select name="jenis_barang" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                    <option selected="disable">Jenis Barang</option>
			  			 			<option value="Sayuran">Sayuran</option>
			  			 			<option value="Buah-Buahan">Buah-Buahan</option>
                                </select>
                            </div>
                        </div>


			  	

			  		<div class="form-group row {{ $errors->has('satuan') ? ' has-error' : '' }}">
			  			<label class="col-sm-3 text-right control-label col-form-label">Satuan</label>
			  			 <div class="col-sm-8">
			  			 	<select class="select2 form-control custom-select" name="satuan" style="width: 100%; height: 36px;	">
			  			 		<option>Satuan</option>
			  			 		<option value="Kilogram">Kilogram</option>
			  			 		<option value="Ikat">Ikat</option>
			  			 	</select>
			  			 </div>
			  		</div>

			  		<div class="form-group row {{ $errors->has('quantity') ? ' has-error' : '' }}">
			  			<label class="col-sm-3 text-right control-label col-form-label">Quantity</label>
			  			<div class="col-sm-8">	
			  			<input type="text" name="quantity" class="form-control" placeholder="Quantity" required>
			  			@if ($errors->has('quantity'))
                            <span class="help-block">
                                <strong>{{ $errors->first('quantity') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			<div class="form-group row {{ $errors->has('harga_barang') ? ' has-error' : '' }}">
			  <label class="col-sm-3 text-right control-label col-form-label">Harga Produk : </label>
			  		<div class="col-sm-8">	
			  			<input type="text" name="harga_barang" class="form-control" id="fname" placeholder="Harga Pasar" required>
			  			@if ($errors->has('harga_barang'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga_barang') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			  		<div class="form-group row {{ $errors->has('harga_jual') ? ' has-error' : '' }}">
			  			<label class="col-sm-3 text-right control-label col-form-label">Harga Jual</label>
			  			<div class="col-sm-8">	
			  			<input type="text" name="harga_jual" class="form-control" placeholder="Harga Jual" required>
			  			@if ($errors->has('harga_jual'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga_jual') }}</strong>
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