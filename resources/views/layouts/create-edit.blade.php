@extends('layouts.app')

@section('main-content')

@if($errors->any())

<div>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>

@endif
<form action="@yield('form-route')" method="POST">
    @csrf

    @yield('form-method','')

    <div>
        <label for="title">Project title</label>
        <input type="text" name="title" id="title" value="{{old('title',$project->title)}}">
    </div>
    <div>
        <label for="status">Project status</label>
        <input type="text" name="status" id="status" value="{{old('status',$project->status)}}">
    </div>
    <div>
        <label for="author">Author</label>
        <input type="text" name="author" id="author" value="{{old('author',$project->author)}}">
    </div>
    <div>
        <label for="contributors">contributors</label>
        <input type="text" name="contributors" id="contributors" value="{{old('contributors',$project->contributors)}}">
    </div>
    <div>
        <label for="project-date">Project date</label>
        <input type="text" name="project_start_date" id="project-date"
            value="{{old('project_start_date',$project->project_start_date)}}">
    </div>
    <div>
        <label for="description">Description</label>
        <input type="text" name="description" id="description" value="{{old('description',$project->description)}}">
    </div>

    @yield('additionals-inputs','')

    <div>
        <button type="submit">@yield('submit-btn-text', '')</button>
        <button type="reset">@yield('reset-btn-text', '')</button>
    </div>
</form>



@endsection