@extends('layouts.master')

@section('title', 'Project Form')

@section('content')

    <div id="project-form" class="row">
        <div class="col-lg-8 offset-lg-2">
            <h1 class="lead">Please fill up the form</h1>
            <hr>
            <div>
                <form method="post" action="/projects" @submit.prevent="onSubmit">
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-6">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Name" v-model="name">
                            <span class="text-danger" v-if="errors.has('name')" v-text="errors.get('name')"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-6">
                            <textarea class="form-control" name="description" id="description" rows="3" placeholder="Description" v-model="description"></textarea>
                            <span class="text-danger" v-if="errors.has('description')" v-text="errors.get('description')"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-8 offset-sm-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- /.row-->

@endsection

@section('myScript')

@endsection