<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Admin Dashboard</title>
</head>

<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-1/5 bg-white shadow-md">
            <div class="p-5 font-bold text-lg">Admin Panel</div>
            <ul class="space-y-2">
                <li>
                    <a href="{{ route('admin.dashboard') }}"
                        class="block p-4 text-gray-700 hover:bg-gray-200">Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('admin.users.index') }}" class="block p-4 text-gray-700 hover:bg-gray-200">Manage
                        Users</a>
                </li>
                <li>
                    <a  href="{{ route("admin.contents.index") }}" class="block p-4 text-gray-700 hover:bg-gray-200">Manage
                        Posts</a>
                </li>
                <!-- Add additional links here -->
            </ul>
        </div>

        <!-- Content Area -->
        <div class="flex-1 p-10">
            @yield('content')
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
