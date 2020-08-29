@extends('layout')

    @section('content')
    <h2>Create Account</h2>
    <div class="container">
        <form class="form-horizontal" method="POst" action="create">
            @csrf
                <fieldset>

                <!-- Form Name -->
                <legend></legend>

                <!-- Text input-->
                <div class="form-group">
                <label class="col-md-4 control-label" for="name">Name</label>  
                <div class="col-md-4">
                <input id="name" name="name" type="text" placeholder="Enter Name" class="form-control input-md">
                </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                <label class="col-md-4 control-label" for="color">Username</label>  
                <div class="col-md-4">
                <input id="color" name="username" type="text" placeholder="Enter username" class="form-control input-md">
                    
                </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                <label class="col-md-4 control-label" for="company">Email</label>  
                <div class="col-md-4">
                <input id="company" name="email" type="text" placeholder="Enter email name" class="form-control input-md">
                    
                </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                <label class="col-md-4 control-label" for="submit"></label>
                <div class="col-md-4">
                    <button id="submit" name="submit" class="btn btn-primary">Save</button>
                </div>
                </div>

                </fieldset>
            </form>
        </div>
    @endsection