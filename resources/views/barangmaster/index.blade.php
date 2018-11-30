@extends('layouts.admin')
@section('content')
<div class="row-fluid">
      <div class="span12">
      <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>List Produk</h5>
            <div class="panel-title pull-right"><button class="btn btn-success "><a href="{{route('barangmaster.create') }}">Add</a></button>
            <a class="btn btn-primary" href="{{ url('export/barangmaster') }}">Export</a>
          </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
                <thead>
			  		<tr>
			  		  	<th>No</th>
						<th>Nama Produk</th>
						<th>Jenis Produk</th>
						<th>Satuan</th>
						<th>Quantity</th>
						<th>Harga Produk</th>
						<th>Harga Jual</th>
						<th>Aksi Admin</th>
						<th>Aksi Admin</th>
						<th>Aksi Admin</th>
			  						</tr>
				  				</thead>
				  			<tbody>
				  	  				<tr>
				  	  					<?php $nomor = 1; ?>
				  						@php $no = 1; @endphp
				  						@foreach($barang as $data)
				  	  						<tr>
									    	<td>{{ $no++ }}</td>
									    	<td>{{ $data->nama_barang }}</td>
									    	<td><p>{{ $data->jenis_barang }}</p></td>
									    	<td><p>{{ $data->satuan }}</p></td>
									    	<td><p>{{ $data->quantity}}</p></td>
									    	<td><p>Rp.{{ $data->harga_barang}}</p></td>
									    	<td><p>{{ $data->harga_jual}}</p></td>

									    	<td>
									    		
												<a class="btn btn-warning btn-mini" href="{{ route('barangmaster.edit',$data->id) }}"><i class=" icon-edit"></i></a>
											</td>
											<td>
												<a href="{{ route('barangmaster.show',$data->id) }}" class="btn btn-primary btn-mini"><i class="icon-eye-open"></i></a>
											</td>
											<td>
												<form method="post" action="{{ route('barangmaster.destroy',$data->id) }}">
												<input name="_token" type="hidden" value="{{ csrf_token() }}">
												<input type="hidden" name="_method" value="DELETE">

												<button type="submit" class="btn btn-danger btn-mini"><i class=" icon-trash"></i></button>
											</form>
										</td>
								</tr>
								@endforeach
				  					
								
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
