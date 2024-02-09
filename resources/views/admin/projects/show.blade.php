@extends('layouts.admin')

@section('content')
    <div class="container pt-5">
        @include('shared.toast')
        <div class="row">
            <div class="col-10">
                <div class="card text-bg-dark">
                    <div class="card-header border-0 pb-0 d-flex">
                        <h2 class="me-auto pt-3">{{ $project['name'] }}</h2>
                        <div class="text-end">
                            <h5 class="card-title d-inline-block">
                                <a href="{{ $project['repo_url'] }}" class="text-light">
                                    {{ $project['repository'] }}
                                </a>
                            </h5>
                            @if ($project['is_public'])
                                <span class="badge text-bg-success">Pubblica</span>
                            @else
                                <span class="badge text-bg-secondary">Privata</span>
                            @endif
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <hr>
                        <p class="card-text pt-3 fs-5 border-0 text-start">
                            {{ $project['assignment'] }}
                        </p>
                        <hr>
                    </div>
                    <div class="card-footer text-light text-opacity-75 text-end  border-0">
                        Ultimo aggiornamento: {{ $project['updated_at'] }}
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="row h-100 text-center">
                    <div class="col-12 h-75">
                        <a href="{{ route('admin.projects.edit', $project) }}" type="button"
                            class="btn btn-warning h-100 w-100 d-flex align-items-center justify-content-center fw-bold fs-4">
                            Modifica
                        </a>
                    </div>
                    <div class="col-12">
                        @include('shared.modal', ['modalClass' => 'w-100 h-100'])
                    </div>
                </div>
            </div>
        </div>

        <a href="{{ route('admin.projects.index') }}" type="button" class="btn btn-info align-self-center mt-3">
            Torna alla tabella principale
        </a>
    </div>
@endsection
