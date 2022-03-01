@extends('layout.default')

{{-- Content --}}
@section('content')
<div class="row d-flex justify-content-center flex-nowrap">
    <form method="POST" action="{{route('signUpUser')}}" class="form-signin w-25 align-center">
        @csrf
        <h1 class="h3 mb-3 font-weight-normal">Please Sign Up</h1>
        <label for="inputName" class="sr-only">Name</label>
        <input type="name" id="inputName" name="name" class="form-control" placeholder="Name" required autofocus>
        <label for="inputPhone" class="sr-only">Phone</label>
        <input type="tel" id="inputPhone" name="phone" class="form-control @error('phone') is-invalid @enderror"
            placeholder="Phone" required autofocus maxlength="11" value="{{old('phone')}}" pattern="[0-9]{3}[0-9]{8}">
        <label for="inputAddress" class="sr-only">Address</label>
        <input type="text" id="inputAddress" name="address" class="form-control" placeholder="Address" required
            autofocus>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required
            autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="text" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
        <label for="inputConfirm_password" class="sr-only">Password</label>
        <input type="password" id="inputConfirm_password" name="confirm_password" class="form-control"
            placeholder="Confirm Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
    </form>

</div>

@endsection
