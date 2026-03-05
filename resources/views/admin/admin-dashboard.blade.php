@include('partials.header')

<div class="min-h-screen bg-gray-50 flex">
    
    <x-admin-left-nav/>

    <main class="flex-1 p-6 lg:p-8">
        <div class="mb-8">
            <h1 class="text-4xl font-bold text-gray-900 mb-2">Dashboard</h1>
            <p class="text-gray-600">
                Welcome back to admin dashboard,
                <span class="font-semibold text-gray-900">{{ $username }}</span>.
            </p>
        </div>

        {{-- Top stat cards (mirroring the layout of dept-user-dashboard) --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white shadow-lg rounded-xl p-6 hover:shadow-xl transition-shadow">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 uppercase text-xs font-semibold tracking-wide mb-1">
                            Total Employees
                        </p>
                        <h2 class="text-4xl font-bold text-gray-900">
                            {{ $totalEmployees ?? 0 }}
                        </h2>
                    </div>
                    <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-users text-blue-600 text-2xl"></i>
                    </div>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-xl p-6 hover:shadow-xl transition-shadow">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 uppercase text-xs font-semibold tracking-wide mb-1">
                            Active Admins
                        </p>
                        <h2 class="text-4xl font-bold text-gray-900">
                            {{ $totalAdmins ?? 0 }}
                        </h2>
                    </div>
                    <div class="w-14 h-14 bg-[#009944]/10 rounded-full flex items-center justify-center">
                        <i class="fas fa-user-shield text-[#009944] text-2xl"></i>
                    </div>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-xl p-6 hover:shadow-xl transition-shadow">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 uppercase text-xs font-semibold tracking-wide mb-1">
                            Pending Requests
                        </p>
                        <h2 class="text-4xl font-bold text-gray-900">
                            {{ $pendingRequests ?? 0 }}
                        </h2>
                    </div>
                    <div class="w-14 h-14 bg-yellow-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-inbox text-yellow-600 text-2xl"></i>
                    </div>
                </div>
            </div>
        </div>

        {{-- Main content grid placeholders, styled similarly to dept-user-dashboard cards --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="bg-white shadow-lg rounded-xl p-6">
                <h2 class="text-xl font-bold text-gray-900 mb-4">
                    Recent Activity
                </h2>
                <p class="text-sm text-gray-500">
                    This section will show the latest HR activities such as new hires, updates, and approvals.
                </p>
            </div>
            <div class="bg-white shadow-lg rounded-xl p-6">
                <h2 class="text-xl font-bold text-gray-900 mb-4">
                    System Overview
                </h2>
                <p class="text-sm text-gray-500">
                    High-level system metrics and shortcuts can be added here to give admins a quick overview.
                </p>
            </div>
        </div>
    </main>
</div>

@include('partials.footer')
