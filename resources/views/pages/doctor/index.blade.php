{{-- Extends layout --}}
@extends('layout.default')

@section('style')
<style>
    .table.dataTable.no-footer {
        border-bottom: 1px solid rgb(231, 228, 228);
    }
</style>

@endsection

{{-- Content --}}
@section('content')
<div>
    <div class="d-flex justify-content-between mb-3">
        <h4>Doctors List</h4>
        @if ($role == 'admin')
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createDoctor">
            Add New Doctor
        </button>
        @endif
    </div>
    @include('pages.doctor.create')
    <div class="table-responsive">
        <table class="table table-hover" id="patient_listID">
            <thead class="thead-light">
                <tr>
                    <th>#sl</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    @if($role == 'admin')
                    <th>Action</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($doctors as $doctor)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$doctor->name}}</td>
                    <td>{{$doctor->designation}}</td>
                    <td>{{$doctor->phone}}</td>
                    <td>{{$doctor->email}}</td>
                    <td>{{$doctor->address}}</td>
                    {{-- delete btn --}}
                    @if($role == 'admin')
                    <td>
                        <form action="{{route('doctor.destroy',$doctor->id)}}" method="post">
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


{{-- Scripts Section --}}
@section('scripts')
<script>
    $(document).ready(function () {
        $('#patient_listID').DataTable();
    });
</script>
@endsection
