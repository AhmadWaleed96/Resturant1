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
              <h3 class="card-title">Book a Table</h3>
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
                        <input type="number" class="form-control" name="mobile" value="" id="mobile" placeholder=" رقم الهاتف">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="mobile">عدد الأشخاص</label>
                        <input type="number" class="form-control" name="number_of_people" value="" id="number_of_people" placeholder=" عدد الأشخاص">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="mobile">بدأ الحجز</label>
                        <select class="form-select form-select-sm text-center" name="time" style="width: 100%;" id="time" aria-label=".form-select-sm example">
                                <option value="1">1 : 00 AM</option>
                                <option value="2">2 : 00 AM</option>
                                <option value="3">3 : 00 AM</option>
                                <option value="4">4 : 00 AM</option>
                                <option value="5">5 : 00 AM</option>
                                <option value="6">6 : 00 AM</option>
                                <option value="7">7 : 00 AM</option>
                                <option value="8">8 : 00 AM</option>
                                <option value="9">9 : 00 AM</option>
                                <option value="10">10 : 00 AM</option>
                                <option value="11">11 : 00 AM</option>
                                <option value="12">12 : 00 AM</option>
                                <option value="13">1 : 00 BM</option>
                                <option value="14">2 : 00 BM</option>
                                <option value="15">3 : 00 BM</option>
                                <option value="16">4 : 00 BM</option>
                                <option value="17">5 : 00 BM</option>
                                <option value="18">6 : 00 BM</option>
                                <option value="19">7 : 00 BM</option>
                                <option value="20">8 : 00 BM</option>
                                <option value="21">9 : 00 BM</option>
                                <option value="22">10 : 00 BM</option>
                                <option value="23">11 : 00 BM</option>
                                <option value="24">12 : 00 BM</option>
                        </select>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="date">تاريخ يوم الحجز</label>
                        <input type="date" class="form-control" name="date" value="" id="date" placeholder=" اكتب تاريخ يوم الحجز">
                      </div>
                </div>


              <!-- /.card-body -->

              <div class="card-footer">
                <button type="button" onclick="performStore()" class="btn btn-primary">Store</button>
                <a href="{{route('booktables.index')}}" type="submit" class="btn btn-success">return to index</a>
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
    formData.append('time' , document.getElementById('time').value);
    formData.append('number_of_people' , document.getElementById('number_of_people').value);
    // formData.append('nots' , document.getElementById('nots').value);
    // formData.append('recepion_id' , document.getElementById('recepion_id').value);
      store('/cms/admin/booktables' , formData);
    }

  </script>


@endsection
