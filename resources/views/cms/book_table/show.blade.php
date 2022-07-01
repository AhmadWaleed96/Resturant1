{{-- Extends layout --}}

@extends('cms.parent')

@section('title','عروض المجموعات')

{{-- Content --}}
@section('styles')
<style>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

</style>


@endsection
@section('content')
<div class="d-flex flex-column-fluid">
    <div class="container">
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Profile 4-->
                <div class="d-flex flex-row">

                    <div class="flex-row-fluid ml-lg-8">

                        <!--end::Row-->
                        <!--begin::Advance Table Widget 8-->
                        <div class="card card-custom gutter-b">
                            <!--begin::Header-->
                            <div class="card-header border-0 py-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label font-weight-bolder text-dark">معلومات الحجز الخاصة
                                        بالمطعم</span>

                                </h3>
                                <div class="card-toolbar">

                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            {{--  @foreach ($booktables as $booktable)  --}}
                            <div class="card-body pt-0 pb-3">
                                <div class="row clearfix">

                                    <!--begin::Table-->

                                    <div class="form-group col-md-6">
                                        <label for="name">الاسم</label>
                                        <input type="text" class="form-control form-control-solid" name="name" value="{{ $booktables->name }}" id="name" disabled>
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="email">الايميل</label>
                                        <input type="text" class="form-control form-control-solid" name="email" value="{{ $booktables->email }}" id="email" disabled>
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="mobile">الهاتف</label>
                                        <input type="text" class="form-control form-control-solid" name="mobile" value="{{ $booktables->mobile }}" id="mobile" disabled>
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="number_of_people">عدد الاشخاص</label>
                                        <input type="text" class="form-control form-control-solid" name="number_of_people" value="{{ $booktables->number_of_people }}" id="number_of_people" disabled>
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="date">تاريخ الحجز</label>
                                        <input type="text" class="form-control form-control-solid" name="date" value="{{ $booktables->date }}" id="date" disabled>
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="time">وقت الحجز</label>
                                        <input type="text" class="form-control form-control-solid" name="time" value="{{ $booktables->time }}" id="time" disabled>
                                      </div>


                            <div class="row">

                        </div>

                        <!--end::Table-->
                    </div>
                    <!--end::Body-->
                    <br>
                    <hr style="background-color: black;">
                    <br>

                    {{--  @endforeach  --}}
                    <a href="{{route('booktables.index')}}"> <button type="button" class="btn btn-primary mr-6" > العودة لصفحة العرض</button></a>

                </div>
                <!--end::Advance Table Widget 8-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Profile 4-->
    </div>
    <!--end::Container-->
</div>
</div>
</div>

@endsection


@section('scripts')

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script src="{{asset('crudjs/crud.js')}}"></script>



@endsection
