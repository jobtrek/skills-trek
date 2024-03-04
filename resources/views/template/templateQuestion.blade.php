@vite('resources/css/app.css')


    <div class="container mx-auto mt-8 bg-gray-200 p-6 rounded shadow-md">
        <input type="text" id="question_title" class="text-2xl font-bold mb-4 bg-gray-200 border-b-2 border-black focus:outline-none" placeholder="Question 1">

        <form>
            <div id="qcm_choices" class="mb-4">

                @include('template.templateChoice')


            </div>


        </form>
    </div>


