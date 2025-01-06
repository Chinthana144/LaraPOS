@extends('layouts.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>
                Shop Users
                <button class="btn btn-primary btn-sm float-end" id="btn_open_user">Add Users</button>
            </h5>
        </div>
        <div class="card-body">
            <table class="table" id="tbl_shop_users">
                <tr>
                    <th>No</th>
                    <th>Shop</th>
                    <th>Shop Name</th>
                    <th>User Name</th>
                    <th>Action</th>
                </tr>

                @foreach ($shopUsers as $shopUser)
                    <tr data-id="{{ $shopUser->id }}">
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <img src="{{ url('/Images/ShopImages/' . $shopUser->shop->ShopLogo)  }}" alt="Shop logo" style="height: 30px; width:auto;">
                        </td>
                        <td>{{ $shopUser->shop->ShopName }}</td>
                        <td>{{ $shopUser->user->name }}</td>
                        <td>
                            <button class="btn btn-outline-primary btn-sm btn_edit_users">Edit</button>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

    {{-- Modals --}}
    <div class="modal" tabindex="-1" role="dialog" id="shop_users_modal">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Shop Users</h5>
              <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close" id="btn_close_shop_users">
                {{-- <span aria-hidden="true">&times;</span> --}}
              </button>
            </div>

            <form action="{{ route('shopUsers.store') }}" method="post">
                <div class="modal-body">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <select name="cmb_shops" class="form-select">
                                @foreach ($shops as $shop)
                                    <option value="{{ $shop->id }}">{{ $shop->ShopName }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6">
                            <select name="cmb_users" class="form-select">
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" name="btn_add_user" id="btn_add_user" class="btn btn-primary">Add User</button>
                    <button type="button" name="btn_update_user" id="btn_update_user" class="btn btn-success">Update</button>
                    <button type="button" name="btn_delete_user" id="btn_delete_user" class="btn btn-danger">Delete</button>

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>

          </div>
        </div>
      </div>

      {{-- Update Modal --}}
      <div class="modal" tabindex="-1" role="dialog" id="update_shopusers_modal">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Shop Users</h5>
              <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close" id="btn_close_shop_users">
                {{-- <span aria-hidden="true">&times;</span> --}}
              </button>
            </div>

            <form action="{{ route('shopUsers.update') }}" method="post">
                <div class="modal-body">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="hide_shopuser_id" id="hide_shopuser_id" value="0">
                    <div class="row">
                        <div class="col-md-6">
                            <select name="cmb_shops" id="cmb_shops" class="form-select">
                                @foreach ($shops as $shop)
                                    <option value="{{ $shop->id }}">{{ $shop->ShopName }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6">
                            <select name="cmb_users" id="cmb_users" class="form-select">
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" name="btn_update_user" id="btn_update_user" class="btn btn-success">Update</button>

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>

          </div>
        </div>
      </div>

    <script src="{{ asset("js/shopusers.js") }}"></script>
@endsection
