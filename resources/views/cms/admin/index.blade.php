@extends('cms.parent')
@section('title','Admin')


@section('styles')
  <style>

</style>
@endsection

@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            {{-- <form action="" method="get" style="margin-bottom:2%;">
                <div class="row">
                    <div class="input-icon col-md-2">
                        <input type="text" class="form-control" placeholder="Search By Title"
                           name='title' @if( request()->email) value={{request()->email}} @endif/>
                          <span>
                              <i class="flaticon2-search-1 text-muted"></i>
                          </span>
                        </div>

                        <div class="input-icon col-md-2">
                        <input type="text" class="form-control" placeholder=" General Search"
                           name='short_description' @if( request()->search) value={{request()->search}} @endif/>
                          <span>
                              <i class="flaticon2-search-1 text-muted"></i>
                          </span>
                        </div>

                        <div class="input-icon col-md-2">
                        <input type="date" class="form-control" placeholder="Search By Date"
                           name='created_at' @if( request()->created_at) value={{request()->created_at}} @endif/>
                          <span>
                              <i class="flaticon2-search-1 text-muted"></i>
                          </span>
                        </div>

                <div class="col-md-4">
                      <button class="btn btn-success btn-md" type="submit">فلتر البحث</button>
                      <a href="{{route('admins.index')}}"  class="btn btn-danger">إنهاء البحث</a>
                      <a href="{{route('admins.create')}}"><button type="button" class="btn btn-md btn-primary">إنشاء أدمن</button></a>
                </div>



              </div>
                </form> --}}


          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover table-bordered table-striped text-nowrap text-center">
              <thead>
                <tr class="bg-info">
                  <th>رقم المشرف</th>
                  <th>الاسم الاول</th>
                  <th>الاسم الاخير</th>
                  <th>العمر</th>
                  <th>الايميل</th>
                  <th>رقم المحمول</th>
                  <th>الصورةالشخصية</th>

                  <th> الاعدادات </th>
                    {{-- <td>
                  <td>{{$admin->user ? $admin->user->first_name . ' '.  $admin->user->last_name : "Null"}}</td>
                  </td> --}}
                </tr>
              </thead>
              <tbody>
                @foreach ($admins as $admin )
                <tr>
                  <td>{{$admin->id}}</td>
                  <td>{{$admin->user->first_name}}</td>
                  <td>{{$admin->user->last_name}}</td>
                  <td>{{$admin->user->number}}</td>
                  <td>{{$admin->user->age}}</td>
                  <td>{{$admin->user->email}}</td>
                  <td>{{$admin->user->password}}</td>
                  <td>{{$admin->user->city}}</td>
                  <td>{{$admin->user->gender}}</td>
                  <td>
                    {{-- <img class="img-circle img-bordered-sm" src="{{asset('/images/admin/'.$admin->image)}}" width="60" height="60" alt="User Image"> --}}
                  </td>


                  <td>
                    <div class="btn">
                      <div><h1>ahmed</h1></div>
                      <a href="{{route('admins.edit',$admin->id)}}" class="btn btn-info" title="Edit">
                        تعديل
                        </a>

                      <a href="#" onclick="performDestroy({{$admin->id}}, this)" class="btn btn-danger" title="Delete">
                        حذف
                      </a>

                      <a href="{{route('admins.show',$admin->id)}}" class="btn btn-success" title="Show">
                        معلومات
                      </a>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <div class="span text-center" style="margin-top: 20px; margin-bottom:10px">
            {{ $admins->links() }}
        </span>

          </div>
          <!-- /.card-body -->

        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>

@endsection

@section('scripts')

 <script>
  function performDestroy(id, reference){
    let url = '/cms/admin/admins/'+id;
    confirmDestroy(url, reference);
  }
 </script>
@endsection


