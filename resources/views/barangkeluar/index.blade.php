@extends('layouts.admin')
@section('content')
    <div class="row-fluid">
      <div class="span12">
      <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>List Produk</h5>
            <!-- <div class="panel-title pull-right"><button class="btn btn-success "><a href="{{route('barangkeluar.create') }}">Add</a></button>
          </div> -->
        <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama Produk</th>
					  <th>Quantity</th>
					  <th>Harga Barang</th>
					  <th>Customer</th>
					  <th>Karyawan</th>
					  <th>Tanggal Barang Keluar</th>
					  <th></th>
					  <th>Action Admin</th>
					  <th></th>


			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($barangkeluar as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->Barang_master->nama_barang }}</td>
				    	<td><p>{{ $data->quantity }}</p></td>
				    	<td><p>Rp.{{ $data->harga_barang }}</p></td>
				    	<td><p>{{ $data->Customer->nama_customer}}</p></td>
				    	<td><p>{{ $data->User->name}}</p></td>
				    	<td><p>{{ $data->created_at}}</p></td>
											<td>
									    		
												<a class="btn btn-warning btn-mini" href="{{ route('barangkeluar.edit',$data->id) }}"><i class=" icon-edit"></i></a>
											</td>
											<td>
												<a href="{{ route('barangkeluar.show',$data->id) }}" class="btn btn-primary btn-mini"><i class="icon-eye-open"></i></a>
											</td>
											<td>
												<form method="post" action="{{ route('barangkeluar.destroy',$data->id) }}">
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
@endsection


