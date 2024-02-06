@extends('layouts.admin')

@section('content')
    <ol class="py-3">
        @foreach ($projects as $project)
            <li>
                {{ $project['name'] }}
            </li>
        @endforeach
    </ol>
@endsection
