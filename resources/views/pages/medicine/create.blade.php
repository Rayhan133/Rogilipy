<!-- Modal -->
<div class="modal fade" id="createMedicine" tabindex="-1" role="dialog" aria-labelledby="createMedicineLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createMedicineLabel">Added New Doctor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('medicine.store')}}">
                    @csrf
                    <h1 class="h3 mb-3 font-weight-normal">New Medicine</h1>
                    <label for="inputName" class="sr-only">Name</label>
                    <input type="name" id="inputName" name="name" class="form-control" placeholder="Name" required
                        autofocus>
                    <label for="inputdescription" class="sr-only">Description</label>
                    <input type="name" id="inputdescription" name="description" class="form-control"
                        placeholder="Description" required autofocus>
                    <label for="inputDisease" class="sr-only">Disease</label>
                    <input type="name" id="inputDisease" name="disease" class="form-control" placeholder="Disease"
                        required autofocus>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
