@extends('cms.parent')

@section('title' , 'waiter index')

@section('styles')


@endsection

@section('main-title','Waiter')

@section('sub-title','waiter')

@section('content')

<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <a href="{{route('waiters.create')}}" class="btn btn-primary">Add New order</a>


    </div>
    <div class="card-header card-header-icon card-header-rose bg-danger">
      <div class="card-icon">
        
      </div>
      <h4 class="card-title">Orders</h4>
    </div>
    <div class="card-body table-full-width table-hover">
      <div class="table-responsive">
        <table class="table text-center">
          <thead class="">
            <th>ID</th>
            <th>Table Number</th>
            <th>Meal Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>seeting</th>
          </thead>
          <tbody>
            {{-- @foreach ( $waiters as $waiter ) --}}
            <tr class="table-success">
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>

              <td class="d-flex justify-content-center">

                <a href="" type="button"  class="btn btn-primary">Edit</a>
                                 
               <a href="#" onclick="" class="btn btn-danger">Delete</a>
                               
                <button type="button" class="btn btn-success">Show</button>
       
                             </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection


@section('scripts')
<script>
  function performDestroy(id, reference){
   
    confirmDestroy('/cms/admin/waiters/'+id, reference);
  }
  </script>

@endsection
