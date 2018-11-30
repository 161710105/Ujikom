@extends('layouts.admin')
@section('content')
<div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-eye-open"></i> </span>
            <h5>Show Customer</h5>
            	<div class="panel-title pull-right"><a href="{{ url()->previous() }}" class="btn btn-danger"><i class="icon-remove"></i></a></div>
          </div>
          	<div class="widget-content nopadding">
          		<form id="form-wizard" class="form-horizontal">

        			<div class="control-group">
			  			<label class="control-label">Nama Customer :</label>
			  			<div class="controls">	
			  			<input type="text" name="nama_customer" class="form-control" value="{{ $customer->nama_customer}}"  readonly>
			  		</div>
			  	</div>

			  		<div class="control-group">
			  			<label class="control-label">alamat :</label>
			  			<div class="controls">	
			  			<textarea name="alamat" class="form-control" rows="10" value="{{ $customer->alamat }}" readonly></textarea>
			  		</div>
			  	</div>

			  		<div class="control-group">
			  			<label class="control-label">No Telphone :</label>
			  			<div class="controls">	
			  			<input type="number" name="no_telpon" class="form-control" value="{{ $customer->no_telpon}}"  readonly>
			  		</div>
			  	</div>

			  		<div class="control-group">
			  			<label class="control-label">Tanggal Mulai :</label>
			  			<div class="controls">	
			  			<input type="date" name="tgl_mulai" class="form-control" value="{{ $customer->tgl_mulai}}"  readonly>
			  		</div>
			  	</div>

			  		<div class="control-group">
			  			<label class="control-label">Tanggal Akhir :</label>
			  			<div class="controls">	
			  			<input type="date" name="tgl_akhir" class="form-control" value="{{ $customer->tgl_akhir}}"  readonly>
			  		</div>
			  	</div>
			  		
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection