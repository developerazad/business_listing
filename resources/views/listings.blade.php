@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Business Listings</h3></div>

                <div class="panel-body">
                    @if(count($listings))
                        <ul>
                            @foreach($listings as $list)
                                <li class="list-group-item"><a href="{{ url('listings/'.$list->id) }}">{{ $list->name }}</a></li>
                            @endforeach
                        </ul>
                    @else
                        <p>No List Found</p>
                    @endif
                </div>
            </div>
        </div>
    </div> {{-- row--}}

@endsection
