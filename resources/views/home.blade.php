@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <a class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @can('admin')
                          <a href ="{{route('admin.main')}}">Back to maintaining</a>
                    @endcan
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
