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
			  			<label class="control-label">Prduk Masuk :</label>
			  			<div class="controls">
						<input type="text" name="title" class="form-control" value="{{ $barangmasuk->Barang_master->nama_barang }}"  readonly>
			  		</div>
			  	</div>

        			<div class="control-group">
			  			<label class="control-label">Quantity :</label>
			  			<div class="controls">	
			  			<input type="text" name="title" class="form-control" value="{{ $barangmasuk->quantity }}"  readonly>
			  		</div>
			  	</div>

			  		<div class="control-group">
			  			<label class="control-label">Harga Barang :</label>	
			  			<div class="controls">
			  			<input type="text" name="title" class="form-control" value="{{ $barangmasuk->harga_barang }}"  readonly>
			  		</div>
			  	</div>

			  		<div class="control-group">
			  			<label class="control-label">Karyawan :</label>
			  			<div class="controls">
						<input type="text" name="title" class="form-control" value="{{ $barangmasuk->User->name }}"  readonly>
			  		</div>
			  	</div>

			  		<div class="control-group">
			  			<label class="control-label">Supplier :</label>
			  			<div class="controls">
						<input type="text" name="title" class="form-control" value="{{ $barangmasuk->Supplier->nama }}"  readonly>
			  		</div>
			  	</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection