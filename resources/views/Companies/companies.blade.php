@extends('layouts.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>
                Companies
                <a href="/add-company" class="btn btn-primary float-end">Add Company</a>
            </h5>
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>Company</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>

                @foreach ($companies as $company)
                    <tr>
                        <td>
                            <img src="{{ url('/Images/CompanyLogo/' . $company->ComLogo) }}" alt="" style="height: 30px; width:auto;">
                        </td>
                        <td>{{ $company->ComName }}</td>
                        <td>{{ $company->Address }}</td>
                        <td>{{ $company->Email }}</td>
                        <td>{{ $company->ContactLand }} <br> {{ $company->ContactMobile }} </td>
                        <td>
                            @if ($company->ComStat == 1)
                                <p class="text-success">Active</p>
                            @else
                                <p class="text-danger">Inactive</p>
                            @endif
                        </td>
                        <td>
                            <form action="{{ route('companies.edit') }}" method="post">
                                @csrf
                                <input type="hidden" name="hide_company_id" value="{{ $company->id }}">
                                <button type="submit" class="btn btn-info">Edit</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
