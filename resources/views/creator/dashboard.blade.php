<x-guest-layout>

    <h1> Dashboard</h1>

    <a class="bg-green-700 text-dark p-5" href="{{ route('contents.create') }}"> Add A Post</a>



    <h2 class="mt-36">Your Posts</h2>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach ($contents as $content)
                <div class="max-w-sm bg-white rounded-lg shadow-md">
                    <!-- Check if there is a video, if so, provide a link to the video, else, link to '#' -->
                    <a href="{{ $content->post_video ? asset($content->post_video) : '#' }}" target="_blank">
                        <!-- Display the post picture using the asset helper -->
                        <img class="rounded-t-lg" src="{{ asset($content->post_picture) }}" alt="Post Image">
                    </a>
                    <div class="px-5 py-4">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900">{{ $content->title }}</h5>
                        <p class="text-normal text-gray-700 mb-3">{{ $content->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-guest-layout>
