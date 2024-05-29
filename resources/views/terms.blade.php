@extends('layout.app')

@section('content')
<div class="row">
    <div class="col-3">
        @include('shared.left-sidebar')
    </div>
    <div class="col-6">
        <h1>Terms</h1>
        <div>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque distinctio rerum id temporibus ex ipsa iste
            nobis
            aliquam deserunt suscipit quaerat, recusandae vel aliquid perferendis assumenda magni sed tenetur modi.
        </div>
    </div>
    <div class="col-3">
        @include('shared.search-bar')
        @include('shared.follow-box')
    </div>
@endsection
