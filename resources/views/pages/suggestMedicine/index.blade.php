{{-- Extends layout --}}
@extends('layout.default')

@section('style')
<style>

</style>

@endsection

{{-- Content --}}
@section('content')
<div class="container">
    <div class="card m-auto text-center">
        <div class="card-header">
            <h4>Medicine Suggest By Disease</h4>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="selectedDiseaseAndMedicine"></div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="disease">Disease</label>
                        <select class="form-control" id="disease">
                            <option value="">Select Disease</option>
                            @foreach ($diseases as $disease)
                            <option value="{{ $disease }}">{{ $disease }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


{{-- Scripts Section --}}
@section('scripts')
<script>
    var medicine = '';
    $(document).ready(function() {
        getSelectDisease();
    });
    function getSelectDisease() {
        $('#disease').on('change', function() {
            var disease = $(this).val();
            axios.post('/suggestMedicine/get-medicine/by-disease',{
                disease: disease
            }).then(function(response) {
                medicine = response.data.data;
                suggestMedicineAndShow(disease,medicine);
            })
        })
    }
    function suggestMedicineAndShow(disease,medicine){
        console.log(medicine);
        var html = '';
        html += '<div class="col-md-12"><h4>Disease: <span class="text-danger">'+disease+'</span></h4></div>';
        html += '<div class="col-md-6">';
            for (let index = 0; index < medicine.length; index++) {
                const element = medicine[index];
                console.log(element);
                html += '<h4>Medicine: <span class="text-info">'+element.name+'</span></h4>';
                html += '<h5>Dilutions: <span class="text-warning">'+element.description+'</span></h5>';
                html += '<h5>Releted Other\'s disease: <span class="text-primary">'+element.disease+'</span></h5></div>';
            }
        $('.selectedDiseaseAndMedicine').html(html);
    }
</script>

@endsection
