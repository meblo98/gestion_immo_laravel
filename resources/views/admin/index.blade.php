

@extends('layout.sidebar')

@section('content')
<div class="main-panel">
    <div class="content-wrapper pb-0">
      <div class="page-header flex-wrap">
        <div class="header-left">
          <button class="btn btn-primary mb-2 mb-md-0 me-2">Create new document</button>
          <button class="btn btn-outline-primary bg-white mb-2 mb-md-0">Import documents</button>
        </div>
        <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
          <div class="d-flex align-items-center">
            <a href="#">
              <p class="m-0 pe-3">Dashboard</p>
            </a>
            <a class="ps-3 me-4" href="#">
              <p class="m-0">ADE-00234</p>
            </a>
          </div>
          <button type="button" class="btn btn-primary mt-2 mt-sm-0 btn-icon-text">
            <i class="mdi mdi-plus-circle"></i> <a href="{{route('ajout')}}">Ajouter un bien</a> </button>
        </div>
      </div>
      <div class="row">
        @foreach ($biens as $bien)
        <div class="col-sm-4 stretch-card grid-margin">
          <div class="card">
            <div class="card-body p-0">
              <img class="img-fluid w-100" src="{{ $bien->url_image }}" alt="">
            </div>
            <div class="card-body px-3 text-dark">
              <div class="d-flex justify-content-between">
                <p class="text-muted font-13 mb-0">{{ $bien->localisation }}</p>
                <i class="mdi mdi-heart-outline"></i>
              </div>
              <h5 class="fw-semibold">{{ $bien->nom }}</h5>
              <div class="d-flex justify-content-between fw-semibold">
                <p class="mb-0"><i class="mdi mdi-star star-color pe-1"></i>3.83 (15)</p>
                <p class="mb-0">{{ $bien->prix }} FCFA</p>
              </div>
            </div>
          </div>
        </div>

        @endforeach
      </div>

@endsection