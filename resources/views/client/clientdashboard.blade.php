@extends('layouts.app')

@section('client')

<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="true">Makanan</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-drink-tab" data-toggle="pill" href="#pills-drink" role="tab" aria-controls="pills-drink" aria-selected="false">Minuman</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-order-status-tab" data-toggle="pill" href="#pills-order-status" role="tab" aria-controls="pills-order-status" aria-selected="false">Status Pemesanan</a>
    </li>
</ul>

<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
    </div>
    <div class="tab-pane fade" id="pills-drink" role="tabpanel" aria-labelledby="pills-drink-tab">
    </div>
    <div class="tab-pane fade" id="pills-order-status" role="tabpanel" aria-labelledby="pills-order-status-tab">

    </div>
</div>

@endsection
