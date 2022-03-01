{{-- Extends layout --}}
@extends('layout.default')

@section('style')
@endsection


{{-- Content --}}
@section('content')
<div>
    <div class="d-flex justify-content-between mb-3">
        <h4>Appointments List</h4>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createAppointment">
            Add New Appointment
        </button>
    </div>
    @include('pages.appointment.create')
    <div class="table-responsive">
        <table class="table table-hover" id="patient_listID">
            <thead class="thead-light">
                <tr>
                    <th>#sl</th>
                    <th>Patient Name</th>
                    <th>Doctor Name</th>
                    <th>Date</th>
                    <th>Time Range</th>
                    @if($role == 'admin')
                    <th>Action</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($appointments as $appointment)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$appointment->patient->name}}</td>
                    <td>{{$appointment->doctor->name}}</td>
                    <td>
                        <span class="badge badge-primary">{{date('d-M-Y', strtotime($appointment->date))}}</span>
                    </td>
                    @php
                    $startTime = $appointment->start_time;
                    $startTime = date('h:i A', strtotime($startTime));
                    $endTime = $appointment->end_time;
                    $endTime = date('h:i A', strtotime($endTime));
                    @endphp
                    <td>
                        <span class="badge badge-success">{{$startTime}}</span>
                        -
                        <span class="badge badge-danger">{{$endTime}}</span>
                    </td>
                    @if($role == 'admin')
                    <td>
                        <form action="{{route('appointment.destroy',$appointment->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <span>
                                <button type="submit" class="btn btn-sm btn-outline-danger"
                                    style="padding: 8px 8px !important">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </span>
                        </form>
                    </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection


{{-- Script --}}
@section('scripts')
<script>
    $(document).ready(function() {
        setAutoDate();
    });
    function setAutoDate() {
        var date = new Date();
        var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
        // console.log(2022-02-16);
        $('#date').val(2022-02-16);
        // auto set date to today
        $('#date').val(new Date());

        // $('#date').val(date);
        $('#date').on('change', function() {
            var getDate = new Date($('#date').val());
            //
            console.log($('#date').val());
        });
    }
</script>
@endsection
