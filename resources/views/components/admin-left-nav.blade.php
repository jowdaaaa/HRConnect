<aside class="w-64 bg-white shadow-lg flex flex-col h-screen sticky top-0">
    <!-- Logo Section -->
    <div class="p-6 border-b border-gray-200">
        <div class="relative flex justify-center">
            <div class="absolute inset-0 bg-[#009944] blur-2xl opacity-20 rounded-full scale-150"></div>
            <img src="{{ asset('images/ace-logo.png') }}" alt="ACE Center" class="relative h-16 w-auto">
        </div>
    </div>

    <!-- User Profile Section -->
    @php
        $navUsername = session('hr_user_username', 'Admin');
        $navRole = session('hr_user_role', 'Admin');
    @endphp
    <div class="p-6 border-b border-gray-200">
        <div class="flex flex-col items-center">
            <div class="w-16 h-16 rounded-full overflow-hidden border-4 border-[#009944] shadow-md mb-3">
                <img src="{{ asset('images/user.png') }}" alt="User Avatar" class="w-full h-full object-cover">
            </div>
            <span class="text-sm font-bold text-gray-900">
                {{ $navUsername }}
            </span>
            <span class="text-xs text-gray-500 mt-1">
                {{ ucfirst(strtolower($navRole)) }}
            </span>
        </div>
    </div>

    <!-- Navigation Menu -->
    @php
        $isDashboard = request()->is('admin-dashboard');
    @endphp
    <nav class="flex-1 px-4 py-6 overflow-y-auto">
        <h2 class="text-xs font-bold text-gray-400 uppercase tracking-wider px-3 mb-3">MENU</h2>
        
        <a href="/admin-dashboard" class="flex items-center px-4 py-3 rounded-xl transition-all group {{ $isDashboard ? 'bg-green-50 text-[#009944] font-bold' : 'text-gray-500 font-semibold hover:bg-gray-50 hover:text-[#009944]' }}">
            <i class="fas fa-th-large mr-3 text-lg w-5 text-center {{ $isDashboard ? 'text-[#009944]' : 'text-gray-400 group-hover:text-[#009944]' }}" aria-hidden="true"></i>
            Dashboard
        </a>
    </nav>

    <!-- Logout Section --> 
    <div class="p-4 border-t border-gray-200">
        <form id="logout-form" action="{{ url('/logout') }}" method="POST" class="hidden">
            @csrf
        </form>
        <button type="button" id="logout-btn" class="logout-confirm-btn w-full flex items-center px-4 py-3 text-sm font-medium text-red-600 rounded-lg transition-all hover:bg-red-50 hover:text-red-700">
            <i class="fas fa-sign-out-alt mr-3 w-5"></i>LOGOUT
        </button>
    </div>
</aside>

{{-- Logout confirmation modal --}}
<div id="logout-modal" class="fixed inset-0 z-[60] hidden" aria-modal="true" role="dialog" aria-labelledby="logout-modal-title">
    <div class="fixed inset-0 bg-black/50 transition-opacity logout-modal-backdrop"></div>
    <div class="fixed inset-0 flex items-center justify-center p-4">
        <div class="relative bg-white rounded-2xl shadow-xl max-w-md w-full p-6 transform transition-all">
            <div class="flex items-center gap-4 mb-4">
                <div class="w-12 h-12 rounded-full bg-amber-100 flex items-center justify-center shrink-0">
                    <i class="fas fa-sign-out-alt text-amber-600 text-xl"></i>
                </div>
                <div>
                    <h3 id="logout-modal-title" class="text-lg font-bold text-gray-900">Sign out?</h3>
                    <p class="text-sm text-gray-600 mt-0.5">Are you sure you want to sign out of your account?</p>
                </div>
            </div>
            <div class="flex gap-3 justify-end">
                <button type="button" class="logout-modal-cancel px-5 py-2.5 rounded-full font-semibold text-gray-600 bg-gray-100 hover:bg-gray-200 transition-colors">Cancel</button>
                <button type="button" id="logout-modal-confirm" class="px-5 py-2.5 rounded-full font-semibold text-white bg-red-600 hover:bg-red-700 transition-colors">Sign out</button>
            </div>
        </div>
    </div>
</div>

<script>
(function () {
    var modal = document.getElementById('logout-modal');
    var form = document.getElementById('logout-form');
    if (!modal || !form) return;
    document.querySelectorAll('.logout-confirm-btn').forEach(function (btn) {
        btn.addEventListener('click', function () { modal.classList.remove('hidden'); });
    });
    document.querySelectorAll('.logout-modal-cancel, .logout-modal-backdrop').forEach(function (el) {
        el.addEventListener('click', function () { modal.classList.add('hidden'); });
    });
    document.getElementById('logout-modal-confirm').addEventListener('click', function () { form.submit(); });
})();
</script>