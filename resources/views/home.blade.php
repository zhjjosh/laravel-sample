@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>This system is a simple login system.</p>
                    <p>I also include a CRUD example in the system.</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
