{{-- @extends('dashboard.parent') --}}
@extends('cms.parent')

@section('title','Admin')

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
                        <h3 class="card-title">إضافة بيانات المشرف</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="create_form">
                        @csrf
                        <div class="card-body">

                            <br>
                            <div class="row">

                            {{-- <div class="form-group col-md-4">
                                <label for="role_id">المسمى الوظيفي </label>
                                <select class="form-select form-select-sm" name="role_id" style="width: 100%;"
                                    id="role_id" aria-label=".form-select-sm example">
                                    @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>

                                    @endforeach
                                </select>
                            </div> --}}
                        </div>
                            <div class="row">


                                <div class="form-group col-md-4">
                                    <label for="first-name">first name</label>
                                    <input type="text" name="first-name" class="form-control" id="first-name"
                                        placeholder="أدخل اسم الأول">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="last-name">last name</label>
                                    <input type="text" name="last-name" class="form-control" id="last-name"
                                        placeholder="أدخل الاسم الأخير">
                                </div>


                                <div class="form-group col-md-4">
                                    <label for="email"> email</label>
                                    <input type="text" name="email" class="form-control" id="email"
                                        placeholder="ادخل الايميل   ">
                                </div>

                                <br>
                                {{-- <div class="row"> --}}
                                <div class="form-group col-md-4">
                                    <label for="password">password</label>
                                    <input type="password" name="password" class="form-control" id="password"
                                        placeholder="ادخل كلمة المرور   ">
                                </div>
                            {{-- </div> --}}


                                <div class="form-group col-md-4">
                                    <label for="number">mobile</label>
                                    <input type="text" name="number" class="form-control"
                                        id="number" placeholder="ادخل رقم الجوال  ">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="age">age</label>
                                    <input type="number" name="age" class="form-control" id="age"
                                        placeholder="ادخل العمر ">
                                </div>

                                


                                <div class="form-group col-md-4">
                                    <label for="city">اسم المدينة</label>
                                    {{-- <select class="form-select form-select-sm" name="city" style="width: 100%;"
                                        id="city" aria-label=".form-select-sm example"> --}}
                                        <input type="text" name="city" class="form-control" id="city"
                                        placeholder="ادخل المدينة ">
                                        {{-- @foreach ($cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->name }}</option>

                                        @endforeach --}}
                                    </select>
                                </div>

                                <div class="form-group col-md-1 text-center">
                                    <label for="gender">gender</label>
                                    <select class="form-select form-select-sm text-center" name="gender" style="width: 100%;"
                                        id="gender" aria-label=".form-select-sm example">
                                        <option value="male">ذكر</option>
                                        <option value="female">انثى</option>
                                       

                                    </select>
                                </div>

                        
                            </div>
                           
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="image">image</label>
                                      <input type="file" name="image" class="form-control" id="image"
                                        placeholder=" أضف صورة شخصية">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="cv">اضافة السيرة الذاتية</label>
                                      <input type="file" name="cv" class="form-control" id="cv"
                                        placeholder="أرفق السيرة الذاتية">
                                </div>


                            </div>

                        </div>

                        <br>

                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="button" onclick="performStore()" class="btn btn-lg btn-success">حفظ</button>
                            <a href="{{route('admins.index')}}"><button type="button" class="btn btn-lg btn-primary">
                                    قائمة المشرفين </button></a>
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
<script src="{{ asset('cms/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>

@section('scripts')

<script>

// $('.city_id').select2({
//       theme: 'bootstrap4'
//     });

// $('.role_id').select2({
//       theme: 'bootstrap4'
//     })

       function performStore() {

let formData = new FormData();
    // formData.append('role_id',document.getElementById('role_id').value);
    // formData.append('first_name',document.getElementById('first_name').value);
    // formData.append('last_name',document.getElementById('last_name').value);
    formData.append('number',document.getElementById('number').value);
    formData.append('age',document.getElementById('age').value);
    formData.append('email',document.getElementById('email').value);
    formData.append('password',document.getElementById('password').value);
    formData.append('city',document.getElementById('city').value);
    formData.append('gender',document.getElementById('gender').value);
    // formData.append('image',document.getElementById('image').files[0]);
    // formData.append('cv',document.getElementById('cv').files[0]);

store('/cms/admin/admins',formData);

}
</script>
@endsection
