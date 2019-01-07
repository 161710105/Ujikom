@extends('layouts.admin2')
@section('content')
<div class="container-fluid">
	<div class="row">
        <div class="col-md-12">    
			<div class="card">
    			
        			<div class="card-body">
            			<h4 class="card-title"></h4>
          			</div>


			  	<form action="{{ route('barangkeluar.update',$barangkeluar->id) }}" id="form-wizard" class="form-horizontal" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}

        			<div class="form-group row {{ $errors->has('id_barang') ? ' has-error' : '' }}">
			  			<label for="fname" class="col-sm-3 text-right control-label col-form-label">Produk Masuk </label>
			  			<div class="col-sm-8">	
			  			<select name="id_barang" class="form-control">
			  				@foreach($barang as $data)
			  				<option value="{{ $data->id }}" {{ $selectedBarang == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama_barang }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_barang'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_barang') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			  		<div class="form-group row {{ $errors->has('quantity') ? ' has-error' : '' }}">
			  			<label for="fname" class="col-sm-3 text-right control-label col-form-label">Quantity</label>	
			  			<div class="col-sm-8">
			  			<input type="text" name="quantity" class="form-control" value="{{ $barangkeluar->quantity }}" required>
			  			@if ($errors->has('quantity'))
                            <span class="help-block">
                                <strong>{{ $errors->first('quantity') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			  		<div class="form-group row {{ $errors->has('harga_barang') ? ' has-error' : '' }}">
			  			<label for="fname" class="col-sm-3 text-right control-label col-form-label">Harga Barang</label>
			  			<div class="col-sm-8">	
			  			<input type="text" value="{{ $barangkeluar->harga_barang }}" name="harga_barang" class="form-control"  required>
			  			@if ($errors->has('harga_barang'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga_barang') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			  		<div class="form-group row {{ $errors->has('id_customer') ? ' has-error' : '' }}">
			  			<label for="fname" class="col-sm-3 text-right control-label col-form-label">Customer</label>
			  			<div class="col-sm-8">	
			  			<select name="id_customer" class="form-control">
			  				@foreach($customer as $data)
			  				<option value="{{ $data->id }}" {{ $selectedCustomer == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama_customer }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_customer'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_customer') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	</div>

			  		<div class="form-group row {{ $errors->has('id_karyawan') ? ' has-error' : '' }}">
			  			<label for="fname" class="col-sm-3 text-right control-label col-form-label">Karyawan</label>
			  			<div class="col-sm-8">	
			  			<select name="id_karyawan" class="form-control">
			  				@foreach($karyawan as $data)
			  				<option value="{{ $data->id }}" {{ $selectedKaryawan == $data->id ? 'selected="selected"' : '' }} >{{ $data->name }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_karyawan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_karyawan') }}</strong>
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