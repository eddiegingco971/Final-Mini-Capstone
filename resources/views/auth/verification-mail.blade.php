@extends('layouts.app')

@section('title','Verify Your Email Address')

@section('content')

<p>
    Welcome {{$user->name}}!
</p>

<p>
    You received this email as a result of your registration to our web site.
    Please click on the verification link to verify your account.
</p>

<p>
    <a href="{{url('/verification/' . $user->id . '/' . $user->remember_token)}}">Click here to verify</a>
</p>

@endsection
