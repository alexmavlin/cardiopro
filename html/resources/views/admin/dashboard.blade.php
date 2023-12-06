@extends('layouts.admin.app')

@section('content')

  <div class="content-wrapper">

    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Welcome to CardioPro dashboard</h3>
            <h6 class="font-weight-normal mb-0">Here are common informations about your Web Site.</h6>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
            <h4 class="card-title">Unique users</h4>
            <canvas id="lineChart" width="422" height="211" style="display: block; width: 422px; height: 211px;" class="chartjs-render-monitor"></canvas>
          </div>
        </div>
      </div>
      <div class="col-md-6 grid-margin transparent">
        <div class="row">
          <div class="col-md-6 mb-4 stretch-card transparent">
            <a href="{{ route('admin.blog.index') }}" class="card card-tale" style="text-decoration: none;">
              <div class="card-body">
                <p class="mb-4">Blog posts</p>
                <p class="fs-30 mb-2">{{ $data['blogs_count'] }}</p>
                <p>posts available for users</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection