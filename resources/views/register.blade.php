@extends('base')

@section('content')
<br><br><br><br>
    <section class="h-100 h-custom" style="background-color: #8fc4b7">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-8 col-xl-6">
            <div class="card rounded-3">
            <div class="card-body p-4 p-md-5">
            <h2 class="text-uppercase text-center mb-5">Create an account</h2>
            <form action="{{url('/register')}}" method="post">
            {{csrf_field()}}
            <div class="form-outline mb-4">
                <input type="text" name="name" id="name" placeholder="Your Name" class="form-control form-control" />
            </div>
            <div class="form-outline mb-4">
                <input type="gender" name="gender" id="gender" placeholder="Your Gender" class="form-control form-control" />
            </div>
            <div class="form-outline mb-4">
                <input type="email" name="email" id="email" placeholder="Your Email" class="form-control form-control" />
            </div>
            <div class="form-outline mb-4">
                <input type="password" name="password" id="password" placeholder="Your Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success btn-lg mb-1">Register</button>
            <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="{{url('/login')}}" class="fw-bold text-body"><u>Login here</u></a></p>
            </form>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>

@stop