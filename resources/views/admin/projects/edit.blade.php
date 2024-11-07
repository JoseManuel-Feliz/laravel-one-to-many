@extends('layouts.create-edit')


@section('page-title','Edit')

@section('nav-title', 'Edit')


@section('form-route')

{{route('Admin.projects.update',$project->id)}}
@endsection

@section('form-method')

{{method_field('PUT')}}

@endsection

@section('submit-btn-text', 'send')

@section('reset-btn-text','reset')
