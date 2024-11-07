@extends('layouts.create-edit')


@section('page-title','Create')

@section('nav-title', 'Create')


@section('form-route')
{{route('Admin.projects.store')}}
@endsection

@section('form-method')

{{method_field('POST')}}

@endsection

@section('submit-btn-text', 'send')

@section('reset-btn-text','reset')
