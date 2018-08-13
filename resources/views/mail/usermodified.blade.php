@component('mail::message')

    The user has been changed.

    - User Id      : {{ $data['id'] }}
    - Name         : {{ $data['name'] }}
    - E-Mail       : {{ $data['email'] }}
    - Role         : {{ $data['role'] }}

@component('mail::button', ['url' => 'https://www.issues.local/users/show/'.$data['id']])
        Open User
@endcomponent

    Thanks,<br>
    {{ config('app.name') }}

@endcomponent
