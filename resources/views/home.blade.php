@extends('layouts.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>
                Home Page
            </h5>
        </div>
        <div class="card-body">
            <p>
                Shop ID = {{ Session::get('active_shop_id'); }}
            </p>
        </div>
    </div>
@endsection
