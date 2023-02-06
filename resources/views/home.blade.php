@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        @if (isTenants()) YesTenants @else NotTenants @endif
                        <br/>
                       database: {{ tenant('tenancy_db_name')}}
                        @if (isNotTenants())
                            <li>
                                <a href="{{ route('tenants.change') }}">
                                    Your Site
                                </a>
                            </li>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
