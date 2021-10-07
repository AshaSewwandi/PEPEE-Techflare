@extends('layouts.app')
@section('content')

<div class="container" style="background :none !important ">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    <h3 class="form-title"><b>Add Post</b></h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="">
                        @csrf
                        <div class="form-group row">
                          
                            <label for="input1" class="col-sm-3 col-form-label" >Type of the pet: </label>
                            <div class="col-sm-6">
                            <select name="pet" class="custom-select" required>
                                <option value=""  selected >Select the type</option>
                                <option value="Dog">Dog</option>
                                <option value="Cat">Cat</option>
                            </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="input" class="col-sm-3 col-form-label">Upload Image:</label>
                            <div class="col-sm-6">
                                <input type="file" class="form-control" id="input" >
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="input" class="col-sm-3 col-form-label">Write a caption:</label>
                            <div class="col-sm-9">
                                <textarea rows="4" cols="50" name="comment" id="usrform"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="input4" class="col-sm-3 col-form-label">Location:</label>
                            <div class="col-sm-3">
                                <input type="password" class="form-control" id="input4" >
                            </div>   
                            <label for="input4" class="col-sm-1 col-form-label">Age:</label>
                            <div class="col-sm-3">
                                <input type="password" class="form-control" id="input4" >
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="input4" class="col-sm-2 col-form-label">Gender:</label>
                            <div class="col-sm-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                <label class="form-check-label" for="exampleRadios1">Male</label>
                                <br>
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios1">Female</label>
                            </div>
                        </div>
            
                        <div class="form-group row">
                            <div class="checkbox">
                               Vaccinated:   <label><input type="checkbox"> </label>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary-1" data-bs-dismiss="modal">Add Post</button>
                        <button type="submit" class="btn btn-primary-2" value="Submit">Cancel</button>
                    </form>
                </div>       
            </div>
        </div>         
    </div>
</div>

@endsection