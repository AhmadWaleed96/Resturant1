@extends('cms.parent')

@section('title' , 'waiter create')

@section('styles')


@endsection

@section('main-title','Waiter')

@section('sub-title','waiter')

@section('content')


<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Create Room</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              <form>
                @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-md-6">
                        <label for="table_number">Table Number</label>
                        <input type="number" class="form-control" name="table_number" value="" id="table_number" placeholder=" Enter Table Number">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="meal_name">Meal Name</label>
                        <input type="text" class="form-control" name="meal_name" value="" id="meal_name" placeholder=" Enter Meal Name">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="quantity">Quantity</label>
                        <input type="number" class="form-control" name="quantity" value="" id="quantity" placeholder=" Enter Quantity">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" name="price" value="" id="price" placeholder=" Enter Price">
                      </div>
                </div>

               
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="button" onclick="performStore()" class="btn btn-primary">Store</button>
                <a href="{{route('waiters.index')}}" type="submit" class="btn btn-success">return to index</a>
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
    function performStore(){
      let formData = new FormData();
      formData.append('table_number' , document.getElementById('table_number').value);
    formData.append('meal_name' , document.getElementById('meal_name').value);
    formData.append('quantity' , document.getElementById('quantity').value);
    formData.append('price' , document.getElementById('price').value);
      store('/cms/admin/waiters' , formData);
    }
  </script>
  

@endsection
