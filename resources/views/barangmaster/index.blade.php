@extends('layouts.admin2')
@section('content')
<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">List Produk</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
				<div class="card">
					<div class="card">
                        <h5 class="card-title"></h5>
                            <div class="panel-title left">
                                <center><a class="btn btn-outline-primary " href="{{route('barangmaster.create') }}"><i class="fas fa-plus">Add New Produk</i></a></center>
									<div class="span10">
        								<a class="btn btn-outline-primary" href="{{ url('export/barangmaster') }}">Export Excel</a>

                                 		<a class="btn btn-primary" href="{{ url('/barang/report/download') }}">Export PDF</a>
                                	</div>
                            	</div>
                        	</div> 
					    </div>
					        
					        <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
											<th>Nama Produk</th>
											<th>Jenis Produk</th>
											<th>Satuan</th>
											<th>Quantity</th>
											<th>Harga Produk</th>
											<th>Harga Jual</th>
											<th></th>
											<th></th>
											<th></th>
								  		</tr>
				  					</thead>
				  				<tbody>
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
									    	<td><p>Rp.{{ $data->harga_jual}}</p></td>

									    	<td>
									    		
												<a class="btn btn-warning btn-mini" href="{{ route('barangmaster.edit',$data->id) }}"><i class="ti-pencil"></i></a>
											</td>
											<td>
												<a href="{{ route('barangmaster.show',$data->id) }}" class="btn btn-primary btn-mini"><i class="ti-eye"></i></a>
											</td>
											<td>
												<form method="post" action="{{ route('barangmaster.destroy',$data->id) }}">
												<input name="_token" type="hidden" value="{{ csrf_token() }}">
												<input type="hidden" name="_method" value="DELETE">

												<button type="submit" class="btn btn-danger btn-mini"><i class="ti-trash"></i></button>
											</form>
										</td>
									</tr>
@endforeach

                                </tbody>
                            </table>
						</div>
					</div>
                </div>
                        

@endsection
