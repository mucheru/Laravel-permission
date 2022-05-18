<x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
    {{ __('Dashboard') }}
</x-jet-nav-link>
<x-jet-nav-link href="{{ route('tasks.index') }}" :active="request()->routeIs('tasks.*')">
    {{ __('Tasks') }}
</x-jet-nav-link>
 
<x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
    {{ __('Dashboard') }}
</x-jet-responsive-nav-link>
<x-jet-responsive-nav-link href="{{ route('tasks.index') }}" :active="request()->routeIs('tasks.*')">
    {{ __('Tasks') }}
</x-jet-responsive-nav-link>