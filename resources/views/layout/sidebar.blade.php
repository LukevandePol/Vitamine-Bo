<div class="sidebar">
    <x-logo class="sidebar-image imagebox"/>
    <ul class="nav-list">
        @cannot('isAdmin')
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">Dashboard</x-nav-link>
            <x-nav-link :href="route('account')" icon="fa-user" :active="request()->routeIs('account')">Account
            </x-nav-link>
        @endcannot

        @can('isAdmin')
            <x-nav-link :href="route('admin.index')" icon="fa-shield" :active="request()->routeIs('admin.index')">Admin
                Panel
            </x-nav-link>
            <x-nav-link :href="route('admin.approve')" icon="fa-check" :active="request()->routeIs('admin.approve')">
                Goedkeuren
            </x-nav-link>
        @endcan

        <li class="logout">
            <div>
                <form method="POST" action="/uitloggen">
                    @csrf

                    <x-button class="btn-link">Uitloggen</x-button>
                </form>
                <i class="fas fa-sign-out-alt" id="log_out"></i>
            </div>
        </li>
    </ul>
</div>

