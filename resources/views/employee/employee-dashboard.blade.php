@include('partials.header')

<div class="min-h-screen bg-gray-50 flex">
    <x-employee-left-nav/>

    <main class="flex-1 p-6 lg:p-8">
        <div class="mb-8">
            <h1 class="text-4xl font-bold text-gray-900 mb-2">Employee Dashboard</h1>
            <p class="text-gray-600">
                Welcome back,
                <span class="font-semibold text-gray-900">{{ $username }}</span>.
            </p>
        </div>

        
    </main>
</div>

@include('partials.footer')

