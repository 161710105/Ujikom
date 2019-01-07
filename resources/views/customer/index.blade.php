@extends('layouts.admin2')
@section('content')
<div class="widget-box">
 	<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Customer</h4>
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
                            <div class="card-body">
                                <h5 class="card-title"></h5>

                                <center><a class="btn btn-outline-success" href="{{route('customer.create') }}"><i class="fas fa-plus">Add New Customer</i></a></center>
					          </div>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
					  <th>Nama Customer</th>
					  <th>Alamat</th>
					  <th>No Telphone</th>
					  <th>Tanggal Mulai</th>
					  <th>Tanggal Akhir</th>
					  <th></th>
					  <th></th>
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
									    		
												<center><a class="btn btn-warning " href="{{ route('customer.edit',$data->id) }}"><i class="ti-pencil"></i></a></center>
											</td>
											<td>
												<center><a href="{{ route('customer.show',$data->id) }}" class="btn btn-primary "><i class="ti-eye"></i></a></center>
											</td>
											<td>
												<form method="post" action="{{ route('customer.destroy',$data->id) }}">
												<input name="_token" type="hidden" value="{{ csrf_token() }}">
												<input type="hidden" name="_method" value="DELETE">

												<center><button type="submit" class="btn btn-danger "><i class="ti-trash"></i></button></center>
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
@endsection