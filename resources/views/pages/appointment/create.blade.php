<!-- Modal -->
<div class="modal fade" id="createAppointment" tabindex="-1" role="dialog" aria-labelledby="createAppointmentLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createAppointmentLabel">Added New Appointment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('appointment.store')}}">
                    @csrf
                    <h1 class="h3 mb-3 font-weight-normal">New Appointment</h1>
                    <label for="dateAndTime">Appointment Date And Time Range</label>
                    @php
                    $today = date('Y-m-d');
                    @endphp
                    <div class="form-group">
                        <span class="form-control" id="date">{{ $today}}</span>
                    </div>
                    <label for="startTime">Start Time</label>
                    <div class="form-group">
                        <input type="time" name="startTime" class="form-control" id="startTime"
                            placeholder="Appointment Time Range" required>
                    </div>
                    <label for="endTime">End Time</label>
                    <div class="form-group">
                        <input type="time" name="endTime" class="form-control" id="endTime"
                            placeholder="Appointment Time Range" required>
                    </div>
                    <label for="selectDoctor">Select Doctor</label>
                    <div class="form-group">
                        <select class="form-control" name='doctor_id' id="selectDoctor">
                            @foreach ($doctors as $doctor)
                            <option value="{{$doctor->id}}">{{$doctor->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
