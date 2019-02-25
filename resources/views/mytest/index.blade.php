@extends('layout')

@section('content')

<h1>We Love GO!!!</h1>

<h2>Famous Real Vampires</h2>

<br>

<h3>Dracula</h3>
<?php
  foreach($data[0] as $result) {
    echo $result . "<br>";
  }

?>

<br><br>

<h3>The Blood Countess</h3>
<?php
  foreach($data[1] as $result) {
   echo $result . "<br>";
  }

?>

@endsection
