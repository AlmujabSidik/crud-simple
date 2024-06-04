<x-app>
    @slot('title', $page_meta['title'])

    <div class="w-full mx-8 sm:w-96 lg:w-1/4 rounded-lg p-8 sm:p-4 lg:p-8 shadow-sm border border-zinc-200 sm:mx-auto">
        <h2>{{ $page_meta['title'] }}</h2>
        <form action="{{ $page_meta['url'] }}" method="POST" class="mt-5 w-full">
            @csrf
            @method($page_meta['method'])
            <div>
                <label for="name" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Teammate
                    name</label>
                <input name="name" type="text" value="{{ old('name', $employee->name) }}"
                    class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                @error('name')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>

            <div class="mt-4">
                <label for="title" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Teammate
                    Occupation</label>
                <input name="title" type="text" value="{{ old('title', $employee->title) }}"
                    class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                @error('title')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>

            <div class="mt-4">
                <label for="email" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Teammate
                    email</label>
                <input type="email" name="email" value="{{ old('email', $employee->email) }}"
                    class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">

                @error('email')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>


            <button type="submit"
                class="mt-4 px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                {{ $page_meta['btn_text'] }}
            </button>

        </form>
    </div>
</x-app>
