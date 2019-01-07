@extends('layouts.admin2')
@section('content')
@include('layouts._flash')
<br>
 <div class="row">
    <div class="col-md-10">
      <div class="card">
        <div class="card-body align-items-center">
          <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
            <h5><i class="fas fa-list-alt">Data Customer</i></h5>
            
          </div>


                  <!-- Data Customer -->

                 <div class="form-group {{ $errors->has('id_customer') ? ' has-error' : '' }}">
              <label class="control-label col-md-3 col-sm-3 col-xs-3">Pilih Customer</label> 
              <select name="customer" id="customer" class="select2 form-control custom-select" style="width: 60%; height: 30px;">
                @foreach($customer as $data)
                <option value="{{ $data->id }}">{{ $data->nama_customer }}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group row {{ $errors->has('nama_customer') ? ' has-error' : '' }}">
              <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nama Customer </label>
              <div class="col-sm-5">  
              <input type="text" name="id_customer" id="id_customer" class="form-control" value=""  readonly>
              
            </div>
          </div>

          <div class="form-group row {{ $errors->has('alamat') ? ' has-error' : '' }}">
              <label for="fname" class="col-sm-3 text-right control-label col-form-label">Alamat</label>
              <div class="col-sm-5">  
              <input type="text" name="alamat" id="alamat" class="form-control" value=""  readonly>
              
            </div>
          </div>

          <div class="form-group row {{ $errors->has('no_telpon') ? ' has-error' : '' }}">
              <label for="fname" class="col-sm-3 text-right control-label col-form-label">No Telphone </label>  
              <div class="col-sm-5">
              <input type="number" name="no_telpon" id="no_telpon" class="form-control"  readonly>
              
            </div>
          </div>


          <div class="form-group row {{ $errors->has('tgl_mulai') ? ' has-error' : '' }}">
              <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tanggal Mulai </label>
              <div class="col-sm-5">  
              <input type="date" name="tgl_mulai" id="tgl_mulai" class="form-control"  readonly>
              
            </div>
          </div>

            <div class="form-group row {{ $errors->has('tgl_akhir') ? ' has-error' : '' }}">
              <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tanggal Akhir</label> 
              <div class="col-sm-5">
              <input type="date" name="tgl_akhir" id="tgl_akhir" class="form-control"  readonly>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
    
  



      <!-- Barang keluar -->

<br>
 <div class="row">
    <div class="col-md-10">
      <div class="card">
        <div class="card-body align-items-center">
          <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
            <h5 class="card-title">Add Produk Keluar</h5>
            
          </div>

        <div class="widget-content nopadding">
          <form action="{{ route('barangkeluar.store') }}" method="post" id="insert_form"  class="form-horizontal" >
            {{ csrf_field() }}

            <table id="item_table" class="table table-bordered">
                  <tr id="last">
                      <th >Jenis Barang</th>
                      <th >Quantity</th>
                      <th> Harga Produk</th>
                      
                    <th><input type="hidden" name="id_karyawan" value="{{Auth::user()->id}}">
                    </th>
                    <th><button type="button" name="add" class="btn btn-success btn-sm add" onclick="addrow()"><i class="fa fa-plus-square"></i></button></th>
                  </tr>

                </table>
                <div class="form-actions">
              <button type="reset" class="btn btn-danger"><a href="{{ url()->previous() }}">Back</a></button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

        

      <!-- End Barang Keluar  -->  





@endsection

@section('js')
<script type="text/javascript">
  function addrow(){
      var no = $('#item_table tr').length;
      var html = '';
      html +='<tr id="row_'+no+'">';

      html +='<td><select name="id_barang[]" id="namaproduk" class="form-control">@foreach($barang as $data)<option value="{{$data->id}}">{{$data->nama_barang}}</option>@endforeach</select></td>';

      html +='<td><input type="text" name="quantity[]" id="quantity" class="form-control quantity"/></td>';

      html +='<td><input type="text" name="harga_barang[]" id="hargabarang" class="form-control harga_barang"/></td>';

      // html +='<td><select name="id_customer[]" class="form-control">@foreach($customer as $data)<option value="{{$data->id}}">{{$data->nama_customer}}</option>@endforeach</select></td>';

   
      html +='<td><button type="button" class="btn btn-danger btn-sm" onclick="remove('+ no +')"><i class="fa fa-minus-square"></i></button></td></tr>';
      $('#last').after(html);
      
    }
    function remove(no){
      $('#row_'+no).remove();
    } 

    $("#customer").change(function()
    {
        var id=$(this).val();
        $.ajax
        
        ({

        type: "GET",
        url: "/barangkeluar/getIdCustomer",
        data: {id: id},
        cache: false,
        dataType:"json",
        success: function(data)
      {
        $("input[name='id_customer']").val(data.id_customer);
        $("input[name='alamat']").val(data.alamat);
        $("input[name='no_telpon']").val(data.no_telpon);
        $("input[name='tgl_mulai']").val(data.tgl_mulai);
        $("input[name='tgl_akhir']").val(data.tgl_akhir);

        

    }



  });
      });

</script>
@endsection


