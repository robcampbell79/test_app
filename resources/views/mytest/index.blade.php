@extends('layout')

@section('content')

<h1>We Love GO!!!</h1>

<h2>Dracula</h2>
<?php
  foreach($data[0] as $result) {
    echo $result . "<br>";
  }

 ?>

@endsection
