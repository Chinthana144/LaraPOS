@extends('layouts.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>
                Add Shop
            </h5>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form action="{{ route('shops.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="" class="form-label">Select Company</label>
                        <select name="cmb_company" id="cmb_company" class="form-select">
                            @foreach ($companies as $company)
                                <option value="{{ $company->id }}">{{ $company->ComName }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="" class="form-label">Select Stock Type</label>
                        <select name="cmb_stock_type" id="cmb_stock_type" class="form-select">
                            @foreach ($stock_types as $stock_type)
                                <option value="{{ $stock_type->id }}">{{ $stock_type->stockTypeName }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <x-Form.text-input label="Shop Name" name="shop_name" placeholder="Shop Name" type="text"/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <x-Form.text-input label="Address Line 1" name="address_one" placeholder="No. 400" type="text"/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <x-Form.text-input label="Address Line 2" name="address_two" placeholder="Street Name" type="text"/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <x-Form.text-input label="Address Line 3" name="address_three" placeholder="Area Name" type="text"/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <x-Form.text-input label="Shop Contact for Receipt" name="shop_contact" placeholder="07 123 45678" type="text"/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <x-Form.text-input label="Shop Email" name="shop_email" placeholder="shopname@gmail.com" type="text"/>
                    </div>

                    <div class="col-md-6 mb-3">
                        <x-Form.text-input label="Shop Logo" name="shop_logo" id="shop_logo" placeholder="png or jpeg" type="file"/>
                        <span id="danger" style="display: none;">File size is greater than 5 MB</span>
                        <img src="" id="img_shop_logo" style="width: 60%; height:auto; margin-left: 20%;">
                    </div>

                    <div class="col-md-6 mb-3">
                        <x-Form.text-input label="Receipt Logo" name="receipt_logo" id="receipt_logo" placeholder="png or jpeg" type="file"/>
                        <span id="danger" style="display: none;">File size is greater than 5 MB</span>
                        <img src="" id="img_receipt_logo" style="width: 60%; height:auto; margin-left: 20%;">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Shop Stat</label>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="chk_shop_stat" id="chk_shop_stat" checked>
                            <label class="form-check-label" for="chk_shop_stat">Active</label>
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary float-end" name="btn_save_shop">Save</button>
                    </div>

                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset('js/shop.js') }}"></script>
@endsection
