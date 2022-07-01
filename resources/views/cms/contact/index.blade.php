@extends('cms.parent')
@section('title','الرسائل')


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
                                     name='name' @if( request()->name) value={{request()->name}} @endif/>
                                    <span>
                                        <i class="flaticon2-search-1 text-muted"></i>
                                    </span>
                                  </div>

                                  <div class="input-icon col-md-2">
                                  <input type="text" class="form-control" placeholder=" Street Search"
                                     name='street' @if( request()->street) value={{request()->street}} @endif/>
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
                                <a href="{{route('cities.index')}}"  class="btn btn-danger">إنهاء البحث</a>
                                <a href="{{route('cities.create')}}"><button type="button" class="btn btn-md btn-primary">اضافة مدينة </button></a>
                          </div>

                               </div>
                      </form> --}}
                      <a href="{{route('restaurant.home')}}"><button type="button" class="btn btn-primary">انشاء طلب </button></a>
                      <div class="card-tools">
                          <br>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover table-bordered table-striped text-nowrap text-center">
              <thead>
                <tr class="bg-info">
                  <th> رقم الرسالة  </th>
                  <th>   اسم المرسل  </th>
                  <th>ايميل المرسل </th>
                  
                  <th> الموضوع  </th>
                  <th> الاعدادات </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($contacts as $contact )
                <tr>
                  <td>{{$contact->id}}</td>
                  {{-- <td>{{$contact->who}}</td> --}}
                  <td><span class="badge bg-blue">{{$contact->name}}</span></td>
                  <td >{{$contact->email }}</td>

                    <td >{{$contact->subject}}</td>

                  <td>
                      <div class="btn-group">
                      {{-- @can('Edit-City') --}}
                      <a href="{{route('contacts.edit',$contact->id)}}" class="btn btn-info" title="Edit">
                        تعديل
                        </a>
                      {{-- @endcan --}}
                      {{-- @can('Delete-City') --}}
                      <a href="#" onclick="performDestroy({{$contact->id}}, this)" class="btn btn-danger" title="Delete">
                        حذف
                      </a>
                      {{-- @endcan --}}

                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <div class="span text-center" style="margin-top: 20px; margin-bottom:10px">

                {{-- {{ $contacts->links() }} --}}

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
    let url = '/cms/admin/contacts/'+id;
    confirmDestroy(url, reference);
  }
 </script>
@endsection


