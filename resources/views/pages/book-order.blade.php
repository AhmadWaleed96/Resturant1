@extends('pages/master')

@section('title' , 'test title')

@section('styles')


@endsection

@section('main-title','test')

@section('sub-title','test')

@section('content')

<main id="main">
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Menu</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Menu</li>
                </ol>
            </div>

        </div>
        <!-- ---------------------------------------------------- -->
    </section>
    <!-- ---------------------------------------------------- -->
    <section>
        <div class="section-title text-center">
            <p>Book Order</p>
        </div>




        <div class="container mt-2 col-lg-12 col-md-6 ">
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
        </div>
    </section>



    <section id="book-order" class="book-order">
        <div class="container" data-aos="fade-up">



            <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <div class="col-lg-6 col-md-6 form-group">
                        <input type="text" name="name" class="form-control text-center" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>

                    <div class="col-lg-6 col-md-6 form-group mt-3 mt-md-0">
                        <input type="text" class="form-control text-center" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-6 col-md-6 form-group mt-3">
                        <select class="form-select text-center" aria-label="Default select example">
          <option selected>Governorate</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-6 col-md-6 form-group mt-3">
                        <select class="form-select text-center" aria-label="Default select example">
          <option selected>city</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-12 col-md-6 form-group mt-3">
                        <input type="text" class="form-control text-center" name="" id="" placeholder="Your street - your house number" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                        <div class="validate"></div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Book Order</button></div>
            </form>

        </div>
    </section>



</main>
<!-- End #main -->


@endsection


@section('scripts')


@endsection

  
  