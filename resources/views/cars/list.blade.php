@extends('layouts.main')

@section('content')
  @include("search.header")
  {{-- List Cars --}}
  <div class="vehicles">
    <div class="vehicles-list row">
      @for($f=1; $f<= 25; $f++)
        @include("cars._list-item")
      @endfor
    </div>
  </div>
@stop