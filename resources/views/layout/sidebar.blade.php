<div class="sidebar">
    <img src="/images/logo.webp" alt="Your Image" class="sidebar-image imagebox">
    <ul class="nav-list">
        @auth
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">Dashboard</x-nav-link>
            <x-nav-link :href="route('account')" icon="fa-user" :active="request()->routeIs('account')">Account
            </x-nav-link>
        @endauth

        @can('isAdmin')
            <x-nav-link :href="route('admin.index')" icon="fa-shield" :active="request()->routeIs('admin.index')">Admin
                Panel
            </x-nav-link>
            <x-nav-link :href="route('admin.approve')" icon="fa-check" :active="request()->routeIs('admin.approve')">
                Goedkeuren
            </x-nav-link>
        @endcan

        <li class="profile">
            <div class="profile-details">
                <div class="name_job">
                    <form method="POST" action="/uitloggen">
                        @csrf

                        <x-button class="btn-link">Uitloggen</x-button>
                    </form>
                </div>
            </div>
            <i class="fas fa-sign-out-alt" id="log_out"></i>
        </li>
    </ul>
</div>

