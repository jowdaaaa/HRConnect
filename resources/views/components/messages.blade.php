@if(session()->has('message'))
    @php
        $type = session('message_type', 'success');
        $isError = $type === 'error';
        $bgClass = $isError ? 'bg-red-50/95 border-red-500' : 'bg-emerald-50/95 border-emerald-500';
        $iconBgClass = $isError ? 'bg-red-600' : 'bg-emerald-600';
        $iconTextClass = $isError ? 'text-red-50' : 'text-emerald-50';
        $titleClass = $isError ? 'text-red-900' : 'text-emerald-900';
        $bodyClass = $isError ? 'text-red-800' : 'text-emerald-800';
        $closeClass = $isError ? 'text-red-500 hover:text-red-700' : 'text-emerald-500 hover:text-emerald-700';
        $title = $isError ? 'Error' : 'Success';
        $icon = $isError ? 'fa-exclamation-circle' : 'fa-check-circle';
    @endphp
    <div 
        id="flash-message" 
        class="fixed top-4 right-4 z-[100] max-w-sm w-full sm:w-96 transform transition duration-300 ease-out"
        role="alert"
    >
        <div class="{{ $bgClass }} backdrop-blur border shadow-lg rounded-xl overflow-hidden">
            <div class="flex items-start p-4">
                <div class="flex-shrink-0 mt-0.5">
                    <span class="inline-flex items-center justify-center h-9 w-9 rounded-full {{ $iconBgClass }}">
                        <i class="fa-solid {{ $icon }} {{ $iconTextClass }} text-lg"></i>
                    </span>
                </div>
                <div class="ml-3 flex-1">
                    <div class="flex items-start justify-between gap-2">
                        <p class="text-sm font-semibold {{ $titleClass }}">
                            {{ $title }}
                        </p>
                        <button 
                            type="button" 
                            onclick="document.getElementById('flash-message')?.remove()" 
                            class="inline-flex {{ $closeClass }} focus:outline-none"
                            aria-label="Close notification"
                        >
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                    <p class="mt-1 text-sm {{ $bodyClass }}">
                        {{ session('message') }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script>
        setTimeout(function () {
            const alert = document.getElementById('flash-message');
            if (alert) {
                alert.style.opacity = '0';
                alert.style.transform = 'translateY(-10px)';
                setTimeout(() => alert.remove(), 300);
            }
        }, 5000);
    </script>
@endif
