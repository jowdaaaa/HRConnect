@include('partials.header')

<div class="min-h-screen bg-gray-50 flex">
    <x-admin-left-nav/>

    <main class="flex-1 p-6 lg:p-8">
        <div class="mb-8">
            <h1 class="text-4xl font-bold text-gray-900 mb-2">Messages</h1>
            <p class="text-gray-600">
                Admin module — <span class="font-semibold text-gray-900">{{ $username }}</span>
            </p>
        </div>

        <div class="bg-white shadow-lg rounded-xl p-6">
            <h2 class="text-xl font-bold text-gray-900 mb-2">Coming soon</h2>
            <p class="text-sm text-gray-500">
                This page will contain announcements and internal messaging.
            </p>
        </div>
    </main>
</div>

@include('partials.footer')

