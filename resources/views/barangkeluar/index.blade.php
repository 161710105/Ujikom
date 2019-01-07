@extends('layouts.admin2')
@section('content')
    <div class="widget-box">
 	<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Produk Keluar</h4>
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
                                
                                <center><a class="btn btn-outline-danger" href="{{route('barangkeluar.create') }}"><i class="fas fa-plus">Add New Produk</i></a></center>
					          </div>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
					  <th>Nama Produk</th>
					  <th>Quantity</th>
					  <th>Harga Barang</th>
					  <th>Total Harga</th>
					  <th>Customer</th>
					  <th>Karyawan</th>
					  <th>Tanggal Barang Keluar</th>
					  <th></th>
					  <th></th>
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
				    	<td><p>Rp.{{ $data->total}}</p></td>
				    	<td><p>{{ $data->Customer->nama_customer}}</p></td>
				    	<td><p>{{ $data->User->name}}</p></td>
				    	<td><p>{{ $data->created_at}}</p></td>
											<td>
									    		
												<a class="btn btn-warning " href="{{ route('barangkeluar.edit',$data->id) }}"><i class="ti-pencil"></i></i></a>
											</td>
											<td>
												<a href="{{ route('barangkeluar.show',$data->id) }}" class="btn btn-primary "><i class="ti-eye"></i></a>
											</td>
											<td>
												<form method="post" action="{{ route('barangkeluar.destroy',$data->id) }}">
												<input name="_token" type="hidden" value="{{ csrf_token() }}">
												<input type="hidden" name="_method" value="DELETE">

												<button type="submit" class="btn btn-danger "><i class="ti-trash"></i></button>
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

<script type="text/javascript">
	$(document).ready(function(){
      $('#namaproduk').on('change', function(){
        var produkID = $(this).val();
        console.log('bismillah');
          if(produkID){
            $.ajax({
              url: 'barangkeluar/create/'+produkID,
              type: "GET",
              dataType: "json",
              success: function (data){
                state = "update";
                console.log('sip');
                $('#quantity').val(data.quantity);
                $('#hargabarang').val(data.hargabarang);
                
              }
            });
          }
          else
          {
            $('#quantity','#hargabarang').empty();
          }
      });
    });
</script>

