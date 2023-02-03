
<h1>welcome</h1>
@foreach($users as $user)
{{ $user->id }}
{{ $user->username}}

{{ $user->created_at }}

@endforeach
