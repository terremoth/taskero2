<div class="modal" id="delete-modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Alert! Delete task <span></span>?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>This operation cannot be undone!</p>
            </div>
            <div class="modal-footer">
                <form action="{{route('task.destroy', '%task%')}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" id="delete-modal-button-confirm" class="btn btn-danger" data-bs-dismiss="modal">
                        <i class="fa fa-exclamation-triangle"></i> Yes, I am sure!
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function deleteFormModal(id) {
        const deleteModalElement = document.getElementById('delete-modal');
        const form = deleteModalElement.querySelector('form');
        deleteModalElement.querySelector('h5>span').innerHTML = id;
        let action = form.getAttribute('action');
        action = action.replace('%task%', id);
        form.setAttribute('action', action);
        const deleteModal = new bootstrap.Modal(deleteModalElement);
        deleteModal.show();
    }
</script>
