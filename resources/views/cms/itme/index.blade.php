@extends('cms.parent')
@section('title','التصنيفات ')


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
                      <div class="card-tools">
                          <a href="{{route('items.create')}}"><button type="button" class="btn btn-lg btn-primary">انشاء صنف جديد </button></a>
                          <br>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover table-bordered table-striped text-nowrap text-center">
              <thead>
                <tr class="bg-info">
                  <th> رقم الصنف </th>
                  <th>  اسم المنتج </th>
                  <th> السعر </th>
                  <th> الصورة </th>
                  <th> رقم المطبخ </th>
                  <th> الاعدادات </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($items as $item )
                <tr>
                  <td>{{$item->id}}</td>
                  <td>{{$item->name_product}}</td>
                  <td>{{$item->price}}</td>
                  <td>
                    <img class="img-circle img-bordered-sm" src="{{asset('storage/images/item'.$item->image)}}" width="60" height="60" alt="User Image">
                  </td>
                  <td>{{$item->kitchen_id}}</td>

                  <td>
                    <div class="btn-group">
                      {{-- @can('Edit-City') --}}
                      <a href="{{route('items.edit',$item->id)}}" class="btn btn-info" title="Edit">
                        تعديل
                        </a>
                      {{-- @endcan --}}
                      {{-- @can('Delete-City') --}}
                      <a href="#" onclick="performDestroy({{$item->id}}, this)" class="btn btn-danger" title="Delete">
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

                {{-- {{ $itmes->links() }} --}}

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
    let url = '/cms/admin/items/'+id;
    confirmDestroy(url, reference);
  }
 </script>
@endsection


