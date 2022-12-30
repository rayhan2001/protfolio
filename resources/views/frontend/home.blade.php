@extends('master.frontend_app')
@section('content')
    <!-- ======= About Section ======= -->
    @include('frontend.elements.about_section')
    <!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    @include('frontend.elements.skill_section')
    <!-- End Skills Section -->

    <!-- ======= Services Section ======= -->
    @include('frontend.elements.services_section')
    <!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    @include('frontend.elements.protfolio_section')
    <!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    @include('frontend.elements.contact_section')
    <!-- End Contact Section -->
@endsection
