
@extends('layout')

@section('title', "SkillTrek - success")
@section('body')

<body class="bg-gray-200">
<div class="flex items-start justify-center h-screen">
    @include('template.templateTitle')



    <form  method="post">
        @csrf
        @include('template.templateQuestion')
    </form>
</div>

<button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600 my-custom-button-class">Soumettre</button>


</body>

@endsection
