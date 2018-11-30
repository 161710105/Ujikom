@extends('layouts.admin')
@section('content')
<div class="widget-box">
    <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
        <h5>Customer</h5>
            <div class="panel-title pull-right"><a href="{{route('customer.create') }}">Add</a>
		</div>
    </div>
        <div class="widget-content nopadding">
            <table id="master" class="table table-bordered data-table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama Customer</th>
					  <th>Alamat</th>
					  <th>No Telphone</th>
					  <th>Tanggal Mulai</th>
					  <th>Tanggal Akhir</th>
					  <th></th>
					  <th>Action Admin</th>
					  <th></th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($customer as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nama_customer }}</td>
				    	<td><p>{{ $data->alamat }}</p></td>
				    	<td><p>{{ $data->no_telpon}}</p></td>
				    	<td><p>{{ $data->tgl_mulai}}</p></td>
				    	<td><p>{{ $data->tgl_akhir}}</p></td>
											<td>
									    		
												<a class="btn btn-warning btn-mini" href="{{ route('customer.edit',$data->id) }}"><i class=" icon-edit"></i></a>
											</td>
											<td>
												<a href="{{ route('customer.show',$data->id) }}" class="btn btn-primary btn-mini"><i class="icon-eye-open"></i></a>
											</td>
											<td>
												<form method="post" action="{{ route('customer.destroy',$data->id) }}">
												<input name="_token" type="hidden" value="{{ csrf_token() }}">
												<input type="hidden" name="_method" value="DELETE">

												<button type="submit" class="btn btn-danger btn-mini"><i class=" icon-trash"></i></button>
											</form>
										</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection