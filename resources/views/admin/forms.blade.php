@extends('sidebar')

@section('title', "SkillTrek - forms")

@section('pagetitle', "Forms")

@section('body')
    <a href="#">
        <img src="{{ asset('/icons/newform.svg') }}" class="fixed right-20" alt=""/>
    </a>

    <div class="flex mt-48 justify-center">
        <div>
            <img src="{{ asset('/icons/noform.svg') }}" class="" alt=""/>
        </div>
    </div>

@endsection
