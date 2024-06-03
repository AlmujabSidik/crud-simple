<x-app>
    @slot('title', 'Create Employee')
    <div class="w-1/4 rounded-lg sm:p-4 lg:p-8 shadow-sm border border-zinc-200 mx-auto">
        <form action="{{ route('employee.store') }}" method="POST" class="mt-5 w-full">
            @csrf
            <div>
                <label for="name" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Teammate
                    name</label>
                <input placeholder="Arthur Melo" name="name" type="text"
                    class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                @error('name')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>

            <div class="mt-4">
                <label for="title" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Teammate
                    Occupation</label>
                <input placeholder="Front-end Developer" name="title" type="text"
                    class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                @error('title')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>

            <div class="mt-4">
                <label for="email" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Teammate
                    email</label>
                <input placeholder="arthurmelo@example.app" type="email" name="email"
                    class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">

                @error('email')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>


            <button type="submit"
                class="mt-4 px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                Submit Member
            </button>

        </form>
    </div>
</x-app>
