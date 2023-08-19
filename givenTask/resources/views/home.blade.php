@extends('layouts.app')

@section('content')

<center>
<h1>Welcome {{ Auth::user()->name }}!!!!!</h1>
<button><a href="list">Account details</a></button>

</center>


@endsection
