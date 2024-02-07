@extends('layouts.admin')

@section('content')
    <div class="container pt-5">
        <div class="row">
            <div class="col-12">
                <h2>I tuoi progetti</h2>
            </div>
            <div class="col text-end">
                <a href="{{ route('admin.projects.create') }}" type="button" class="btn btn-primary mb-3">
                    Aggiungi un nuovo progetto
                </a>
            </div>
        </div>
        <table class="table table-bordered table-striped table-info">
            <thead>
                <tr>
                    <th scope="col" class="col-4">Nome</th>
                    <th scope="col" class="col-2">Repository</th>
                    <th scope="col" class="col-1">Tipo</th>
                    <th scope="col" class="col"></th>
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
                        <td class="d-flex justify-content-around">
                            <a href="{{ route('admin.projects.show', $project) }}" type="button"
                                class="btn btn-info btn-sm">
                                Maggiori Dettagli
                            </a>
                            <a href="{{ route('admin.projects.update', $project) }}" type="button"
                                class="btn btn-warning btn-sm">
                                Modifica
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
