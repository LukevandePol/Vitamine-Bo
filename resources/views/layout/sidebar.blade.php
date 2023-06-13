<div class="sidebar">
    <div class="imagebox">
        <x-logo class="sidebar-logo"/>
    </div>
    <ul class="nav-list">
        @cannot('isAdmin')
            <x-nav-link href="/dashboard"
                        :active="request()->routeIs('klant-dashboard')">
                Dashboard
            </x-nav-link>
            <x-nav-link href="/account" icon="fa-user"
                        :active="request()->routeIs('account')">
                Account
            </x-nav-link>
        @endcannot

        @can('isAdmin')
            <x-nav-link href="/admin" icon="fa-shield"
                        :active="request()->routeIs('admin-dashboard')">
                Admin Panel
            </x-nav-link>
            <x-nav-link href="/admin/goedkeuren" icon="fa-check"
                        :active="request()->routeIs('account-goedkeuren')">
                Klant goedkeuren
            </x-nav-link>
            <x-nav-link href="/admin/product" icon="fa-cart-shopping"
                        :active="request()->routeIs('product-overzicht')">
                Product beheer
            </x-nav-link>
            <x-nav-link href="/admin/faq" icon="fa-question"
                        :active="request()->routeIs('veelgestelde-vragen')">
                FAQ
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

