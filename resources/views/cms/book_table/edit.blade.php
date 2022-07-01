@extends('cms.parent')

@section('title' , 'Book a Table')

@section('styles')


@endsection

@section('main-title','Book a Table')

@section('sub-title','Book a Table')

@section('content')

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Update Waiter</h3>
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
                        <input type="text" class="form-control" name="name" value="{{ $booktables->name }}" id="name" placeholder=" اكتب الاسم">
                      </div>

                      <div class="form-group col-md-6">
                        <label for="email">الايميل</label>
                        <input type="email" class="form-control" name="email" value="{{ $booktables->email }}" id="email" placeholder="اكتب الايميل">
                      </div>

                      <div class="form-group col-md-6">
                        <label for="mobile">رقم الهاتف المحمول</label>
                        <input type="number" class="form-control" name="mobile" value="{{ $booktables->mobile }}" id="mobile" placeholder=" رقم الهاتف">
                      </div>

                      <div class="form-group col-md-6">
                          <label for="number_of_people">عدد الأشخاص</label>
                          <input type="number" class="form-control" name="number_of_people" value="{{ $booktables->number_of_people }}" id="number_of_people" placeholder=" عدد الأشخاص">
                        </div>

                        <div class="form-group col-md-6">
                          <label for="date">تاريخ يوم الحجز</label>
                          <input type="date" class="form-control" name="date" value="{{ $booktables->date }}" id="date" placeholder=" اكتب تاريخ يوم الحجز">
                        </div>

                      {{-- <div class="form-group col-md-6">
                        <label for="time">بدأ الحجز</label>
                        <select class="form-select  text-center" value="{{ $booktables->time }}" name="time" style="width: 100%;" id="time" aria-label=".form-select">
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
                      </div> --}}
                </div>


              <!-- /.card-body -->


              <div class="card-footer">
                <button type="button" onclick="performUpdate({{$booktables->id}})" class="btn btn-primary">Update</button>
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
    function performUpdate(id){
    let formData = new FormData();
    formData.append('name' , document.getElementById('name').value);
    formData.append('email' , document.getElementById('email').value);
    formData.append('mobile' , document.getElementById('mobile').value);
    formData.append('date' , document.getElementById('date').value);
    formData.append('time' , document.getElementById('time').value);
    formData.append('number_of_people' , document.getElementById('number_of_people').value);
    storeRoute('/cms/admin/update_booktable/'+id,formData);
    }
  </script>

@endsection
