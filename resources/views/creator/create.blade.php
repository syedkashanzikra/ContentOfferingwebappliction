<x-guest-layout>





    <div class="min-h-screen bg-gray-100 flex items-center justify-center">



        <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
            <h1 class="text-xl font-bold text-center mb-6">Creator Information Form</h1>

            @if (session('success'))
                <p class="bg-green-100 text-green-800 p-3 rounded">{{ session('success') }}</p>
            @endif

            <form action="{{ route('creator.submit') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                <div>
                    <label for="creator_name" class="block text-sm font-medium text-gray-700">Name:</label>
                    <input type="text" id="creator_name" name="creator_name" required
                        class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>

                <div>
                    <label for="creator_email" class="block text-sm font-medium text-gray-700">Email:</label>
                    <input type="email" id="creator_email" name="creator_email" required
                        class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password:</label>
                    <input type="password" id="password" name="password" required
                        class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>

                <div>
                    <label for="social_links" class="block text-sm font-medium text-gray-700">Social Links:</label>
                    <input type="text" id="social_links" name="social_links" required
                        class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>

                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700">Description:</label>
                    <textarea id="description" name="description" required
                        class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                </div>

                <div>
                    <label for="avatar" class="block text-sm font-medium text-gray-700">Avatar:</label>
                    <input type="file" id="avatar" name="avatar" required
                        class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>

                <button type="submit"
                    class="w-full bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>

                <a class="text-center ml-48 mt-7 underline" href="{{ route('creator.login') }}">For Login</a>
            </form>

        </div>


    </div>

</x-guest-layout>
