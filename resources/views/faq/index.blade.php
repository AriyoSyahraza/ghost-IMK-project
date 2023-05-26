@extends('master')

@section('content')
<div>
    <div class="row">
          <div class="col-lx-12">
              <div class="card">
                  <div class="card-body">
                    <div class="row justify-content-center mt-4">
                        <div class="col-xl-5 col-lg-8">
                            <div class="text-center">
                                <h3>Pernyataan yang sering ditanyakan</h3>
                                <div class="input-group">
                                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                                <button type="button" class="btn btn-primary">search</button>
                                </div>
                                <p class="text-muted mt-3">Telusuri sesuai dengan tipe akun anda</p>
                                <div>
                                    <button type="button" class="btn btn-primary">Penyewa Kos</button>
                                    <button type="button" class="btn btn-success">Pemilik Kos</button>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                    <div class="row justify-content-center mt-5">
                        <div class="col-9">
                            <ul class="nav nav-tabs  nav-tabs-custom nav-justified justify-content-center faq-tab-box" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-genarel-tab" data-bs-toggle="pill" data-bs-target="#pills-genarel" type="button" role="tab" aria-controls="pills-genarel" aria-selected="true">
                                        <span class="font-size-16">General Questions</span>
                                    </button>
                                </li>
                              </ul>
                        </div>
                        <div class="col-lg-9">
                            <div class="tab-content pt-3" id="pills-tabContent">
                                <div class="tab-pane fade active show" id="pills-genarel" role="tabpanel" aria-labelledby="pills-genarel-tab">
                                    <div class="row g-4 mt-2">
                                        @foreach($asks as $ask)
                                            <div class="col-lg-6">
                                                <a href="/help/{{$ask->id}}"><h5>{{$ask->title}}</h5></a>
                                                <p class="text-muted">{{$ask->content}}</p>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                              </div>
                        </div>
                    </div>
                    <!-- end row -->
                  </div>
              </div>
          </div>
      </div>
    </div>
@endsection