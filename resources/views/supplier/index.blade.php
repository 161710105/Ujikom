@extends('layouts.admin2')
@section('content')
<div class="widget-box">
 	<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Supplier</h4>
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
                                
                                <center><a class="btn btn-outline-primary" href="{{route('supplier.create') }}"><i class="fas fa-plus">Add New Supplier</i></a></center>
					          </div>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
					  <th>Nama Supplier</th>
					  <th>Alamat</th>
					  <th>No Telphone</th>
					  <th></th>
					  <th></th>
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
									    		
												<center><a class="btn btn-warning " href="{{ route('supplier.edit',$data->id) }}"><i class="ti-pencil"></i></a></center>
											</td>
											<td>
												<center><a href="{{ route('supplier.show',$data->id) }}" class="btn btn-primary "><i class="ti-eye"></i></a></center>
											</td>
											<td>
												<form method="post" action="{{ route('supplier.destroy',$data->id) }}">
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