@component('mail::message')

    The new issue has been created.

    - Issue Id     : {{ $data['id'] }}
    - Title        : {{ $data['title'] }}
    - Description  : {!! $data['description'] !!}
    - Due-date     : {{ $data['due_at'] }}

@component('mail::button', ['url' => 'https://www.issues.local/issue/show/'.$data['id']])
    Open Issue
@endcomponent

Thanks,<br>
{{ config('app.name') }}

@endcomponent
