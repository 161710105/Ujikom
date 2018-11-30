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
			  			<label class="control-label">Prduk Keluar : </label>
			  			<div class="controls">
						<input type="text" name="title" class="form-control" value="{{ $barangkeluar->Barang_master->nama_barang }}"  readonly>
			  		</div>
			  	</div>

        			<div class="form-group">
			  			<label class="control-label">Quantity :</label>
			  			<div class="controls">	
			  			<input type="text" name="title" class="form-control" value="{{ $barangkeluar->quantity }}"  readonly>
			  		</div>
			  	</div>

			  		<div class="form-group">
			  			<label class="control-label">Harga Barang :</label>
			  			<div class="controls">	
			  			<input type="text" name="title" class="form-control" value="{{ $barangkeluar->harga_barang }}"  readonly>
			  		</div>
			  	</div>

			  		<div class="form-group">
			  			<label class="control-label">Customer :</label>
			  			<div class="controls">
						<input type="text" name="title" class="form-control" value="{{ $barangkeluar->Customer->nama_customer }}"  readonly>
			  		</div>
			  	</div>

			  		<div class="form-group">
			  			<label class="control-label">Karyawan :</label>
			  			<div class="controls">
						<input type="text" name="title" class="form-control" value="{{ $barangkeluar->User->name }}"  readonly>
			  		</div>
			  	</div>

			  		
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection