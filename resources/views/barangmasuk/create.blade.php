@extends('layouts.admin2')
@section('content')
<div class="row">
    <div class="col-md-10">
      <div class="card">
        <div class="card-body align-items-center">
          <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
            <h5><i class="fas fa-list-alt">Data Supplier</i></h5>
            
          </div>


                  <!-- Data Supplier -->

                 <div class="form-group {{ $errors->has('id_supplier') ? ' has-error' : '' }}">
              <label class="control-label col-md-3 col-sm-3 col-xs-3">Pilih Supplier</label> 
              <select name="supplier" id="supplier" class="select2 form-control custom-select" style="width: 60%; height: 30px;">
                @foreach($supplier as $data)
                <option value="{{ $data->id }}">{{ $data->nama }}</option>
                @endforeach
              </select>
            </div>

           <div class="form-group row {{ $errors->has('nama') ? ' has-error' : '' }}">
              <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nama </label>
              <div class="col-sm-8">  
              <input type="text" name="nama" id="nama" class="form-control"  required>
            </div>
          </div>

            <div class="form-group row {{ $errors->has('alamat') ? ' has-error' : '' }}">
              <label for="fname" class="col-sm-3 text-right control-label col-form-label">Alamat </label>
              <div class="col-sm-8">  
              <input type="text" name="alamat" id="alamat" class="form-control"  required>
            </div>
          </div>

            <div class="form-group row {{ $errors->has('no_telepon') ? ' has-error' : '' }}">
              <label for="fname" class="col-sm-3 text-right control-label col-form-label">No Telphone </label>
              <div class="col-sm-8">  
              <input type="text" name="no_telepon" class="form-control " id="no_telepon"  required>
            </div>
          </div>
         </div>
       </div>
     </div>
   </div>














<div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
            <h5>Add Produk Masuk</h5>
          </div>
          	<div class="widget-content nopadding">
			  	<form action="{{ route('barangmasuk.store') }}" id="insert_form"  class="form-horizontal" method="post" >
			  		{{ csrf_field() }}

			  

			  		<table id="item_table" class="table table-bordered">
            			<tr id="last">
              				<th >Nama Produk</th>
              				<th >Quantity</th>
              				<th> Harga Produk</th>
                      <th >Supplier</th>
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



@endsection

@section('js')

<script type="text/javascript">
  function addrow(){
      var no = $('#item_table tr').length;
      var html = '';
      html +='<tr id="row_'+no+'">';

      html +='<td><select name="id_barang[]" id="namaproduk" class="form-control">@foreach($barang as $data)<option value="{{$data->id}}">{{$data->nama_barang}}</option>@endforeach</select></td>';

      html +='<td><input type="text" name="quantity[]" id="quantity" class="form-control quantity"/></td>';

      html +='<td><input type="text" name="harga_barang[]"id="hargabarang" class="form-control harga_barang"/></td>';

      html +='<td><select name="id_supplier[]" class="form-control">@foreach($supplier as $data)<option value="{{$data->id}}">{{$data->nama}}</option>@endforeach</select></td>';

   
      html +='<td><button type="button" class="btn btn-danger btn-sm" onclick="remove('+ no +')"><i class="fa fa-minus-square"></i></button></td></tr>';
      $('#last').after(html);
      
    }
    function remove(no){
      $('#row_'+no).remove();
    } 

    $("#supplier").change(function()
    {
        var id=$(this).val();
        $.ajax
        
        ({

        type: "GET",
        url: "/barangmasuk/getIdSupplier",
        data: {id: id},
        cache: false,
        dataType:"json",
        success: function(data)
      {
        $("input[name='nama']").val(data.nama);
        $("input[name='alamat']").val(data.alamat);
        $("input[name='no_telepon']").val(data.no_telepon);
       
        

    }



  });
      });

</script>


@endsection