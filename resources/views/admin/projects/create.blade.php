@extends('layouts.admin')

@section('content')
    <div class="container pt-5">
        <h2 class="mb-3">Aggiungi un nuvo progetto</h2>
        <form class="row g-3" action="{{ route('admin.projects.store') }}" method="POST">
            @csrf

            <div class="col-12>
                <label for="Titolo" class="form-label">Nome</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="Titolo" name="name"
                    required value="{{ old('name') }}">
                @error('name')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-6">
                <label for="Serie" class="form-label">Repository</label>
                <input type="text" class="form-control @error('repository') is-invalid @enderror" id="Serie"
                    name="repository">
                @error('repository')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-6">
                <label for="Tipo" class="form-label">Tipo</label>
                <select id="Tipo" class="form-select @error('is_public') is-invalid @enderror" name="is_public">
                    @if (old('is_public') === 0)
                        <option value="1">Pubblica</option>
                        <option value="0" selected>Privata</option>
                    @else
                        <option value="1" selected>Pubblica</option>
                        <option value="0">Privata</option>
                    @endif
                </select>
                @error('is_public')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12">
                <label for="immagine" class="form-label">Link alla Repository</label>
                <input type="url" class="form-control @error('repo_url') is-invalid @enderror" id="immagine"
                    name="repo_url" value="{{ old('repo_url') }}">
                @error('repo_url')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12">
                <label for="Descrizione" class="form-label">Assegnazione</label>
                <textarea class="form-control @error('assignment') is-invalid @enderror" id="Descrizione" rows="3"
                    name="assignment">
                    {{ old('assignment') }}
                </textarea>
                @error('assignment')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Aggiungi un nuovo progetto</button>
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
