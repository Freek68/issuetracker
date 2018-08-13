@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Maak een gebruiker') }}</div>

                    <div class="card-body">
                    {!! \Form::open(['route' => 'issues.store']) !!}

                        <div class="form-group row">
                            {!! Form::label('title', 'Titel', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                            {!! \Form::text('title', '', ['class' => 'form-control'], 'required autofocus') !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                            {!! \Form::text('description', '', ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Wachtwoord') }}</label>

                            <div class="col-md-6">
                            {{ Form::password('password', ['class' => 'form-control'], 'required') }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Herhaal wachtwoord') }}</label>

                            <div class="col-md-6">
                            {{ Form::password('password_confirmation', ['class' => 'form-control'], 'required') }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">Role</label>

                            <div class="col-md-6">
                                {{ Form::select('role', ['admin' => 'Admin', 'agent' => 'Agent', 'customer' => 'Customer'], 'customer', ['class' => 'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                {!! \Form::submit('Aanmaken', ['class' => 'btn btn-small btn-primary']) !!}
                            </div>
                        </div>
                        {!! \Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
