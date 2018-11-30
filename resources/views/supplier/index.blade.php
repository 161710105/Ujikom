@extends('layouts.admin')
@section('content')
<div class="widget-box">
    <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
        <h5>Supplier</h5>
            <div class="panel-title pull-right"><a href="{{route('supplier.create') }}">Add</a>
		</div>
    </div>
        <div class="widget-content nopadding">
            <table id="master" class="table table-bordered data-table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama Supplier</th>
					  <th>Alamat</th>
					  <th>No Telphone</th>
					  <th></th>
					  <th>Action Admin</th>
					  <th></th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($supplier as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nama }}</td>
				    	<td><p>{{ $data->alamat }}</p></td>
				    	<td><p>{{ $data->no_telepon}}</p></td>
											<td>
									    		
												<a class="btn btn-warning btn-mini" href="{{ route('supplier.edit',$data->id) }}"><i class=" icon-edit"></i></a>
											</td>
											<td>
												<a href="{{ route('supplier.show',$data->id) }}" class="btn btn-primary btn-mini"><i class="icon-eye-open"></i></a>
											</td>
											<td>
												<form method="post" action="{{ route('supplier.destroy',$data->id) }}">
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