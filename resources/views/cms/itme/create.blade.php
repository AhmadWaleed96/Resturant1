@extends('cms.parent')

@section('title',' التصنيفات')

@section('styles')

@endsection

@section('content')

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
      <div class="row">
          <!-- left column -->
          <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-primary">
                  <div class="card-header">
                      <h3 class="card-title">الاصناف</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form id="create_form">
                      @csrf
                      <div class="card-body">

                      <br>
                      <div class="row">


                            <div class="form-group col-md-6">
                                <label for="name_product">اسم المنتج</label>
                                <input type="text" name="name_product" class="form-control" id="name_product"
                                    placeholder="أدخل اسم المنتج">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="price"> السعر</label>
                                <input type="text" name="price" class="form-control" id="price"
                                    placeholder="ادخل  السعر">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="image"> الصورة</label>
                                <input type="file" name="image" class="form-control" id="image"
                                    placeholder="ادخل  الصورة">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="kitchen_id">فترة الدوام</label>
                                <select class="form-control" name="kitchen_id"
                                    id="kitchen_id">
                                    @foreach ($Kitchens as $kitchen)
                                        
                                    <option value="{{ $kitchen->id }}">{{ $kitchen->id }} </option>
                                    @endforeach
                                    
                                </select>
                            </div>
                        </div>
                        

                          <br>

                      <!-- /.card-body -->
                      <div class="card-footer">
                          <button type="button" onclick="performStore()" class="btn btn-lg btn-success">حفظ</button>
                         <a href="{{route('items.index')}}"><button type="button" class="btn btn-lg btn-primary"> قائمة التصنيفات </button></a>
                      </div>
                  </form>
              </div>
              <!-- /.card -->
          </div>
          <!--/.col (left) -->
      </div>
      <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

  </section>
  <!-- /.content -->

@endsection

@section('scripts')


 <script>

     function performStore() {

        let formData = new FormData();
            formData.append('name_product',document.getElementById('name_product').value);
            formData.append('price',document.getElementById('price').value);
            formData.append('image',document.getElementById('image').files[0]);
            formData.append('kitchen_id',document.getElementById('kitchen_id').value);
        store('/cms/admin/items',formData);

    }

</script>


@endsection


