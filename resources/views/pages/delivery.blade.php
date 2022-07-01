@extends('pages/master')

@section('title' , ' Delivery')

@section('styles')


@endsection

@section('main-title','test')

@section('sub-title','test')

@section('content')

<main id="main">
    <section class="breadcrumbs">
        <div class="container">


            {{--  @endforeach  --}}
            <!-- ======= Delivery Section ======= -->
            <section id="delivery" class="delivery section-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Delivery</h2>
                        <p>Check Our Tasty Menu Delivery</p>
                    </div>

                    <div class="row" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <ul id="menu-flters">
                                <li data-filter="*" class="filter-active">All</li>
                                <li data-filter=".filter-starters">Starters</li>
                                <li data-filter=".filter-salads">Salads</li>
                                <li data-filter=".filter-specialty">Specialty</li>
                            </ul>
                        </div>
                    </div>

                    <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
                        {{--  @foreach ($Deliverys as $Delivery)  --}}

                        <div class="col-lg-6 menu-item filter-starters" id="product1">
                            <a href="assets/img/menu/lobster-bisque.jpg" class="menu-img gallery-lightbox" data-gall="gallery-item">
                                <img src="{{asset('pages/assets/img/menu/lobster-bisque.jpg')}}" alt="" class="img-fluid">
                            </a>
                            <div class="menu-content">
                                <a href="#" id="product">Lobster Bisque</a><span>$<span id="price">6</span></span>
                            </div>
                            <div class="menu-ingredients">
                                Lorem, deren, trataro, filede, nerada
                            </div>
                            <div class="buy d-flex justify-content-end">
                                <input type="number" id="count" class="border-0 rounded-1 m-2 w-25 d-block link-light" style="background: #0c0b09; border-color: #625b4b;">
                                <button type="button" onclick="addList(this)" class="addtocart btn d-block" style="background-color: #cda45e; color: white;">Add Cart</button>
                            </div>

                        </div>

                        <div class="col-lg-6 menu-item filter-specialty" id="product2">
                            <a href="assets/img/menu/bread-barrel.jpg" class="menu-img gallery-lightbox" data-gall="gallery-item">
                                <img src="{{asset('pages/assets/img/menu/bread-barrel.jpg')}}" alt="" class="img-fluid">
                            </a>
                            <div class="menu-content">
                                <a href="#" id="product">Bread Barrel</a><span>$<span class="price">7</span></span>
                            </div>
                            <div class="menu-ingredients">
                                Lorem, deren, trataro, filede, nerada
                            </div>
                            <div class="buy d-flex justify-content-end">
                                <input type="number" id="count" class="border-0 rounded-1 m-2 w-25 d-block link-light" style="background: #0c0b09; border-color: #625b4b;">
                                <button type="button" onclick="addList(this)" class="addtocart btn d-block" style="background-color: #cda45e; color: white;">Add Cart</button>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item filter-starters" id="product3">
                            <a href="assets/img/menu/cake.jpg" class="menu-img gallery-lightbox" data-gall="gallery-item">
                                <img src="{{asset('pages/assets/img/menu/cake.jpg')}}" alt="" class="img-fluid">
                            </a>
                            <div class="menu-content">
                                <a href="#" id="product">Crab Cake</a><span>$<span class="price">8</span></span>
                            </div>
                            <div class="menu-ingredients">
                                A delicate crab cake served on a toasted roll with lettuce and tartar sauce
                            </div>
                            <div class="buy d-flex justify-content-end">
                                <input type="number" id="count" class="border-0 rounded-1 m-2 w-25 d-block link-light" style="background: #0c0b09; border-color: #625b4b;">
                                <button type="button" onclick="addList(this)" class="addtocart btn d-block" style="background-color: #cda45e; color: white;">Add Cart</button>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item filter-salads" id="product4">
                            <a href="assets/img/menu/caesar.jpg" class="menu-img gallery-lightbox" data-gall="gallery-item">
                                <img src="{{asset('pages/assets/img/menu/caesar.jpg')}}" alt="" class="img-fluid">
                            </a>
                            <div class="menu-content">
                                <a href="#" id="product">Caesar Selections</a><span>$<span class="price">9</span></span>
                            </div>
                            <div class="menu-ingredients">
                                Lorem, deren, trataro, filede, nerada
                            </div>
                            <div class="buy d-flex justify-content-end">
                                <input type="number" id="count" class="border-0 rounded-1 m-2 w-25 d-block link-light" style="background: #0c0b09; border-color: #625b4b;">
                                <button type="button" onclick="addList(this)" class="addtocart btn d-block" style="background-color: #cda45e; color: white;">Add Cart</button>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item filter-specialty" id="product5">
                            <a href="assets/img/menu/tuscan-grilled.jpg" class="menu-img gallery-lightbox" data-gall="gallery-item">
                                <img src="{{asset('pages/assets/img/menu/tuscan-grilled.jpg')}}" alt="" class="img-fluid">
                            </a>
                            <div class="menu-content">
                                <a href="#" id="product">Tuscan Grilled</a><span>$<span class="price">10</span></span>
                            </div>
                            <div class="menu-ingredients">
                                Grilled chicken with provolone, artichoke hearts, and roasted red pesto
                            </div>
                            <div class="buy d-flex justify-content-end">
                                <input type="number" id="count" class="border-0 rounded-1 m-2 w-25 d-block link-light" style="background: #0c0b09; border-color: #625b4b;">
                                <button type="button" onclick="addList(this)" class="btn d-block" style="background-color: #cda45e; color: white;">Add Cart</button>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item filter-starters" id="product6">
                            <a href="assets/img/menu/mozzarella.jpg" class="menu-img gallery-lightbox" data-gall="gallery-item">
                                <img src="{{asset('pages/assets/img/menu/mozzarella.jpg')}}" alt="" class="img-fluid">
                            </a>
                            <div class="menu-content">
                                <a href="#" id="product">Mozzarella Stick</a><span>$<span class="price">5</span></span>
                            </div>
                            <div class="menu-ingredients">
                                Lorem, deren, trataro, filede, nerada
                            </div>
                            <div class="buy d-flex justify-content-end">
                                <input type="number" id="count" class="border-0 rounded-1 m-2 w-25 d-block link-light" style="background: #0c0b09; border-color: #625b4b;">
                                <button type="button" onclick="addList(this)" class="btn d-block" style="background-color: #cda45e; color: white;">Add Cart</button>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item filter-salads" id="product7">
                            <a href="assets/img/menu/greek-salad.jpg" class="menu-img gallery-lightbox" data-gall="gallery-item">
                                <img src="{{asset('pages/assets/img/menu/greek-salad.jpg')}}" alt="" class="img-fluid">
                            </a>
                            <div class="menu-content">
                                <a href="#" id="product">Greek Salad</a><span>$<span class="price">10</span></span>
                            </div>
                            <div class="menu-ingredients">
                                Fresh spinach, crisp romaine, tomatoes, and Greek olives
                            </div>
                            <div class="buy d-flex justify-content-end">
                                <input type="number" id="count" class="border-0 rounded-1 m-2 w-25 d-block link-light" style="background: #0c0b09; border-color: #625b4b;">
                                <button type="button" onclick="addList(this)" class="btn d-block" style="background-color: #cda45e; color: white;">Add Cart</button>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item filter-salads" id="product8">
                            <a href="assets/img/menu/spinach-salad.jpg" class="menu-img gallery-lightbox" data-gall="gallery-item">
                                <img src="{{asset('pages/assets/img/menu/spinach-salad.jpg')}}" alt="" class="img-fluid">
                            </a>
                            <div class="menu-content">
                                <a href="#" id="product">Spinach Salad</a><span>$<span class="price">10</span></span>
                            </div>
                            <div class="menu-ingredients">
                                Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette
                            </div>
                            <div class="buy d-flex justify-content-end">
                                <input type="number" id="count" class="border-0 rounded-1 m-2 w-25 d-block link-light" style="background: #0c0b09; border-color: #625b4b;">
                                <button type="button" onclick="addList(this)" class="btn d-block" style="background-color: #cda45e; color: white;">Add Cart</button>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item filter-specialty" id="product9">
                            <a href="assets/img/menu/lobster-roll.jpg" class="menu-img gallery-lightbox" data-gall="gallery-item">
                                <img src="{{asset('pages/assets/img/menu/lobster-roll.jpg')}}" alt="" class="img-fluid">
                            </a>
                            <div class="menu-content">
                                <a href="#" id="product">Lobster Roll</a><span>$<span class="price">13</span></span>
                            </div>
                            <div class="menu-ingredients">
                                Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll
                            </div>
                            <div class="buy d-flex justify-content-end">
                                <input type="number" id="count" class="border-0 rounded-1 m-2 w-25 d-block link-light" style="background: #0c0b09; border-color: #625b4b;">
                                <button type="button"  onclick="addList(this) , performStore()"   class="btn d-block" style="background-color: #cda45e; color: white;">Add Cart</button>
                            </div>
                        </div>
                        {{--  @endforeach  --}}
                        {{--  onclick="addList(this)"  --}}
                    </div>

                    <hr>


                    <div class="row">
                        <table>
                            <thead>
                                <th>product</th>
                                <th>price</th>
                                <th>count</th>
                                <th>total</th>
                                <th><button type=" button" id="dALL" class="btn" style="background-color: #cda45e; color: white;">delete All</button></th>
                            </thead>
                            <tbody id="tableShow">


                            </tbody>
                            <tfoot>
                                {{--  <button performStore()>Buy</button>  --}}
                                {{--  <button type="button" onclick="performStore()" class="btn btn-lg btn-success">buy</button>  --}}

                            </tfoot>
                        </table>

                    </div>
                </div>


        </div>
        </section>
        <!-- End Delivery Section -->

        </div>
    </section>
</main>

@endsection


@section('scripts')
<script src="{{ asset('pages/assets/js/crud.js') }}"></script>
<script>
    function performStore(){
      let formData = new FormData();
      formData.append('product' , document.getElementById('product').value);
      formData.append('price' , document.getElementById('price').value);
      formData.append('count' , document.getElementById('count').value);
      formData.append('total' , document.getElementById('total').value);

      store('/pages/admin/sells' , formData);
    }

  </script>


@endsection







