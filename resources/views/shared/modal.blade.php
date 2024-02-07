<!-- Button trigger modal -->
<button type="button" class="btn btn-danger {{ $modalClass ?? '' }}" data-bs-toggle="modal"
    data-bs-target="#staticBackdrop-{{ $project->id }}">
    Elimina
</button>
<!-- /Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop-{{ $project->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                <form action="{{ route('admin.projects.destroy', $project['slug']) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Elimina definitivamente" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Modal -->
