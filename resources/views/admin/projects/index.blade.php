@extends('layouts.app')

@section('page-title', 'Projects')

@section('nav-title','Projects')

@section('main-content')
<div class="container">

    <div><a class="btn btn-success" href="{{route('Admin.projects.create')}}">create</a></div>


    <table class="text-center">
        <thead>
            <tr>
                <th>Title</th>
                <th>Status</th>
                <th>Author</th>
                <th>Contributors</th>
                <th>Project date</th>
                <th>Description</th>
                <th colspan="3">Btns</th>
            </tr>
        </thead>
        <tbody>
            <tr>

                @forelse($projects as $project)

                <td>{{$project->title}}</td>
                <td>{{$project->status}}</td>
                <td>{{$project->author}}</td>
                <td>{{$project->contributors}}</td>
                <td>{{$project->project_start_date}}</td>
                <td>{{Str::words($project->description,3,'...')}}</td>
                <td><a class="btn btn-secondary" href="{{route('Admin.projects.show',$project->id)}}">show</a></td>
                <td><a class="btn btn-warning" href="{{route('Admin.projects.edit',$project->id)}}">edit</a></td>
                <td>
                    <form action="{{route('Admin.projects.delete',$project->id)}}" method="POST">
                        @csrf
                        {{method_field('DELETE')}}
                        <button class="btn btn-danger" type="submit">delete</button>
                    </form>
                </td>
            </tr>

            @empty
            <tr>
                <td colspan="7">There aren't projects</td>
            </tr>
            @endforelse
        </tbody>
    </table>

</div>
@endsection
