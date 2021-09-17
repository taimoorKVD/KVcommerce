@extends('admin.layouts.adminpanel')

@section('content')

<div class="row">
    <!-- Column -->
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">ORDER RECEIVED</h4>
                <div class="text-right"> <span class="text-muted">Todays Order</span>
                    <h1 class="font-light"><sup><i class="ti-arrow-up text-success"></i></sup> 12,000</h1>
                </div>
                <span class="text-success">20%</span>
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 20%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">TAX DEDUCATION</h4>
                <div class="text-right"> <span class="text-muted">Monthly Deduction</span>
                    <h1 class="font-light"><sup><i class="ti-arrow-up text-primary"></i></sup> $5,000</h1>
                </div>
                <span class="text-primary">30%</span>
                <div class="progress">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 30%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">REVENUE STATS</h4>
                <div class="text-right"> <span class="text-muted">Todays Income</span>
                    <h1 class="font-light"><sup><i class="ti-arrow-down text-info"></i></sup> $8,000</h1>
                </div>
                <span class="text-info">60%</span>
                <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 60%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">YEARLY SALES</h4>
                <div class="text-right"> <span class="text-muted">Yearly  Income</span>
                    <h1 class="font-light"><sup><i class="ti-arrow-up text-inverse"></i></sup> $12,000</h1>
                </div>
                <span class="text-inverse">80%</span>
                <div class="progress">
                    <div class="progress-bar bg-inverse" role="progressbar" style="width: 80%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>

@endsection