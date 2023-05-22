@extends('layouts/admin')

@section('content')
    <div class="text-center p-4">
        <h2>Homepage di Amministrazione</h2>
        <a href="{{ route('admin.projects.index') }}">Lista dei Progetti</a>
    </div>
@endsection
