@extends('cms.parent')

@section('title' , 'kitchen index')

@section('styles')


@endsection

@section('main-title','Kitchen')

@section('sub-title','kitchen')

@section('content')

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"> عرض الطلبات </h3>
               <br>
              </div>
  
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover table-bordered table-striped text-nowrap text-center">
                <thead>
                  <tr class="bg-info">
                    <th class="col-3"> رقم الطاولة </th>
                    <th class="col-9">الطلبية</th>
                   </tr>
                </thead>
                <tbody>
                  {{-- @foreach ($rooms as $room ) --}}
                  <tr>
                    <td></td>
                    <td></td>
                  </tr>
                  {{-- @endforeach --}}
                </tbody>
              </table>
              <div class="span text-center" style="margin-top: 20px; margin-bottom:10px">
              {{-- { $cities->links()} --}}
              {{-- {{ $rooms->links() }} --}}
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


@endsection
