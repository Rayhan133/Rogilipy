<!-- Modal -->
<div class="modal fade" id="createDoctor" tabindex="-1" role="dialog" aria-labelledby="createDoctorLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDoctorLabel">Added New Doctor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('doctor.store')}}">
                    @csrf
                    <h1 class="h3 mb-3 font-weight-normal">New Doctor</h1>
                    <label for="inputName" class="sr-only">Name</label>
                    <input type="name" id="inputName" name="name" class="form-control" placeholder="Name" required
                        autofocus>
                    <label for="inputDesignation" class="sr-only">Designation</label>
                    <input type="name" id="inputDesignation" name="designation" class="form-control"
                        placeholder="Designation" required autofocus>
                    <label for="inputPhone" class="sr-only">Phone</label>
                    <input type="tel" id="inputPhone" name="phone"
                        class="form-control @error('phone') is-invalid @enderror" placeholder="Phone" required autofocus
                        maxlength="11" value="{{old('phone')}}" pattern="[0-9]{3}[0-9]{8}">
                    <label for="inputAddress" class="sr-only">Address</label>
                    <input type="text" id="inputAddress" name="address" class="form-control" placeholder="Home Address"
                        required autofocus>
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address"
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
