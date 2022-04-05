@extends('base')
@section('content')
    <div  style="width: 600px; margin-top: 100px;" class="container">

            <div class="">
                <ul class="nav nav-tabs card-header-tabs">
                    <h5>login<h5>

                </ul>


            <div class="card-body">
                <br>
                <form method="post" action="Admin_log-form.php">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input class="form-control" type="text" name="username" placeholder="Username">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" name="password" placeholder="Password">
                    </div>
                    <br>
                    <button class="btn btn-primary btn-block" name="submit">Login</button>
                </form>

                <br>
                <a href="#">Not Registered?Register Here</a>
            </div>
        </div>
        <br><br>
    </div>

@endsection
