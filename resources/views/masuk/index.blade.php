@extends('layouts.admin2')
@section('content')
            <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
            
          </div>
              <form action="{{url('/reportmasuk')}}" method="post">
                  {{csrf_field()}}

                <div class='col-sm-4'>
                   Dari Tanggal :
                    <div class="form-group">
                        <div class='input-group date'>
                            <input type='date' name="tglmasuk" class="form-control" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>

                <div class='col-sm-4'>
                    Sampai Tanggal :
                    <div class="form-group">
                        <div class='input-group date' >
                            <input type='date' name="tglkeluar" class="form-control" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
              </br>
                                <button type="submit" name="submit" value="submit" class="btn btn-default">Filter</button> 



                

  
           </form>
       </div>

   </div>

</div>
<div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Jenis</th>
                                <th>Quantity</th>
                                <th>Harga</th>
                                <th>Nama Karyawan</th>
                                <th>Customer</th>
                                <th>Tanggal Masuk</th>
                                
                              </tr>
                            </thead>
          <?php
          $no = 1;
          ?>
            @foreach($masuk as $data)
              <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $data->Barang_master->nama_barang }}</td>
              <td><p>{{ $data->Barang_master->jenis_barang }}</p></td>
              <td><p>{{ $data->quantity }}</p></td>
              <td><p>{{ $data->harga_barang }}</p></td>
              <td><p>{{ $data->User->name }}</p></td>
              <td><p>{{ $data->Customer->nama_customer }}</p></td>
              <td><p>{{ $data->created_at }}</p></td>
              

                              </tr>
@endforeach
                            </table>
                        </div>
</div>



                                  <!-- Table row -->
      

       


                         

        @endsection
