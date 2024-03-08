
@extends('layout')

@section('title', "SkillTrek - templateCreate")
@section('body')

<body class="bg-gray-200">

    <form action="">
    <div class="flex flex-col">
        <div class="ml-64 mr-64">
            @include('template.templateTitle')
            @include('template.templateQuestion')
        </div>



    </div>
    </form>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600 my-custom-button-class">Soumettre</button>


</body>

@endsection
