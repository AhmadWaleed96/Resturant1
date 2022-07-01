{{-- @extends('dashboard.parent') --}}
@extends('cms.parent')

@section('title',' المحاسب')

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
                        <h3 class="card-title">إضافة بيانات المحاسب</h3>
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
                                    <label for="first_name">الاسم الاول </label>
                                    <input type="text" name="first_name" class="form-control" id="first_name"
                                        placeholder="أدخل اسم الأول">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="last_name">الاسم الثاني</label>
                                    <input type="text" name="last_name" class="form-control" id="last_name"
                                        placeholder="أدخل الاسم الأخير">
                                </div>


                                <div class="form-group col-md-4">
                                    <label for="email"> الإيميل</label>
                                    <input type="text" name="email" class="form-control" id="email"
                                        placeholder="ادخل الايمل   ">
                                </div>

                                <br>
                                {{-- <div class="row"> --}}
                                <div class="form-group col-md-4">
                                    <label for="password"> كلمة المرور</label>
                                    <input type="password" name="password" class="form-control" id="password"
                                        placeholder="ادخل كلمة المرور   ">
                                </div>
                            {{-- </div> --}}


                                <div class="form-group col-md-4">
                                    <label for="mobile"> رقم الجوال</label>
                                    <input type="text" name="mobile" class="form-control"
                                        id="mobile" placeholder="ادخل رقم الجوال  ">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="date_of_birth"> تاريخ الميلاد </label>
                                    <input type="date" name="date_of_birth" class="form-control" id="date_of_birth"
                                        placeholder="ادخل تاريخ الميلاد   ">
                                </div>




                                <div class="form-group col-md-4">
                                    <label for="city_id">اسم المدينة</label>
                                    <select class="form-control" name="city_id" style="width: 100%;"
                                        id="city_id" aria-label=".form-select-sm example">
                                        @foreach ($cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->name }}</option>

                                        @endforeach
                                    </select>
                                </div>



                                <div class="form-group col-md-4">
                                    <label for="gender">الجنس</label>
                                    <select class="form-control" name="gender" style="width: 100%;"
                                        id="gender" aria-label=".form-select-sm example">
                                        <option value="male">ذكر </option>
                                        <option value="female">انثي</option>
                                    </select>
                                </div>


                                <div class="form-group col-md-4">
                                    <label for="age">العمر</label>
                                    <input type="number" name="age" class="form-control"
                                        id="age" placeholder="ادخل العمر ">
                                </div>

                            </div>
                            <div class="row">


                            </div>


                        </div>

                        <br>

                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="button" onclick="performStore()" class="btn btn-lg btn-success">حفظ</button>
                            <a href="{{route('accountants.index')}}"><button type="button" class="btn btn-lg btn-primary">
                                    قائمة المحاسبين </button></a>
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

$('.city_id').select2({
      theme: 'bootstrap4'
    });




    function performStore() {

        let formData = new FormData();
            // formData.append('role_id',document.getElementById('role_id').value);
            formData.append('first_name',document.getElementById('first_name').value);
            formData.append('last_name',document.getElementById('last_name').value);
            formData.append('mobile',document.getElementById('mobile').value);
            formData.append('date_of_birth',document.getElementById('date_of_birth').value);
            formData.append('email',document.getElementById('email').value);
            formData.append('password',document.getElementById('password').value);
            formData.append('gender',document.getElementById('gender').value);
            formData.append('age',document.getElementById('age').value);
            formData.append('city_id',document.getElementById('city_id').value);


        store('/cms/admin/accountants',formData);

    }

</script>


@endsection
