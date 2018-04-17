@extends('layouts.app')

@section('content')
    <?php
    $queries = \DB::getQueryLog();
    echo "<pre>";
    var_dump($queries);
    ?>
@endsection