@extends('layouts.dashboard')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>
                Company Name
            </h5>
        </div>
        <div class="card-body">
            <div class="container">
                <div class="row">
                    @foreach ($shops as $shop)
                        <div class="col-md-3 border border-primary rounded m-2 p-2">
                            <p style="text-align: center;">{{ $shop->shop->ShopName }}</p>
                            <div>
                                <img src="{{ url('/Images/ShopImages/' . $shop->shop->ShopLogo) }}" alt="" style="width: 60%; height:auto; margin-left:20%" >
                            </div>
                            <a href="/gotoshop/{{ $shop->shop->id }}">goto shop</a>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
@endsection
