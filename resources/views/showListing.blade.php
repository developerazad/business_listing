@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><b>View Listing</b> <span class="pull-right btn btn-default btn-xs"><a href="{{ url('/listings') }}">Go Back</a></span></div>

                    <div class="panel-body">
                            <h4><b>Name:</b>    {{ $listing->name }}</h4>
                            <h4><b>Address:</b> {{ $listing->address }}</h4>
                        <h4><b>Website:</b> <a href="{{ $listing->website }}" target="_blank">{{ $listing->website }} </a></h4>
                            <h4><b>Phone:</b>   {{ $listing->phone }}</h4>
                            <h4><b>E-mail:</b>  {{ $listing->email }}</h4>

                        <hr>
                            <div class="well">
                                {{ $listing->bio }}
                            </div>
                    </div>
            </div>
        </div>
    </div> {{-- row--}}

@endsection
