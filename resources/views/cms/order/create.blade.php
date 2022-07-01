@extends('cms.parent')

@section('title',' الطلبات')

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
                      <h3 class="card-title">الطلبات</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form id="create_form">
                      @csrf
                      <div class="card-body">

                      <br>
                      <div class="row">


                            <div class="form-group col-md-6">
                                <label for="date_day">اليوم</label>
                                <input type="date" name="date_day" class="form-control" id="date_day"
                                    placeholder="أدخل الاسم اليوم">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="date_time"> الوقت</label>
                                <input type="time" name="date_time" class="form-control" id="date_time"
                                    placeholder="ادخل اسم الوقت">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="item_id">اسم التصنيف</label>
                                <select class="form-control" name="item_id"
                                    id="item_id">
                                    @foreach ($items as $item)
                                        
                                    <option value="{{ $item->id }}">{{ $item->name_product }} </option>
                                    @endforeach
                                    
                                </select>
                            </div>
                        </div>

                          <br>

                      <!-- /.card-body -->
                      <div class="card-footer">
                          <button type="button" onclick="performStore()" class="btn btn-lg btn-success">حفظ</button>
                         <a href="{{route('orders.index')}}"><button type="button" class="btn btn-lg btn-primary"> قائمة الطلبات </button></a>
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
            formData.append('date_day',document.getElementById('date_day').value);
            formData.append('date_time',document.getElementById('date_time').value);
            formData.append('item_id',document.getElementById('item_id').value);
        store('/cms/admin/orders',formData);

    }

</script>


@endsection


