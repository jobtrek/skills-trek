
@vite('resources/css/app.css')
<div class="bg-gray-300 mt-8 p-8 rounded-lg shadow-md w-full">
    <form  method="post">
        @csrf


        <div class="mb-4">
            <label for="Title" class="block text-gray-700 font-bold  text-4xl mb-2">Title
            <input type="text" id="titre" name="titre"  class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-5 pb-2 mt-2 font-sans text-lg font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-900 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50">
            </label>
        </div>


        <div class="mb-4">
            <label for="description" class="block text-gray-700 text-lg font-bold mb-2">Description </label>
            <textarea id="description" name="description"  class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-5 pb-2 mt-2 font-sans text-lg font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-900 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"></textarea>
        </div>
    </form>
</div>
