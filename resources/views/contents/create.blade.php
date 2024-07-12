<x-guest-layout>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="px-8 py-6 mt-4 text-left bg-white shadow-lg">
            <h3 class="text-2xl font-bold text-center">Create New Content</h3>
            <form method="POST" action="{{ route('contents.store') }}" enctype="multipart/form-data" class="mt-4">
                @csrf
                <div>
                    <label for="title" class="block">Title</label>
                    <input type="text" name="title" id="title" placeholder="Title"
                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"
                        required>
                </div>

                <div class="mt-4">
                    <label for="description" class="block">Description</label>
                    <textarea name="description" id="description" rows="4" placeholder="Description"
                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" required></textarea>
                </div>

                <div class="mt-4">
                    <label for="post_picture" class="block">Post Picture</label>
                    <input type="file" name="post_picture" id="post_picture" accept="image/*"
                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>

                <div class="mt-4">
                    <label for="post_video" class="block">Post Video</label>
                    <input type="file" name="post_video" id="post_video" accept="video/*"
                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>

                <div class="flex justify-center mt-6">
                    <button type="submit"
                        class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700">Create</button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
