<div class="sidebar">
    <div class="imagebox">
        <x-logo class="sidebar-logo"/>
    </div>
    <ul class="nav-list">
        @cannot('isAdmin')
            <x-nav-link href="/dashboard"
                        :active="request()->routeIs('dashboard')">
                Dashboard
            </x-nav-link>
            <x-nav-link href="/account" icon="fa-user"
                        :active="request()->routeIs('account')">
                Account
            </x-nav-link>
        @endcannot

        @can('isAdmin')
            <x-nav-link href="/admin" icon="fa-shield"
                        :active="request()->routeIs('admin.index')">
                Admin Panel
            </x-nav-link>
            <x-nav-link href="/admin/goedkeuren" icon="fa-check"
                        :active="request()->routeIs('admin.approve')">
                Klant goedkeuren
            </x-nav-link>
            <x-nav-link href="/admin/product" icon="fa-cart-shopping"
                        :active="request()->routeIs('admin.product')">
                Product beheer
            </x-nav-link>
        @endcan

        <li class="logout d-flex justify-content-center">
            <form method="POST" action="/uitloggen">
                @csrf

                <x-button class="btn-link">
                    Uitloggen
                    <i class="fa-solid fa-sign-out-alt"></i>
                </x-button>
            </form>
        </li>
    </ul>
</div>

