@extends('layouts.admin')
@section('content')
<div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-eye-open"></i> </span>
            <h5>Show Supplier</h5>
            	<div class="panel-title pull-right"><a href="{{ url()->previous() }}" class="btn btn-danger"><i class="icon-remove"></i></a></div>
          </div>
          	<div class="widget-content nopadding">
          		<form id="form-wizard" class="form-horizontal">


        			<div class="control-group">
			  			<label class="control-label">Nama :</label>
			  			<div class="controls">	
			  			<input type="text" name="nama" class="form-control" value="{{ $supplier->nama}}"  readonly>
			  		</div>
			  	</div>

			  		<div class="control-group">
			  			<label class="control-label">Alamat :</label>
			  			<div class="controls">	
			  			<input type="text" name="alamat" class="form-control" value="{{ $supplier->alamat}}"  readonly>
			  		</div>
			  	</div>

			  		<div class="control-group">
			  			<label class="control-label">No Telphone :</label>
			  			<div class="controls">	
			  			<input type="number" name="no_telepon" class="form-control" value="{{ $supplier->no_telepon}}"  readonly>
			  		</div>
			  	</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection