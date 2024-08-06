{{-- This file is used for menu items by any Backpack v6 theme --}}
{{-- <li class="nav-item">
    <a class="nav-link" href="{{ backpack_url('dashboard') }}">
        <i class="la la-home nav-icon"></i>
        {{ trans('backpack::base.dashboard') }}
    </a>
</li> --}}

<x-backpack::menu-item title="Articles" icon="la la-book" :link="backpack_url('article')" />

<x-backpack::menu-dropdown title="UMKM" icon="la la-store">
    <x-backpack::menu-dropdown-item title="Stores" icon="la la-store" :link="backpack_url('umkm')" />
    <x-backpack::menu-dropdown-item title="Products" icon="la la-store" :link="backpack_url('product')" />
    <x-backpack::menu-dropdown-item title="UMKM features" icon="la la-store" :link="backpack_url('product-feature')" />
</x-backpack::menu-dropdown>
{{--
<x-backpack::menu-item title="Umkms" icon="la la-question" :link="backpack_url('umkm')" />
<x-backpack::menu-item title="Products" icon="la la-question" :link="backpack_url('product')" /> --}}


