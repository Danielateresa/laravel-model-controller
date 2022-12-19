@extends('layouts.app')

@section('content')
<h1 class="text-center text-black-50 bg-white py-3 shadow">Contacts</h1>
<div class="container py-5">
    <div class="row d-flex justify-content-center">
        <div class="col-8">
            <div class="card bg-white border-0 shadow px-4 py-5">
                <h3>Any question? Fell free to write us</h3>

                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" placeholder="Name " aria-describedby="helpId">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="email" class="form-control" name="" id="" aria-describedby="emailHelpId"
                        placeholder="Email">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Your message</label>
                    <textarea class="form-control" name="" id="" rows="3"></textarea>
                </div>
                <button class="btn submit bg-primary text-white mt-5" type="submit">Submit</button>
            </div>
        </div>
    </div>

</div>
@endsection