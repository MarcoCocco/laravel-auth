@extends('layouts/admin')

@section('content')
    <div class="container">
        <h1 class='text-center m-4'>Dettagli Progetto</h1>
        <div class="py-3">
            <h3 class="text-center">
                {{ $project->title }}
            </h3>
            <hr>
            <p>
                {{ $project->description }}
            </p>
            <table class="mt-5 table table-striped">
                <thead>
                    <th>Link alla Repository</th>
                    <th>Linguaggio</th>
                    <th>Data di creazione</th>
                    <th>Completo</th>
                </thead>

                <tbody>
                    <tr>
                        <td>{{ $project->github_link }}</td>
                        <td>{{ $project->language }}</td>
                        <td>{{ $project->creation_date }}</td>
                        <td>{{ $project->is_complete ? 'Sì' : 'No' }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    @endsection
