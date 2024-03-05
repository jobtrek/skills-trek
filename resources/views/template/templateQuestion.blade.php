@vite('resources/css/app.css')


<div class="container mx-auto mt-8 bg-gray-300 p-6 rounded shadow-md flex justify-between items-end">
    <div class="flex flex-col">
        <input type="text" id="question_title" class="text-2xl font-bold mb-4 bg-gray-300 border-b-2 border-black focus:outline-none" placeholder="Question 1">

        <form class="flex flex-col">
            <div id="qcm_choices" class="mb-4">
                @include('template.templateChoice')
            </div>
            <div id="qcm_choices" class="mb-4">
                @include('template.templateChoice')
            </div>
        </form>
    </div>

    <div class="flex items-end ml-auto">
        <img src="{{ asset('file.svg') }}" class="w-10" alt="file Logo" />
        <img src="{{ asset('trash.svg') }}" class="w-10 ml-4" alt="trash Logo" />
    </div>
</div>

