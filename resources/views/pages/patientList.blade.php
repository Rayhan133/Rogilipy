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
    <h4>Patients List</h4>
    <div class="table-responsive">
        <table class="table table-hover" id="patient_listID">
            <thead class="thead-light">
                <tr>
                    <th>#sl</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    @if($role == 'admin')
                    <th>Action</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->address}}</td>
                    {{-- delete btn --}}
                    @if($role == 'admin')
                    <td>
                        <form action="{{route('user.destroy',$user->id)}}" method="post">
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
