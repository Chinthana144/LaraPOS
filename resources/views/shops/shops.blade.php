@extends('layouts.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>
                Shops
                <a href="/add-shop" class="btn btn-primary float-end">Add Shop</a>
            </h5>
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>No.</th>
                    <th>Company</th>
                    <th>Stock Type</th>
                    <th>Shop Name</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Shop Logo</th>
                    <th>Receipt Logo</th>
                    <th>Action</th>
                </tr>
                @foreach ($shops as $shop)
                    <tr data-id="{{ $shop->id  }}">
                        <td>{{ $shop->id }}</td>
                        <td>{{ $shop->company->ComName }}</td>
                        <td>{{ $shop->StockType->stockTypeName }}</td>
                        <td>{{ $shop->ShopName }}</td>
                        <td>{{ $shop->AddressOne }} <br>  {{ $shop->AddressTwo }} <br> {{  $shop->AddressThree }}</td>
                        <td>{{ $shop->Contact }}</td>
                        <td>{{ $shop->Email }}</td>
                        <td><img src="{{ url('/Images/ShopImages/' . $shop->ShopLogo) }}" alt="Shop Logo" style="height: 50px; width:auto;"></td>
                        <td><img src="{{ url('/Images/ShopImages/' . $shop->ReceiptLogo) }}" alt="Shop Logo" style="height: 50px; width:auto;"></td>
                        <td><button class="btn border border-primary">Settings</button></td>
                        <td>
                            <form action="{{ route('shops.edit') }}" method="post">
                                @csrf
                                <input type="hidden" name="hide_shop_id" value="{{ $shop->id }}">
                                <button type="submit" class="btn btn-info">Edit</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
