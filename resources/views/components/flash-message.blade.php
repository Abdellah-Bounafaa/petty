@if (session('message'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show"
        class="p-2 bg-opacity-10 mb-1 rounded-1 flash-message">
        <p>{{ session('message') }}</p>
    </div>
@endif
