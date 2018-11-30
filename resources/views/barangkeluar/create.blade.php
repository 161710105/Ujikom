@extends('layouts.admin')
@section('content')
<div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
            <h5>Add Produk Keluar</h5>
            <button type="button" name="add" class="panel-title pull-right" onclick="addrow()"><i class=" icon-plus"></i></button>
          </div>
          <div class="widget-content nopadding">
			  	<form action="{{ route('barangkeluar.store') }}" method="post" id="insert_form"  class="form-horizontal" >
			  		{{ csrf_field() }}

			  		<!-- <div class="form-group {{ $errors->has('id_barang') ? ' has-error' : '' }}">
			  			<label class="control-label">Produk</label>	
			  			<select name="id_barang" class="form-control">
			  				@foreach($barang as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama_barang }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_barang'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_barang') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('quantity') ? ' has-error' : '' }}">
			  			<label class="control-label">Quantity</label>	
			  			<input type="text" name="quantity" class="form-control"  required>
			  			@if ($errors->has('quantity'))
                            <span class="help-block">
                                <strong>{{ $errors->first('quantity') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('harga_barang') ? ' has-error' : '' }}">
			  			<label class="control-label">Harga Barang</label>	
			  			<input type="text" name="harga_barang" class="form-control"  required>
			  			@if ($errors->has('harga_barang'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga_barang') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('id_customer') ? ' has-error' : '' }}">
			  			<label class="control-label">Customer</label>	
			  			<select name="id_customer" class="form-control">
			  				@foreach($customer as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama_customer }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_customer'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_customer') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('id_karyawan') ? ' has-error' : '' }}">
			  			<label class="control-label">Karyawan</label>	
			  			<select name="id_karyawan" class="form-control">
			  				@foreach($karyawan as $data)
			  				<option value="{{ $data->id }}">{{ $data->name }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_karyawan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_karyawan') }}</strong>
                            </span>
                        @endif
			  		</div> -->

			  		<table id="item_table" class="table table-bordered">
            			<tr id="last">
              				<th >Jenis Barang</th>
              				<th >Quantity</th>
              				<th> Harga Produk</th>
              				<th >Customer</th>
              			<th><input type="hidden" name="id_karyawan" value="{{Auth::user()->id}}">
              			</th>
              			
            			</tr>
          			</table>

			  		<div class="form-actions">
			  			<button type="reset" class="btn btn-danger"><a href="{{ url()->previous() }}">Back</a></button>
              			<button type="submit" class="btn btn-primary">Save</button>
            		</div>
			  	</form>
			</div>
		</div>
	</div>
</div>
</div>
<script type="text/javascript">
	function addrow(){
      var no = $('#item_table tr').length;
      var html = '';
      html +='<tr id="row_'+no+'">';

      html +='<td><select name="id_barang[]" class="form-control">@foreach($barang as $data)<option value="{{$data->id}}">{{$data->nama_barang}}</option>@endforeach</select></td>';

      html +='<td><input type="text" name="quantity[]" class="form-control quantity"/></td>';

      html +='<td><input type="text" name="harga_barang[]" class="form-control harga_barang"/></td>';

      html +='<td><select name="id_customer[]" class="form-control">@foreach($customer as $data)<option value="{{$data->id}}">{{$data->nama_customer}}</option>@endforeach</select></td>';

   
      html +='<td><button type="button" class="btn btn-danger btn-sm" onclick="remove('+ no +')"><i class="icon-remove"></i></button></td></tr>';
      $('#last').after(html);
      
    }
    function remove(no){
      $('#row_'+no).remove();
    }	
</script>


@endsection



