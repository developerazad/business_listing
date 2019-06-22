@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Update Listing</b> <span class="pull-right btn btn-default btn-xs"><a href="{{ url('/dashboard') }}">Go Back</a></span></div>

                <div class="panel-body">
                    @include('inc.editForm')
                </div>
            </div>
        </div>
    </div> {{-- row--}}

@endsection
