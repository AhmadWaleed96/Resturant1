@extends('cms/parent')

@section('title' , 'test title')

@section('styles')


@endsection

@section('main-title','test')

@section('sub-title','test')

@section('content')

<main id="main">
    <section class="breadcrumbs">
        <div class="container">
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

                        <div class="col-lg-6 menu-item filter-starters">
                            <a href="assets/img/menu/lobster-bisque.jpg" class="menu-img gallery-lightbox" data-gall="gallery-item">
                                <img src="{{asset('pages/assets/img/menu/lobster-bisque.jpg')}}" alt="" class="img-fluid">
                            </a>
                            <div class="menu-content">
                                <a href="#" id="proname">Lobster Bisque</a><span>$<span id="price">5.95</span></span>
                            </div>
                            <div class="menu-ingredients">
                                Lorem, deren, trataro, filede, nerada
                            </div>
                            <div class="buy d-flex justify-content-end">
                                <input type="number" id="countPro" class="border-0 rounded-1 m-2 w-25 d-block link-light" style="background: #0c0b09; border-color: #625b4b;">
                                <button type="button" onclick="addList(this)" class="addtocart btn d-block" style="background-color: #cda45e; color: white;">Add Cart</button>
                            </div>

                        </div>

                        <div class="col-lg-6 menu-item filter-specialty">
                            <a href="assets/img/menu/bread-barrel.jpg" class="menu-img gallery-lightbox" data-gall="gallery-item">
                                <img src="{{asset('pages/assets/img/menu/bread-barrel.jpg')}}" alt="" class="img-fluid">
                            </a>
                            <div class="menu-content">
                                <a href="#" id="proname1">Bread Barrel</a><span>$<span class="price">6.95</span></span>
                            </div>
                            <div class="menu-ingredients">
                                Lorem, deren, trataro, filede, nerada
                            </div>
                            <div class="buy d-flex justify-content-end">
                                <input type="number" id="countPro" class="border-0 rounded-1 m-2 w-25 d-block link-light" style="background: #0c0b09; border-color: #625b4b;">
                                <button type="button" onclick="addList(this)" class="addtocart btn d-block" style="background-color: #cda45e; color: white;">Add Cart</button>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item filter-starters">
                            <a href="assets/img/menu/cake.jpg" class="menu-img gallery-lightbox" data-gall="gallery-item">
                                <img src="{{asset('pages/assets/img/menu/cake.jpg')}}" alt="" class="img-fluid">
                            </a>
                            <div class="menu-content">
                                <a href="#" id="proname2">Crab Cake</a><span>$<span class="price">7.95</span></span>
                            </div>
                            <div class="menu-ingredients">
                                A delicate crab cake served on a toasted roll with lettuce and tartar sauce
                            </div>
                            <div class="buy d-flex justify-content-end">
                                <input type="number" id="countPro" class="border-0 rounded-1 m-2 w-25 d-block link-light" style="background: #0c0b09; border-color: #625b4b;">
                                <button type="button" onclick="addList(this)" class="addtocart btn d-block" style="background-color: #cda45e; color: white;">Add Cart</button>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item filter-salads">
                            <a href="assets/img/menu/caesar.jpg" class="menu-img gallery-lightbox" data-gall="gallery-item">
                                <img src="{{asset('pages/assets/img/menu/caesar.jpg')}}" alt="" class="img-fluid">
                            </a>
                            <div class="menu-content">
                                <a href="#" id="proname3">Caesar Selections</a><span>$<span class="price">8.95</span></span>
                            </div>
                            <div class="menu-ingredients">
                                Lorem, deren, trataro, filede, nerada
                            </div>
                            <div class="buy d-flex justify-content-end">
                                <input type="number" id="countPro" class="border-0 rounded-1 m-2 w-25 d-block link-light" style="background: #0c0b09; border-color: #625b4b;">
                                <button type="button" onclick="addList(this)" class="addtocart btn d-block" style="background-color: #cda45e; color: white;">Add Cart</button>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item filter-specialty">
                            <a href="assets/img/menu/tuscan-grilled.jpg" class="menu-img gallery-lightbox" data-gall="gallery-item">
                                <img src="{{asset('pages/assets/img/menu/tuscan-grilled.jpg')}}" alt="" class="img-fluid">
                            </a>
                            <div class="menu-content">
                                <a href="#" id="proname4">Tuscan Grilled</a><span>$<span class="price">9.95</span></span>
                            </div>
                            <div class="menu-ingredients">
                                Grilled chicken with provolone, artichoke hearts, and roasted red pesto
                            </div>
                            <div class="buy d-flex justify-content-end">
                                <input type="number" id="countPro" class="border-0 rounded-1 m-2 w-25 d-block link-light" style="background: #0c0b09; border-color: #625b4b;">
                                <button type="button" onclick="addList(this)" class="btn d-block" style="background-color: #cda45e; color: white;">Add Cart</button>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item filter-starters">
                            <a href="assets/img/menu/mozzarella.jpg" class="menu-img gallery-lightbox" data-gall="gallery-item">
                                <img src="{{asset('pages/assets/img/menu/mozzarella.jpg')}}" alt="" class="img-fluid">
                            </a>
                            <div class="menu-content">
                                <a href="#" id="proname5">Mozzarella Stick</a><span>$<span class="price">4.95</span></span>
                            </div>
                            <div class="menu-ingredients">
                                Lorem, deren, trataro, filede, nerada
                            </div>
                            <div class="buy d-flex justify-content-end">
                                <input type="number" id="countPro" class="border-0 rounded-1 m-2 w-25 d-block link-light" style="background: #0c0b09; border-color: #625b4b;">
                                <button type="button" onclick="addList(this)" class="btn d-block" style="background-color: #cda45e; color: white;">Add Cart</button>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item filter-salads">
                            <a href="assets/img/menu/greek-salad.jpg" class="menu-img gallery-lightbox" data-gall="gallery-item">
                                <img src="{{asset('pages/assets/img/menu/greek-salad.jpg')}}" alt="" class="img-fluid">
                            </a>
                            <div class="menu-content">
                                <a href="#" id="proname6">Greek Salad</a><span>$<span class="price">9.95</span></span>
                            </div>
                            <div class="menu-ingredients">
                                Fresh spinach, crisp romaine, tomatoes, and Greek olives
                            </div>
                            <div class="buy d-flex justify-content-end">
                                <input type="number" id="countPro" class="border-0 rounded-1 m-2 w-25 d-block link-light" style="background: #0c0b09; border-color: #625b4b;">
                                <button type="button" onclick="addList(this)" class="btn d-block" style="background-color: #cda45e; color: white;">Add Cart</button>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item filter-salads">
                            <a href="assets/img/menu/spinach-salad.jpg" class="menu-img gallery-lightbox" data-gall="gallery-item">
                                <img src="{{asset('pages/assets/img/menu/spinach-salad.jpg')}}" alt="" class="img-fluid">
                            </a>
                            <div class="menu-content">
                                <a href="#" id="proname7">Spinach Salad</a><span>$<span class="price">9.95</span></span>
                            </div>
                            <div class="menu-ingredients">
                                Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette
                            </div>
                            <div class="buy d-flex justify-content-end">
                                <input type="number" id="countPro" class="border-0 rounded-1 m-2 w-25 d-block link-light" style="background: #0c0b09; border-color: #625b4b;">
                                <button type="button" onclick="addList(this)" class="btn d-block" style="background-color: #cda45e; color: white;">Add Cart</button>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item filter-specialty">
                            <a href="assets/img/menu/lobster-roll.jpg" class="menu-img gallery-lightbox" data-gall="gallery-item">
                                <img src="{{asset('pages/assets/img/menu/lobster-roll.jpg')}}" alt="" class="img-fluid">
                            </a>
                            <div class="menu-content">
                                <a href="#" id="proname8">Lobster Roll</a><span>$<span class="price">12.95</span></span>
                            </div>
                            <div class="menu-ingredients">
                                Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll
                            </div>
                            <div class="buy d-flex justify-content-end">
                                <input type="number" id="countPro" class="border-0 rounded-1 m-2 w-25 d-block link-light" style="background: #0c0b09; border-color: #625b4b;">
                                <button type="button" onclick="addList(this)" class="btn d-block" style="background-color: #cda45e; color: white;">Add Cart</button>
                            </div>
                        </div>

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


@endsection

  
    

   
   
    
   