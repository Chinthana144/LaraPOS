@extends('layouts.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>
                Shop Features
                <button class="btn btn-primary float-end" id="btn_open_feature">Add Features</button>
            </h5>
        </div>
        <div class="card-body">
            <p>
                Content
            </p>
        </div>
    </div>

    {{-- Modals --}}
    <div class="modal" tabindex="-1" role="dialog" id="add_feature_modal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Add Shop Features</h5>
              <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                {{-- <span aria-hidden="true">&times;</span> --}}
              </button>
            </div>

            <div class="modal-body">
                <label for="">Select Shop</label>
                <select name="cmb_shop" id="cmb_shop" class="form-select">
                    @foreach ($shops as $shop)
                        <option value="{{ $shop->id }}">{{ $shop->ShopName }}</option>
                    @endforeach
                </select>

              <table class="table" id="tbl_features">
                <tr>
                    <th>ID</th>
                    <th>Feature Name</th>
                    <th>Action</th>
                </tr>
                @foreach ($features as $features)
                    <tr>
                        <td>{{ $features->id }}</td>
                        <td>{{ $features->FeatureName }}</td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="chk_feature_{{ $features->id }}">
                                <label class="form-check-label" for="chk_feature_{{ $features->id }}">{{ $features->FeatureName }}</label>
                            </div>
                        </td>
                    </tr>
                @endforeach

              </table>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-primary" id="btn_run">Run</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

          </div>
        </div>
    </div>

    <script src="{{ asset("js/feature.js") }}"></script>
@endsection
