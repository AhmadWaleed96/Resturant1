@extends('pages/master')

@section('title' , 'test title')

@section('styles')


@endsection

@section('main-title','test')

@section('sub-title','test')

@section('content')
<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Inner Page</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Inner Page</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs Section -->

        

      <section id="one">
        <div class="card ">
          <div class="card-body text-center">
            <h5 class="card-title">اكتب بياناتك يا اهبل</h5>

           
            <form>
              <div class="row mb-3">
                <div>
                <label for="inputText" class="col-sm-6 col-form-label">اسمك يا اهبل</label>
              </div>
                <div class="col-sm-12">
                  <input type="text" class="form-control">
                </div>
              </div>
              
             
              <div class="row mb-3">
                <div>
                <label for="inputNumber" class="col-sm-6 col-form-label">رقم جوالك يا طفس</label>
              </div>
                <div class="col-sm-12">
                  <input type="number" class="form-control">
                </div>
              </div>
              
             
             

              <div class="row mb-3">
                <div>
                <label class="col-sm-6 col-form-label">وين ساكن يا اهبل</label>
              </div>
                <div class="col-sm-12">
                  <select class="form-select text-center" aria-label="Default select example">
                    <option selected>وين ساكن يا اهبل</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
              </div>

              

              <div class="row mb-3">
                <div class="col-sm-12">
                  <button type="submit" class="btn btn-primary">Submit Form</button>
                </div>
              </div>

            </form>

          </div>
        </div>
          </section>

          
          <section id="two">
            <div>
              <table class="table table-dark text-center">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Age</th>
                    <th scope="col">Start Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    <td>28</td>
                    <td>2016-05-25</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Bridie Kessler</td>
                    <td>Developer</td>
                    <td>35</td>
                    <td>2014-12-05</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Ashleigh Langosh</td>
                    <td>Finance</td>
                    <td>45</td>
                    <td>2011-08-12</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Angus Grady</td>
                    <td>HR</td>
                    <td>34</td>
                    <td>2012-06-11</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Raheem Lehner</td>
                    <td>Dynamic Officer</td>
                    <td>47</td>
                    <td>2011-04-19</td>
                  </tr>
                  
                </tbody>
              </table>
                       </div>
          </section>

</main><!-- End #main -->

@endsection


@section('scripts')


@endsection
  