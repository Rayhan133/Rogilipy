{{-- Extends layout --}}
@extends('layout.default')


@section('style')
<style>
    #deleteMedicineBtn {
        color: rgb(246, 242, 242);
    }

    #deleteMedicineBtn:hover {
        color: rgb(245, 8, 8);
    }
</style>
@endsection

{{-- Content --}}
@section('content')
<div class="medicine_add">
    <div class="d-flex justify-content-between mb-3">
        <h4>Medicine List</h4>
        @if ($role == 'admin')
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#createMedicine">
            Add New Medicine
        </button>
        @endif
    </div>
</div>
@include('pages.medicine.create')
<div class="medicine">

    <div class="text-center">
        <hr>
        @if ($medicines->count() == 0)
        <h1>
            No medicine has been added
        </h1>
        @endif
    </div>
    <div class="row">
        @foreach ($medicines as $medicine)
        <div class="col-md-3">
            <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                <div class="card-header d-flex">
                    <div>
                        {{$medicine->name}}
                    </div>
                    <div class="ml-auto">
                        @if ($role == 'admin')
                        <form action="{{route('medicine.destroy',$medicine->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <span>
                                <button type="submit" class="btn btn-sm" style="padding:0">
                                    <i class="fas fa-trash" id="deleteMedicineBtn"></i>
                                </button>
                            </span>
                        </form>
                        @endif
                    </div>

                </div>
                <div class="card-body">
                    <h4 class="card-text">{{$medicine->description}}</h4>
                    <p class="card-text">{{$medicine->disease}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
