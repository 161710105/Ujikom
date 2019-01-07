@extends('layouts.admin2')
@section('content')

<div class="container-fluid">
	<div class="row">
        <div class="col-md-12">    
			<div class="card">
        			<div class="card-body">
            			<h4 class="card-title">Add Produk</h4>
          			</div>

          
			  	<form action="{{ route('barangmaster.update',$barangmaster->id) }}" id="form-wizard" class="form-horizontal" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}


			  		<div class="form-group row {{ $errors->has('nama_barang') ? ' has-error' : '' }}">
			  			<label for="fname" class="col-sm-3 text-right control-label col-form-label">Nama </label>
			  			<div class="col-sm-8">	
			  			<input type="text" name="nama_barang" class="form-control" value="{{ $barangmaster->nama_barang }}"  required>
			  			@if ($errors->has('nama_barang'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_barang') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			  		<div class="form-group row {{ $errors->has('jenis_barang') ? ' has-error' : '' }}">
			  			<label for="fname" class="col-sm-3 text-right control-label col-form-label">Jenis Barang </label>	
			  			<div class="col-sm-8">
			  			<select class=" form-control" name="jenis_barang"  required>
			  				<option value="1"> {{ $barangmaster->jenis_barang == "Sayuran" ? "selected": "" }}Sayuran</option>
			  				<option value="2"> {{ $barangmaster->jenis_barang == "Buah-Buahan" ? "selected": "" }}Buah-Buahan</option>
                    	</select>

			  			@if ($errors->has('jenis_barang'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jenis_barang') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			  	

			  		<div class="form-group row {{ $errors->has('satuan') ? ' has-error' : '' }}">
			  			<label for="fname" class="col-sm-3 text-right control-label col-form-label">Satuan </label>	
			  			<div class="col-sm-8">
			  			<select class=" form-control" name="satuan"  required>
			  				<option value="Kilogram"> {{ $barangmaster->satuan == "Kilogram" ? "selected": "" }}Kilogram</option>
			  				<option value="Ikat"> {{ $barangmaster->satuan == "Ikat" ? "selected": "" }}Ikat</option>
                    	</select>

			  			@if ($errors->has('satuan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('satuan') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			  		<div class="form-group row {{ $errors->has('quantity') ? ' has-error' : '' }}">
			  			<label for="fname" class="col-sm-3 text-right control-label col-form-label">Quantity : </label>
			  			<div class="col-sm-8">	
			  			<input type="text" name="quantity" class="form-control" value="{{ $barangmaster->quantity }}"  required>
			  			@if ($errors->has('quantity'))
                            <span class="help-block">
                                <strong>{{ $errors->first('quantity') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			  		<div class="form-group row {{ $errors->has('harga_barang') ? ' has-error' : '' }}">
			  			<label for="fname" class="col-sm-3 text-right control-label col-form-label">Harga Barang : </label>
			  			<div class="col-sm-8">	
			  			<input type="text" name="harga_barang" class="form-control" value="{{ $barangmaster->harga_barang }}"  required>
			  			@if ($errors->has('harga_barang'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga_barang') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			  		<div class="form-group row {{ $errors->has('harga_jual') ? ' has-error' : '' }}">
			  			<label for="fname" class="col-sm-3 text-right control-label col-form-label">Harga Jual : </label>	
			  			<div class="col-sm-8">
			  			<input type="text" name="harga_jual" class="form-control" value="{{ $barangmaster->harga_jual }}"  required>
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
              				<button type="submit" class="btn btn-success">Update</button>
            		</div>
            	</div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection