@extends('layouts.app')

@section('content')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome home <span style="font-weight:bold">{{auth()->user()->name}}</span> !!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
