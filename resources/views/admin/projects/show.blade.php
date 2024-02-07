@extends('layouts.admin')

@section('content')
    <div class="container pt-5">
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
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger h-100 w-100" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop-{{ $project->id }}">
                            Elimina
                        </button>
                        <!-- /Button trigger modal -->

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop-{{ $project->id }}" data-bs-backdrop="static"
                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title fs-5 text-start" id="staticBackdropLabel">
                                            Vuoi davvero cancellare {{ $project['name'] }}?
                                        </h3>
                                    </div>
                                    <div class="modal-body text-danger">
                                        <h6>
                                            <span class="text-uppercase">Attenzione!</span>
                                            <span>Questa azione è irreversibile.</span>
                                        </h6>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                            Annulla
                                        </button>
                                        <form action="{{ route('admin.projects.destroy', $project['slug']) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="Elimina definitivamente" class="btn btn-danger">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Modal -->
                    </div>
                </div>
            </div>
        </div>

        <a href="{{ route('admin.projects.index') }}" type="button" class="btn btn-info align-self-center mt-3">
            Torna alla tabella principale
        </a>
    </div>
@endsection
