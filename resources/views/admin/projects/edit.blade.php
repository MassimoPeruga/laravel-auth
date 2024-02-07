@extends('layouts.admin')

@section('content')
    <div class="container pt-5">
        <h2 class="mb-3">Modifica {{ $project['name'] }}</h2>
        <form class="row g-3" action="{{ route('admin.projects.update', $project) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="col-12>
                <label for="Titolo" class="form-label">Nome</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="Titolo" name="name"
                    required value="{{ old('name', $project['name']) }}">
                @error('name')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-6">
                <label for="Serie" class="form-label">Repository</label>
                <input type="text" class="form-control @error('repository') is-invalid @enderror" id="Serie"
                    name="repository" value="{{ old('repository', $project['repository']) }}">
                @error('repository')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-6">
                <label for="Tipo" class="form-label">Tipo</label>
                <select id="Tipo" class="form-select @error('is_public') is-invalid @enderror" name="is_public">
                    <option value="1" {{ old('type', $project->is_public) === 1 ? 'selected' : '' }}>
                        Pubblica
                    </option>
                    <option value="0" {{ old('type', $project->is_public) === 0 ? 'selected' : '' }}>
                        Privata
                    </option>
                </select>
                @error('is_public')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12">
                <label for="immagine" class="form-label">Link alla Repository</label>
                <input type="url" class="form-control @error('repo_url') is-invalid @enderror" id="immagine"
                    name="repo_url" value="{{ old('repo_url', $project['repo_url']) }}">
                @error('repo_url')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12">
                <label for="Descrizione" class="form-label">Assegnazione</label>
                <textarea class="form-control @error('assignment') is-invalid @enderror" id="Descrizione" rows="3"
                    name="assignment">
                    {{ old('assignment', $project['assignment']) }}
                </textarea>
                @error('assignment')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12 text-end">
                <button type="submit" class="btn btn-primary">Applica le modifiche</button>
                @include('shared.modal')
            </div>
        </form>
        <div class="mt-3">
            <span>Oppure </span>
            <a href="{{ route('admin.projects.index') }}" type="button" class="btn btn-info align-self-center ms-2">
                Torna alla tabella principale
            </a>
        </div>
    </div>
@endsection
