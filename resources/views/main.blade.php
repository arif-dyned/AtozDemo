@extends('template')

@section('title', isset($data['title']) ? $data['title'] : "Atoz")

@section('class-body', '')

@section('content')
    <div class="wrapper">
        <?php //========== Render header =========== ?>
        @include('header')

        <div class="content-wrapper">
            <?php //========== Start Content =========== ?>
            {!! $content !!}
            <?php //========== End Content ============= ?>
        </div>
        <?php //========== Render sidebar =========== ?>
        @include('footer')
    </div>
@stop