@extends('cms.parent')
@section('title','Book Table')


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
            

          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover table-bordered table-striped text-nowrap text-center">
              <thead>
                <tr class="bg-info">
                  <th>الاسم</th>
                  <th>الايميل</th>
                  <th>رقم الجوال</th>
                  <th>التاريخ</th>
                  <th>الوقت</th>
                  <th>عدد الاشخاص</th>
                  <th>ملاحظات</th>
                  <th> الاعدادات </th>
                    {{-- <td>
                  <td>{{$admin->user ? $admin->user->first_name . ' '.  $admin->user->last_name : "Null"}}</td>
                  </td> --}}
                </tr>
              </thead>
              <tbody>
                @foreach ($booktables as $booktable )
                <tr>
                  <td>{{$booktable->name}}</td>
                  <td>{{$booktable->email}}</td>
                  <td>{{$booktable->mobile}}</td>
                  <td>{{$booktable->date}}</td>
                  <td>{{$booktable->time}}</td>
                  <td>{{$booktable->number_of_people}}</td> 
                  <td>{{$booktable->nots}}</td>                  
                  <td>
                    {{-- <img class="img-circle img-bordered-sm" src="{{asset('/images/admin/'.$admin->image)}}" width="60" height="60" alt="User Image"> --}}
                  </td>
                  

                  <td>
                    <div class="btn">
                      <a href="" class="btn btn-info" title="Edit">
                        تعديل
                        </a>

                      <a href="#" onclick="performDestroy({{$booktable->id}}, this)" class="btn btn-danger" title="Delete">
                        حذف
                      </a>

                      <a href="{{route('booktables.show',$booktable->id)}}" class="btn btn-success" title="Show">
                        معلومات
                      </a>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <div class="span text-center" style="margin-top: 20px; margin-bottom:10px">
            {{-- {{ $admins->links() }} --}}
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
    let url = '/cms/admin/booktables/'+id;
    confirmDestroy(url, reference);
  }
 </script>
@endsection


