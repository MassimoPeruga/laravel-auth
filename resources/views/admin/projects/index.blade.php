@extends('layouts.admin')

@section('content')
    <div class="container pt-5">
        <table class="table table-bordered table-striped table-info">
            <thead>
                <tr>
                    <th scope="col" class="col">Nome</th>
                    <th scope="col" class="col-3">Repository</th>
                    <th scope="col" class="col-3">Tipo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>
                            <h5>{{ $project['name'] }}</h5>
                        </td>
                        <td>
                            <a href="{{ $project['repo_url'] }}">
                                {{ $project['repository'] }}
                            </a>
                        </td>
                        <td>
                            @if ($project['is_public'])
                                Pubblica
                            @else
                                Privata
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('admin.projects.create') }}" type="button" class="btn btn-primary">Aggiungi un nuovo fumetto</a>
    </div>
@endsection
