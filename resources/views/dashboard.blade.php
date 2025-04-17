@extends('layouts.AdminLayout.app')

@section('admincontent')     
<div class="container py-3">
    <!-- Card 1 -->
    <div class="card shadow-sm border-0 rounded-4 mb-3 p-3 bg-light">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <p class="mb-1 fw-semibold">Total Alumni</p>
                <h5 class="fw-bold">19</h5>
            </div>
            <i class="bi bi-people fs-3"></i>
        </div>
    </div>

    <!-- Card 2 -->
    <div class="card shadow-sm border-0 rounded-4 mb-3 p-3 bg-light">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <p class="mb-1 fw-semibold">Current Members</p>
                <h5 class="fw-bold">4</h5>
            </div>
            <i class="bi bi-award fs-3"></i>
        </div>
    </div>

    <!-- Card 3 -->
    <div class="card shadow-sm border-0 rounded-4 mb-3 p-3 bg-light">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <p class="mb-1 fw-semibold">Upcoming Event</p>
                <h5 class="fw-bold">15</h5>
            </div>
            <i class="bi bi-calendar-event fs-3"></i>
        </div>
    </div>

    <!-- Card 4 -->
    <div class="card shadow-sm border-0 rounded-4 mb-3 p-3 bg-light">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <p class="mb-1 fw-semibold">Transaction</p>
                <h5 class="fw-bold">$10.00</h5>
            </div>
            <i class="bi bi-wallet2 fs-3"></i>
        </div>
    </div>
</div>
@endsection