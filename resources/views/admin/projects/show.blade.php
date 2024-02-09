@extends('layouts.admin')

@section('content')
    <div class="container pt-5">
        @include('shared.toast')
        <div class="row">
            <div class="col-10">
                <div class="card text-center">
                    <h3 class="card-header">
                        {{ $project['name'] }}
                    </h3>
                    <div class="card-body">
                        <div class="row pb-3 border-bottom">
                            <div class="col">
                                <h5 class="card-title">
                                    <a href="{{ $project['repo_url'] }}">
                                        {{ $project['repository'] }}
                                    </a>
                                </h5>
                            </div>
                            <div class="col">
                                @if ($project['is_public'])
                                    <span class="badge text-bg-success">Pubblica</span>
                                @else
                                    <span class="badge text-bg-secondary">Privata</span>
                                @endif
                            </div>
                        </div>
                        <p class="card-text pt-3 fs-5">
                            {{ $project['assignment'] }}
                        </p>
                    </div>
                    <div class="card-footer text-body-secondary text-end">
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
