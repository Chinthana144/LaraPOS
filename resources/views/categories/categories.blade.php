@extends('layouts.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>
                Categories
                <button class="btn btn-primary float-end" id="btn_open_category">Add Category</button>
            </h5>
        </div>
        <div class="card-body">
            <p>
                Content
            </p>

            <table class="table" id="tbl_category">
                <tr>
                    <th>No</th>
                    <th>Category Name</th>
                    <th>Action</th>
                </tr>

                @foreach ($shop_categories as $category)
                    <tr data-id="{{ $category->id }}">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->CategoryName }}</td>
                        <td>
                            <button class="btn btn-outline-primary btn-sm btn_edit_category">Edit</button>
                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="category_modal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Category</h5>
              <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close" id="btn_close_category">
                {{-- <span aria-hidden="true">&times;</span> --}}
              </button>
            </div>

            <form action="{{ route('category.store') }}" method="post">
                <div class="modal-body">
                    @csrf
                    <input type="text" name="category_name" class="form-control">
                </div>

                <div class="modal-footer">
                    <button type="submit" name="btn_add_category" id="btn_add_category" class="btn btn-primary">Add Category</button>

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>

          </div>
        </div>
      </div>

      {{-- Modal Edit category --}}
      <div class="modal" tabindex="-1" role="dialog" id="category_edit_modal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Category</h5>
              <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close" id="btn_close_category_edit">
                {{-- <span aria-hidden="true">&times;</span> --}}
              </button>
            </div>

            <form action="{{ route('category.update') }}" method="post">
                <div class="modal-body">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="hide_category_id" id="hide_category_id" value="0">
                    <input type="text" name="category_name" id="category_name" class="form-control">
                </div>

                <div class="modal-footer">
                    <button type="submit" name="btn_add_category" id="btn_add_category" class="btn btn-primary">Update Category</button>

                    {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                </div>
            </form>

          </div>
        </div>
      </div>

    <script src="{{ asset("js/category.js") }}"></script>
@endsection
