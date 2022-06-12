@extends('cms.parent')

@section('title' , 'book a table create')

@section('styles')


@endsection

@section('main-title','book a table')

@section('sub-title','book a table')

@section('content')


<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Create Room</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              <form>
                @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name">الاسم</label>
                        <input type="text" class="form-control" name="name" value="" id="name" placeholder=" اكتب الاسم">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="email">الايميل</label>
                        <input type="email" class="form-control" name="email" value="" id="email" placeholder="اكتب الايميل">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="mobile">رقم الهاتف المحمول</label>
                        <input type="number" class="form-control" name="mobile" value="" id="mobile" placeholder=" Enter Quantity">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="date">تاريخ يوم الحجز</label>
                        <input type="date" class="form-control" name="date" value="" id="date" placeholder=" اكتب تاريخ يوم الحجز">
                      </div>
                </div>

               
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="button" onclick="performStore()" class="btn btn-primary">Store</button>
                {{-- <a href="{{route('book a tables.index')}}" type="submit" class="btn btn-success">return to index</a> --}}
              </div>
            </form>
          </div>




        </div>

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

@endsection


@section('scripts')
<script>
    function performStore(){
      let formData = new FormData();
      formData.append('name' , document.getElementById('name').value);
    formData.append('email' , document.getElementById('email').value);
    formData.append('mobile' , document.getElementById('mobile').value);
    formData.append('date' , document.getElementById('date').value);
    // formData.append('time' , document.getElementById('time').value);
    // formData.append('number_of_people' , document.getElementById('number_of_people').value);
    // formData.append('nots' , document.getElementById('nots').value);
    // formData.append('recepion_id' , document.getElementById('recepion_id').value);
      store('/cms/admin/booktables' , formData);
    }
    
  </script>
  

@endsection
