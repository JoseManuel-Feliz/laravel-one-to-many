@extends('layouts.app')

@section('main-content')


<form action="@yield('form-route')" method="POST">
    @csrf

    @yield('form-method','')

    <div>
        <label for="title">Project title</label>
        <input type="text" name="title" id="title" value="{{old('title',$project->title)}}">
        @error('title')
        <div>{{$message}}</div>
        @enderror
    </div>
    <div>
        <label for="status">Project status</label>
        <input type="text" name="status" id="status" value="{{old('status',$project->status)}}">
        @error('status')
        <div>{{$message}}</div>
        @enderror
    </div>
    <div>
        <label for="author">Author</label>
        <input type="text" name="author" id="author" value="{{old('author',$project->author)}}">
        @error('author')
        <div>{{$message}}</div>
        @enderror
    </div>
    <div>
        <label for="contributors">contributors</label>
        <input type="text" name="contributors" id="contributors" value="{{old('contributors',$project->contributors)}}">
        @error('contributors')
        <div>{{$message}}</div>
        @enderror
    </div>
    <div>
        <label for="project-date">Project date</label>
        <input type="text" name="project_start_date" id="project-date"
            value="{{old('project_start_date',$project->project_start_date)}}">
        @error('project_start_date')
        <div>{{$message}}</div>
        @enderror
    </div>
    <div>
        <label for="description">Description</label>
        <input type="text" name="description" id="description" value="{{old('description',$project->description)}}">
        @error('description')
        <div>{{$message}}</div>
        @enderror
    </div>

    @yield('additionals-inputs','')

    <div>
        <button type="submit">@yield('submit-btn-text', '')</button>
        <button type="reset">@yield('reset-btn-text', '')</button>
    </div>
</form>



@endsection