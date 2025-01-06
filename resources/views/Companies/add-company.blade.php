@extends('layouts.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>
                Add Company
            </h5>
        </div>
        <div class="card-body" >
            <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <x-Form.text-input label="Company Name" name="company_name" placeholder="Company Name" type="text"/>
                    </div>

                    <div class="col-md-6 mb-3">
                        <x-Form.text-input label="Address" name="address" placeholder="Address" type="text"/>
                    </div>

                    <div class="col-md-6 mb-3">
                        <x-Form.text-input label="Email" name="email" placeholder="Email" type="text"/>
                    </div>

                    <div class="col-md-6 mb-3">
                        <x-Form.text-input label="Hotline" name="contact_land" placeholder="" type="text"/>
                    </div>

                    <div class="col-md-6 mb-3">
                        <x-Form.text-input label="Mobile" name="contact_mobile" placeholder="0712345678" type="text"/>
                    </div>

                    <div class="col-md-6 mb-3">
                        <x-Form.text-input label="Company Logo" name="company_logo" id="company_logo" placeholder="png or jpeg" type="file"/>
                        <span id="danger" style="display: none;">File size is greater than 5 MB</span>
                        <img src="" id="img_company_logo" style="width: 60%; height:auto; margin-left: 20%;">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Company Stat</label>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="chk_company_stat" id="chk_company_stat" checked>
                            <label class="form-check-label" for="chk_company_stat">Active</label>
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary float-end" name="btn_save_company">Save</button>
                    </div>

                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset('js/company.js') }}"></script>
@endsection
