@extends('layouts.master')

@section('content')
    <h1>Issues overzicht</h1>
@if (auth()->check())
    @if ( auth()->user()->isAdmin() )
    <a href="{{ route('issues.create') }}" class="btn btn-primary btn-sm">Nieuwe issue toevoegen</a>
    @else
    <br><br>
    @endif
@endif
    <table class="table">
        <tr>
            <th>Titel</th>
            <th>Verwerken voor</th>
            <th>Status</th>
            <th>Opties</th>
        </tr>
        @foreach($issues as $issue)
            <tr>
                <td><a href="{{ route('issues.show', [$issue->id]) }}">{{ $issue->title }}</a></td>
                <td>{{ $issue->due_at->format('d-m-Y H:i') }}</td>
                <td>@if($issue->completed_at) <i class="fas fa-check"></i> @else <i class="fas fa-times"></i> @endif</td>
                <td class="btn-group ">
                    <a href="{{ route('issues.edit', [$issue->id]) }}"><i class="fas fa-pencil-alt"></i></a>
                    &nbsp&nbsp
                    {!! \Form::open(['route' => 'issues.destroy']) !!}
                    {!! \Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-sm btn-danger']) !!}
                    {!! \Form::hidden('id', $issue->id) !!}
                    {!! \Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
@stop