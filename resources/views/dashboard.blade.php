@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard <span class="pull-right btn btn-default btn-xs"><a href="{{ url('/listings/create') }}">Add Listing</a></span></div>

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
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>

                            @foreach($listings as $list)
                                <tr>
                                    <th>{{ $list->name }}</th>
                                    <th>{{ $list->address }}</th>
                                    <th>{{ $list->website }}</th>
                                    <th>{{ $list->phone }}</th>
                                    <th>
                                        <a href="{{ url('listings/'.$list->id.'/edit') }}"><button class="btn btn-alert btn-xs">Edit</button></a>
                                    </th>
                                    <th>
                                        <form action="{{ url('/listings', ['id' => $list->id]) }}" method="post">
                                            <input class="btn btn-danger btn-xs" type="submit" value="Delete" />
                                            <input type="hidden" name="_method" value="delete" />
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        </form>
                                    </th>
                                </tr>
                            @endforeach
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div> {{-- row--}}

@endsection
