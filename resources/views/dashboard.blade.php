@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Your Listings</h3>
                    @if(count($listings))
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr class="bg-info">
                                <th>Company</th>
                                <th>Address</th>
                                <th>Website</th>
                                <th>phone</th>
                            </tr>
                            </thead>

                            @foreach($listings as $list)
                                <tr>
                                    <th>{{ $list->name }}</th>
                                    <th>{{ $list->address }}</th>
                                    <th>{{ $list->website }}</th>
                                    <th>{{ $list->phone }}</th>
                                </tr>
                            @endforeach
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
