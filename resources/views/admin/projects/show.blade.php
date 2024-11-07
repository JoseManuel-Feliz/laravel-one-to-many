@extends('layouts.app')

@section('main-content')
<div class="container">

    <p>{{$project->title}}</p>
    <p>{{$project->status}}</p>
    <p>{{$project->author}}</p>
    <p>{{$project->contributors}}</p>
    <p>{{$project->project_start_date}}</p>
    <p>{{$project->description}}</p>

</div>
@endsection
