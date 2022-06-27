
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
            <section id="login-page" class="login-page">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h1 class="text-center">Login</h1>
                    </div>

                    <form action="forms/book-a-table.php " method="post " role="form " class="php-email-form " data-aos="fade-up " data-aos-delay="100 ">
                        <div class="row ">
                        </div>
                        <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0 ">
                            <input type="email " class="form-control " name="email " id="email " placeholder="Enter Your Email " data-rule="email " data-msg="Please enter a valid email ">
                            <div class="validate "></div>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0 ">
                            <input type="password " class="form-control " name="Password " id="Password " placeholder="Enter Your Password " data-rule="minlen:4 " data-msg="Please enter a valid password ">
                            <div class="validate "></div>
                        </div>
                        <div class="text-center "><button type="submit">Login</button></div>
                </div>
                </form>

        </div>
        </section>
        <!-- End login Section -->

        </div>
    </section>
</main>
<!-- End #main -->



@endsection


@section('scripts')

@endsection

