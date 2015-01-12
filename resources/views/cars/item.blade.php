@extends('layouts.main')

@section('content')
  {{-- Cars Item --}}
  <div class="single-item">
    <div class="row">
      <div class="col-md-12">
        @include("cars._item-carousel")
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        @include("cars._item-title")
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        @include("cars._item-details")
        @include("social.widgets._social-footer")
      </div>
      <div class="col-md-4">
        @include("manufacturers._logo")
        @include("cars.widgets._similar-items")
      </div>
    </div>
  </div>


@stop