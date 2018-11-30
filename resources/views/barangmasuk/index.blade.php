@extends('layouts.admin')
@section('content')
<div class="widget-box">
    <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
        <h5>List Produk Masuk</h5>
            <div class="panel-title pull-right"><a href="{{route('barangmasuk.create') }}">Add</a>
		</div>
    </div>
        <div class="widget-content nopadding">
            <table id="master" class="table table-bordered data-table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama Produk</th>
					  <th>Quantity</th>
					  <th>Harga Barang</th>
					  <th>Karyawan</th>
					  <th>Supplier</th>
					  <th>Tanggal Barang Masuk</th>
					  <th></th>
					  <th>Action Admin</th>
					  <th></th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($barangmasuk as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->Barang_master->nama_barang }}</td>
				    	<td><p>{{ $data->quantity }}</p></td>
				    	<td><p>{{ $data->harga_barang }}</p></td>
				    	<td><p>{{ $data->User->name}}</p></td>
				    	<td><p>{{ $data->Supplier->nama}}</p></td>
				    	<td><p>{{ $data->created_at}}</p></td>
											
											<td>
									    		
												<a class="btn btn-warning btn-sm" href="{{ route('barangmasuk.edit',$data->id) }}"><i class="ti-pencil"></i></a>
											</td>
											<td>
												<a href="{{ route('barangmasuk.show',$data->id) }}" class="btn btn-primary btn-sm"><i class="ti-eye"></i></a>
											</td>
											<td>
												<form method="post" action="{{ route('barangmasuk.destroy',$data->id) }}">
												<input name="_token" type="hidden" value="{{ csrf_token() }}">
												<input type="hidden" name="_method" value="DELETE">

												<button type="submit" class="btn btn-danger btn-sm"><i class="ti-trash"></i></button>
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