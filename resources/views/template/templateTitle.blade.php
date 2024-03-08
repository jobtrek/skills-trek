
@vite('resources/css/app.css')
<div class="bg-gray-300 mt-8 p-8 mb-20 rounded-lg shadow-md w-full">
    <form  method="post">
        @csrf
        <div class="mb-4">
            <label for="Title" class="block text-gray-700 font-bold  text-4xl mb-2">Title
            <input type="text" id="titre" name="titre"  class="peer h-full w-full border-b border-black bg-transparent pt-5 pb-2 mt-2 font-sans text-lg font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-black focus:outline-0 disabled:border-0 disabled:bg-blue-black">
            </label>
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-700 text-xl font-bold ">Description </label>
            <textarea id="description" name="description"  class="peer h-full w-full border-b border-black bg-transparent pt-5 font-sans text-lg font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-900 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"></textarea>
        </div>

        <div class="mb-4">
            <label for="Timer" class="block text-gray-700 font-bold  text-xl mb-2">Timer
                <input type="text" id="timer" name="timer"  class="peer h-full w-full border-b border-black bg-transparent pt-5 pb-2 mt-2 font-sans text-lg font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-900 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50">
            </label>
        </div>
    </form>
</div>
