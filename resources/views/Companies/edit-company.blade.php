@extends('layouts.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>
                Add Company
            </h5>
        </div>
        <div class="card-body" >
            <form action="{{ route('companies.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <input type="hidden" name="hide_company_id" value="{{ $company->id }}">

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <x-Form.text-input label="Company Name" name="company_name" placeholder="Company Name" type="text" :value="$company->ComName"/>
                    </div>

                    <div class="col-md-6 mb-3">
                        <x-Form.text-input label="Address" name="address" placeholder="Address" type="text" :value="$company->Address"/>
                    </div>

                    <div class="col-md-6 mb-3">
                        <x-Form.text-input label="Email" name="email" placeholder="Email" type="text" :value="$company->Email"/>
                    </div>

                    <div class="col-md-6 mb-3">
                        <x-Form.text-input label="Hotline" name="contact_land" placeholder="" type="text" :value="$company->ContactLand"/>
                    </div>

                    <div class="col-md-6 mb-3">
                        <x-Form.text-input label="Mobile" name="contact_mobile" placeholder="0712345678" type="text" :value="$company->ContactMobile"/>
                    </div>

                    <div class="col-md-6 mb-3">
                        <x-Form.text-input label="Company Logo" name="company_logo" id="company_logo" placeholder="png or jpeg" type="file"/>
                        <span id="danger" style="display: none;">File size is greater than 5 MB</span>
                        @if (!empty($company->ComLogo))
                            <img src="{{ url('/Images/CompanyLogo/' . $company->ComLogo) }}" id="img_company_logo" style="width: 60%; height:auto; margin-left: 20%;">
                        @endif
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
                        <button type="submit" class="btn btn-primary float-end" name="btn_update_company">Update</button>
                    </div>

                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset('js/company.js') }}"></script>
@endsection
