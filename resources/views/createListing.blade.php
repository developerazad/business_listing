@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Create Listing</b></div>

                <div class="panel-body">
                    @include('inc.createForm')
                </div>
            </div>
        </div>
    </div> {{-- row--}}

@endsection
