@extends('cms.parent')
@section('title','القرصون  ')

@section('left-title','عرض القرصون ')

@section('sub-title','عرض القرصون ')

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
            <form action="" method="get" style="margin-bottom:2%;">
                <div class="row">
                    {{-- <div class="input-icon col-md-2">
                        <input type="text" class="form-control" placeholder="بحث باستخدام الايميل"
                           name='email' @if( request()->email) value={{request()->email}} @endif/>
                          <span>
                              <i class="flaticon2-search-1 text-muted"></i>
                          </span>
                        </div> --}}

                        {{-- <div class="input-icon col-md-2">
                        <input type="text" class="form-control" placeholder="بحث باستخدام الاسم"
                           name='name' @if( request()->name) value={{request()->name}} @endif/>
                          <span>
                              <i class="flaticon2-search-1 text-muted"></i>
                          </span>
                        </div> --}}

                        {{-- <div class="input-icon col-md-2">
                        <input type="date" class="form-control" placeholder="بحث باستخدام تاريخ الاضافة"
                           name='created_at' @if( request()->created_at) value={{request()->created_at}} @endif/>
                          <span>
                              <i class="flaticon2-search-1 text-muted"></i>
                          </span>
                        </div> --}}

                <div class="col-md-4">
                      {{-- <button class="btn btn-success btn-md" type="submit">فلتر البحث</button>
                      <a href="{{route('qarsons.index')}}"  class="btn btn-danger">إنهاء البحث</a> --}}
                      <a href="{{route('qarsons.create')}}"><button type="button" class="btn btn-md btn-primary">إنشاء قرصون</button></a>
                </div>



              </div>
        </form>


          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover table-bordered table-striped text-nowrap text-center">
              <thead>
                <tr class="bg-info">
                  {{-- <th> رقم المشرف </th> --}}
                  <th>  اسم القرصون  </th>
                  <th>  تاريخ الميلاد </th>
                  <th>  الأيميل </th>
                  <th>    فترة العمل  </th>
                  <th>   رقم الجوال </th>

                  <th> الاعدادات </th>
                    {{-- <td>
                  <td>{{$qarson->user ? $qarson->user->first_name . ' '.  $qarson->user->last_name : "Null"}}</td>
                  </td> --}}
                </tr>
              </thead>
              <tbody>
                @foreach ($qarsons as $qarson )
                <tr>
                  {{-- <td>{{$qarson->id}}</td> --}}

                  <td>{{$qarson->user ? $qarson->user->first_name . ' ' . $qarson->user->last_name : "Null"}}</td>
                  <td>{{$qarson->user ? $qarson->user->date_of_birth : "Null"}}</td>
                  <td>{{$qarson->email}}</td>
                  <td>  {{ $qarson->working_period }}</td>
                  <td>{{$qarson->user ? $qarson->user->mobile : "Null"}}</td>

                  <td>
                    <div class="btn">
                      <a href="{{route('qarsons.edit',$qarson->id)}}" class="btn btn-info" title="Edit">
                        تعديل
                        </a>

                      <a href="#" onclick="performDestroy({{$qarson->id}}, this)" class="btn btn-danger" title="Delete">
                        حذف
                      </a>

                      <a href="{{route('qarsons.show',$qarson->id)}}" class="btn btn-success" title="Show">
                        معلومات
                      </a>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <div class="span text-center" style="margin-top: 20px; margin-bottom:10px">

                {{ $qarsons->links() }}

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
    let url = '/cms/admin/qarsons/'+id;
    confirmDestroy(url, reference);
  }
 </script>
@endsection


