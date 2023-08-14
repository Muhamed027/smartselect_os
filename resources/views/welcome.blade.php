<!DOCTYPE html>
<html class="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'Page Title' }}</title>
        @vite('resources/css/app.css')
    </head>
    <body class="dark:bg-gray-950/95 bg-white text-gray-700 max-w-7xl mx-auto dark:text-gray-200 mb-40">
        <div class="fi-layout flex min-h-screen w-full overflow-x-clip">
            <div x-data="{}" x-on:click="$store.sidebar.close()" x-show="$store.sidebar.isOpen"
                x-transition.opacity.300ms=""
                class="fi-sidebar-close-overlay fixed inset-0 z-30 bg-gray-950/50 transition duration-500 dark:bg-gray-950/75 lg:hidden">
            </div>
        
            <aside x-data="{}"
                x-bind:class="$store.sidebar.isOpen ?
                    'fi-sidebar-open max-w-none translate-x-0 shadow-xl ring-1 ring-gray-950\/5 rtl:-translate-x-0 dark:ring-white\/10' :
                    '-translate-x-full rtl:translate-x-full'"
                class="fi-sidebar fixed inset-y-0 start-0 z-30 grid h-screen w-[--sidebar-width] content-start overflow-hidden bg-white transition-all dark:bg-gray-900 lg:z-0 lg:bg-transparent lg:shadow-none lg:ring-0 dark:lg:bg-transparent lg:translate-x-0 rtl:lg:-translate-x-0 fi-sidebar-open max-w-none translate-x-0 shadow-xl ring-1 ring-gray-950/5 rtl:-translate-x-0 dark:ring-white/10">
                <header
                    class="fi-sidebar-header flex h-16 items-center bg-white px-6 ring-1 ring-gray-950/5 dark:bg-gray-900 dark:ring-white/10 lg:shadow-sm">
        
                    <div>
                        <a href="https://demo.filamentphp.com">
                            <div class="fi-logo text-xl font-bold leading-5 tracking-tight text-gray-950 dark:text-white">
                                Filament Demo
                            </div>
                        </a>
                    </div>
                </header>
        
                <nav class="fi-sidebar-nav grid gap-y-7 overflow-y-auto overflow-x-hidden px-6 py-8">
        
        
        
                    <ul class="-mx-2 grid gap-y-7">
                        <li x-data="{ label: null }" data-group-label="" class="fi-sidebar-group grid gap-y-1">
        
                            <ul x-show="! ($store.sidebar.groupIsCollapsed(label) &amp;&amp; ($store.sidebar.isOpen || true))"
                                x-collapse.duration.200ms="" class="fi-sidebar-group-items grid gap-y-1">
                                <li class="fi-sidebar-item">
                                    <a href="https://demo.filamentphp.com"
                                        x-on:click="window.matchMedia(`(max-width: 1024px)`).matches &amp;&amp; $store.sidebar.close()"
                                        class="relative flex items-center justify-center gap-x-3 rounded-lg px-2 py-2 text-sm text-gray-700 outline-none transition duration-75 hover:bg-gray-100 focus:bg-gray-100 dark:text-gray-200 dark:hover:bg-white/5 dark:focus:bg-white/5 font-semibold">
                                        <svg class="fi-sidebar-item-icon h-6 w-6 text-gray-400 dark:text-gray-500"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25">
                                            </path>
                                        </svg>
                                        <span class="flex-1 truncate">
                                            Dashboard
                                        </span>
        
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li x-data="{ label: 'Shop' }" data-group-label="Shop" class="fi-sidebar-group grid gap-y-1">
                            <div x-on:click="$store.sidebar.toggleCollapsedGroup(label)"
                                class="flex items-center gap-x-3 px-2 py-2 cursor-pointer">
        
                                <span class="flex-1 text-sm font-semibold text-gray-700 dark:text-gray-200">
                                    Shop
                                </span>
        
                                <button
                                    style="--c-300:var(--gray-300);--c-400:var(--gray-400);--c-500:var(--gray-500);--c-600:var(--gray-600);"
                                    class="fi-icon-btn relative flex items-center justify-center rounded-lg outline-none transition duration-75 focus:ring-2 disabled:pointer-events-none disabled:opacity-70 h-9 w-9 text-gray-400 hover:text-gray-500 focus:ring-primary-600 dark:text-gray-500 dark:hover:text-gray-400 dark:focus:ring-primary-500 fi-sidebar-group-collapse-button -my-2 -me-2"
                                    type="button" x-on:click.stop="$store.sidebar.toggleCollapsedGroup(label)"
                                    x-bind:class="{ 'rotate-180': $store.sidebar.groupIsCollapsed(label) }">
        
                                    <svg class="fi-icon-btn-icon h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M14.77 12.79a.75.75 0 01-1.06-.02L10 8.832 6.29 12.77a.75.75 0 11-1.08-1.04l4.25-4.5a.75.75 0 011.08 0l4.25 4.5a.75.75 0 01-.02 1.06z"
                                            clip-rule="evenodd"></path>
                                    </svg>
        
                                </button>
                            </div>
        
                            <ul x-show="! ($store.sidebar.groupIsCollapsed(label) &amp;&amp; ($store.sidebar.isOpen || true))"
                                x-collapse.duration.200ms="" class="fi-sidebar-group-items grid gap-y-1">
                                <li class="fi-sidebar-item">
                                    <a href="https://demo.filamentphp.com/shop/products"
                                        x-on:click="window.matchMedia(`(max-width: 1024px)`).matches &amp;&amp; $store.sidebar.close()"
                                        class="relative flex items-center justify-center gap-x-3 rounded-lg px-2 py-2 text-sm text-gray-700 outline-none transition duration-75 hover:bg-gray-100 focus:bg-gray-100 dark:text-gray-200 dark:hover:bg-white/5 dark:focus:bg-white/5 font-medium">
                                        <svg class="fi-sidebar-item-icon h-6 w-6 text-gray-400 dark:text-gray-500"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"></path>
                                        </svg>
                                        <span class="flex-1 truncate">
                                            Products
                                        </span>
        
                                        <span>
                                            <div style="--c-50:var(--primary-50);--c-300:var(--primary-300);--c-400:var(--primary-400);--c-600:var(--primary-600);"
                                                class="fi-badge flex items-center justify-center gap-x-1 whitespace-nowrap rounded-md  text-xs font-medium ring-1 ring-inset px-2 min-w-[theme(spacing.6)] py-1 bg-custom-50 text-custom-600 ring-custom-600/10 dark:bg-custom-400/10 dark:text-custom-400 dark:ring-custom-400/30">
        
                                                <span>
                                                    24
                                                </span>
        
                                            </div>
                                        </span>
                                    </a>
                                </li>
                                <li class="fi-sidebar-item">
                                    <a href="https://demo.filamentphp.com/shop/customers"
                                        x-on:click="window.matchMedia(`(max-width: 1024px)`).matches &amp;&amp; $store.sidebar.close()"
                                        class="relative flex items-center justify-center gap-x-3 rounded-lg px-2 py-2 text-sm text-gray-700 outline-none transition duration-75 hover:bg-gray-100 focus:bg-gray-100 dark:text-gray-200 dark:hover:bg-white/5 dark:focus:bg-white/5 font-medium">
                                        <svg class="fi-sidebar-item-icon h-6 w-6 text-gray-400 dark:text-gray-500"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z">
                                            </path>
                                        </svg>
                                        <span class="flex-1 truncate">
                                            Customers
                                        </span>
        
                                    </a>
                                </li>
                                <li class="fi-sidebar-item">
                                    <a href="https://demo.filamentphp.com/shop/orders"
                                        x-on:click="window.matchMedia(`(max-width: 1024px)`).matches &amp;&amp; $store.sidebar.close()"
                                        class="relative flex items-center justify-center gap-x-3 rounded-lg px-2 py-2 text-sm text-gray-700 outline-none transition duration-75 hover:bg-gray-100 focus:bg-gray-100 dark:text-gray-200 dark:hover:bg-white/5 dark:focus:bg-white/5 font-medium">
                                        <svg class="fi-sidebar-item-icon h-6 w-6 text-gray-400 dark:text-gray-500"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z">
                                            </path>
                                        </svg>
                                        <span class="flex-1 truncate">
                                            Orders
                                        </span>
        
                                        <span>
                                            <div style="--c-50:var(--primary-50);--c-300:var(--primary-300);--c-400:var(--primary-400);--c-600:var(--primary-600);"
                                                class="fi-badge flex items-center justify-center gap-x-1 whitespace-nowrap rounded-md  text-xs font-medium ring-1 ring-inset px-2 min-w-[theme(spacing.6)] py-1 bg-custom-50 text-custom-600 ring-custom-600/10 dark:bg-custom-400/10 dark:text-custom-400 dark:ring-custom-400/30">
        
                                                <span>
                                                    210
                                                </span>
        
                                            </div>
                                        </span>
                                    </a>
                                </li>
                                <li class="fi-sidebar-item">
                                    <a href="https://demo.filamentphp.com/shop/categories"
                                        x-on:click="window.matchMedia(`(max-width: 1024px)`).matches &amp;&amp; $store.sidebar.close()"
                                        class="relative flex items-center justify-center gap-x-3 rounded-lg px-2 py-2 text-sm text-gray-700 outline-none transition duration-75 hover:bg-gray-100 focus:bg-gray-100 dark:text-gray-200 dark:hover:bg-white/5 dark:focus:bg-white/5 font-medium">
                                        <svg class="fi-sidebar-item-icon h-6 w-6 text-gray-400 dark:text-gray-500"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z">
                                            </path>
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z">
                                            </path>
                                        </svg>
                                        <span class="flex-1 truncate">
                                            Categories
                                        </span>
        
                                    </a>
                                </li>
                                <li class="fi-sidebar-item">
                                    <a href="https://demo.filamentphp.com/shop/brands"
                                        x-on:click="window.matchMedia(`(max-width: 1024px)`).matches &amp;&amp; $store.sidebar.close()"
                                        class="relative flex items-center justify-center gap-x-3 rounded-lg px-2 py-2 text-sm text-gray-700 outline-none transition duration-75 hover:bg-gray-100 focus:bg-gray-100 dark:text-gray-200 dark:hover:bg-white/5 dark:focus:bg-white/5 font-medium">
                                        <svg class="fi-sidebar-item-icon h-6 w-6 text-gray-400 dark:text-gray-500"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.5 3.75V16.5L12 14.25 7.5 16.5V3.75m9 0H18A2.25 2.25 0 0120.25 6v12A2.25 2.25 0 0118 20.25H6A2.25 2.25 0 013.75 18V6A2.25 2.25 0 016 3.75h1.5m9 0h-9">
                                            </path>
                                        </svg>
                                        <span class="flex-1 truncate">
                                            Brands
                                        </span>
        
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li x-data="{ label: 'Blog' }" data-group-label="Blog" class="fi-sidebar-group grid gap-y-1">
                            <div x-on:click="$store.sidebar.toggleCollapsedGroup(label)"
                                class="flex items-center gap-x-3 px-2 py-2 cursor-pointer">
        
                                <span class="flex-1 text-sm font-semibold text-gray-700 dark:text-gray-200">
                                    Blog
                                </span>
        
                                <button
                                    style="--c-300:var(--gray-300);--c-400:var(--gray-400);--c-500:var(--gray-500);--c-600:var(--gray-600);"
                                    class="fi-icon-btn relative flex items-center justify-center rounded-lg outline-none transition duration-75 focus:ring-2 disabled:pointer-events-none disabled:opacity-70 h-9 w-9 text-gray-400 hover:text-gray-500 focus:ring-primary-600 dark:text-gray-500 dark:hover:text-gray-400 dark:focus:ring-primary-500 fi-sidebar-group-collapse-button -my-2 -me-2"
                                    type="button" x-on:click.stop="$store.sidebar.toggleCollapsedGroup(label)"
                                    x-bind:class="{ 'rotate-180': $store.sidebar.groupIsCollapsed(label) }">
        
                                    <svg class="fi-icon-btn-icon h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M14.77 12.79a.75.75 0 01-1.06-.02L10 8.832 6.29 12.77a.75.75 0 11-1.08-1.04l4.25-4.5a.75.75 0 011.08 0l4.25 4.5a.75.75 0 01-.02 1.06z"
                                            clip-rule="evenodd"></path>
                                    </svg>
        
                                </button>
                            </div>
        
                            <ul x-show="! ($store.sidebar.groupIsCollapsed(label) &amp;&amp; ($store.sidebar.isOpen || true))"
                                x-collapse.duration.200ms="" class="fi-sidebar-group-items grid gap-y-1">
                                <li class="fi-sidebar-item fi-sidebar-item-active">
                                    <a href="https://demo.filamentphp.com/blog/posts"
                                        x-on:click="window.matchMedia(`(max-width: 1024px)`).matches &amp;&amp; $store.sidebar.close()"
                                        class="relative flex items-center justify-center gap-x-3 rounded-lg px-2 py-2 text-sm text-gray-700 outline-none transition duration-75 hover:bg-gray-100 focus:bg-gray-100 dark:text-gray-200 dark:hover:bg-white/5 dark:focus:bg-white/5 font-medium bg-gray-100 text-primary-600 dark:bg-white/5 dark:text-primary-400">
                                        <svg class="fi-sidebar-item-icon h-6 w-6 text-primary-600 dark:text-primary-400"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z">
                                            </path>
                                        </svg>
                                        <span class="flex-1 truncate">
                                            Posts
                                        </span>
        
                                    </a>
                                </li>
                                <li class="fi-sidebar-item">
                                    <a href="https://demo.filamentphp.com/blog/categories"
                                        x-on:click="window.matchMedia(`(max-width: 1024px)`).matches &amp;&amp; $store.sidebar.close()"
                                        class="relative flex items-center justify-center gap-x-3 rounded-lg px-2 py-2 text-sm text-gray-700 outline-none transition duration-75 hover:bg-gray-100 focus:bg-gray-100 dark:text-gray-200 dark:hover:bg-white/5 dark:focus:bg-white/5 font-medium">
                                        <svg class="fi-sidebar-item-icon h-6 w-6 text-gray-400 dark:text-gray-500"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6 6.878V6a2.25 2.25 0 012.25-2.25h7.5A2.25 2.25 0 0118 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 004.5 9v.878m13.5-3A2.25 2.25 0 0119.5 9v.878m0 0a2.246 2.246 0 00-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0121 12v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6c0-.98.626-1.813 1.5-2.122">
                                            </path>
                                        </svg>
                                        <span class="flex-1 truncate">
                                            Categories
                                        </span>
        
                                    </a>
                                </li>
                                <li class="fi-sidebar-item">
                                    <a href="https://demo.filamentphp.com/blog/authors"
                                        x-on:click="window.matchMedia(`(max-width: 1024px)`).matches &amp;&amp; $store.sidebar.close()"
                                        class="relative flex items-center justify-center gap-x-3 rounded-lg px-2 py-2 text-sm text-gray-700 outline-none transition duration-75 hover:bg-gray-100 focus:bg-gray-100 dark:text-gray-200 dark:hover:bg-white/5 dark:focus:bg-white/5 font-medium">
                                        <svg class="fi-sidebar-item-icon h-6 w-6 text-gray-400 dark:text-gray-500"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z">
                                            </path>
                                        </svg>
                                        <span class="flex-1 truncate">
                                            Authors
                                        </span>
        
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
        
        
                    <script>
                        let collapsedGroups = JSON.parse(
                            localStorage.getItem('collapsedGroups'),
                        )
        
                        if (collapsedGroups === null || collapsedGroups === 'null') {
                            localStorage.setItem(
                                'collapsedGroups',
                                JSON.stringify([]),
                            )
                        }
        
                        collapsedGroups = JSON.parse(
                            localStorage.getItem('collapsedGroups'),
                        )
        
                        document
                            .querySelectorAll('.fi-sidebar-group')
                            .forEach((group) => {
                                if (
                                    !collapsedGroups.includes(group.dataset.groupLabel)
                                ) {
                                    return
                                }
        
                                // Alpine.js loads too slow, so attempt to hide a
                                // collapsed sidebar group earlier.
                                group.querySelector(
                                    '.fi-sidebar-group-items',
                                ).style.display = 'none'
                                group
                                    .querySelector('.fi-sidebar-group-collapse-button')
                                    .classList.add('rotate-180')
                            })
                    </script>
        
        
                </nav>
        
        
            </aside>
        
            <div class="fi-main-ctn w-screen flex-1 flex-col flex lg:ps-[--sidebar-width]">
                <div class="fi-topbar sticky top-0 z-20 overflow-x-clip">
                    <nav
                        class="flex h-16 items-center gap-x-4 bg-white px-4 shadow-sm ring-1 ring-gray-950/5 dark:bg-gray-900 dark:ring-white/10 md:px-6 lg:px-8">
        
        
                        <button
                            style="--c-300: var(--gray-300); --c-400: var(--gray-400); --c-500: var(--gray-500); --c-600: var(--gray-600); display: none;"
                            class="fi-icon-btn relative flex items-center justify-center rounded-lg outline-none transition duration-75 focus:ring-2 disabled:pointer-events-none disabled:opacity-70 h-9 w-9 text-gray-400 hover:text-gray-500 focus:ring-primary-600 dark:text-gray-500 dark:hover:text-gray-400 dark:focus:ring-primary-500 -ms-1.5 lg:hidden"
                            title="Expand sidebar" type="button" x-data="{}" x-on:click="$store.sidebar.open()"
                            x-show="! $store.sidebar.isOpen">
                            <span class="sr-only">
                                Expand sidebar
                            </span>
        
                            <svg class="fi-icon-btn-icon h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                            </svg>
        
                        </button>
        
                        <button
                            style="--c-300:var(--gray-300);--c-400:var(--gray-400);--c-500:var(--gray-500);--c-600:var(--gray-600);"
                            class="fi-icon-btn relative flex items-center justify-center rounded-lg outline-none transition duration-75 focus:ring-2 disabled:pointer-events-none disabled:opacity-70 h-9 w-9 text-gray-400 hover:text-gray-500 focus:ring-primary-600 dark:text-gray-500 dark:hover:text-gray-400 dark:focus:ring-primary-500 -ms-1.5 lg:hidden"
                            title="Collapse sidebar" type="button" x-data="{}"
                            x-on:click="$store.sidebar.close()" x-show="$store.sidebar.isOpen">
                            <span class="sr-only">
                                Collapse sidebar
                            </span>
        
                            <svg class="fi-icon-btn-icon h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
        
                        </button>
        
        
                        <div class="ms-auto flex items-center gap-x-4">
        
        
                            <div wire:id="7wq8dtiN87m5XAt8rh62" class="fi-global-search flex items-center">
        
        
                                <div class="relative">
                                    <div x-id="['input']" class="fi-global-search-field">
                                        <label x-bind:for="$id('input')" class="sr-only" for="input-2">
                                            Global search
                                        </label>
        
                                        <div
                                            class="fi-input-wrapper flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white focus-within:ring-2 dark:bg-white/5 ring-gray-950/10 focus-within:ring-primary-600 dark:ring-white/20 dark:focus-within:ring-primary-500">
                                            <div class="flex items-center gap-x-3 ps-3 pe-2">
        
                                                <svg wire:loading.remove.delay="1" wire:target="search"
                                                    class="fi-input-wrapper-icon h-5 w-5 text-gray-400 dark:text-gray-500"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true" style="display: block;">
                                                    <path fill-rule="evenodd"
                                                        d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                    class="animate-spin fi-input-wrapper-icon h-5 w-5 text-gray-400 dark:text-gray-500"
                                                    wire:loading.delay="wire:loading.delay" wire:target="search"
                                                    style="display: none;">
                                                    <path clip-rule="evenodd"
                                                        d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                        fill-rule="evenodd" fill="currentColor" opacity="0.2"></path>
                                                    <path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z"
                                                        fill="currentColor"></path>
                                                </svg>
        
                                            </div>
        
                                            <div class="min-w-0 flex-1">
                                                <input
                                                    class="fi-input block w-full border-none bg-transparent py-1.5 text-base text-gray-950 outline-none transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 ps-0 pe-3"
                                                    autocomplete="off" placeholder="Search" type="search"
                                                    wire:model.live.debounce.500ms="search" x-bind:id="$id('input')"
                                                    wire:key="global-search.field.input" x-data="{}"
                                                    id="input-2">
                                            </div>
        
                                        </div>
                                    </div>
        
                                </div>
        
        
                            </div>
        
        
                            <div wire:id="hTrvX4N4B04V1cvsBvuV" class="flex" wire:poll.30s="">
                                <div x-data="{}"
                                    x-on:click="$dispatch('open-modal', { id: 'database-notifications' })"
                                    class="inline-block" data-has-alpine-state="true">
                                    <button
                                        style="--c-300:var(--gray-300);--c-400:var(--gray-400);--c-500:var(--gray-500);--c-600:var(--gray-600);"
                                        class="fi-icon-btn relative flex items-center justify-center rounded-lg outline-none transition duration-75 focus:ring-2 disabled:pointer-events-none disabled:opacity-70 h-9 w-9 text-gray-400 hover:text-gray-500 focus:ring-primary-600 dark:text-gray-500 dark:hover:text-gray-400 dark:focus:ring-primary-500"
                                        title="Open notifications" type="button">
                                        <span class="sr-only">
                                            Open notifications
                                        </span>
        
                                        <svg class="fi-icon-btn-icon h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0">
                                            </path>
                                        </svg>
        
                                        <div
                                            class="absolute start-full top-0 z-[1] -ms-1 -translate-x-1/2 rounded-md bg-white rtl:translate-x-1/2 dark:bg-gray-900">
                                            <div style="--c-50:var(--primary-50);--c-300:var(--primary-300);--c-400:var(--primary-400);--c-600:var(--primary-600);"
                                                class="fi-badge flex items-center justify-center gap-x-1 whitespace-nowrap rounded-md  text-xs font-medium ring-1 ring-inset px-0.5 min-w-[theme(spacing.4)] tracking-tighter bg-custom-50 text-custom-600 ring-custom-600/10 dark:bg-custom-400/10 dark:text-custom-400 dark:ring-custom-400/30">
        
                                                <span>
                                                    0
                                                </span>
        
                                            </div>
                                        </div>
                                    </button>
                                </div>
        
                                <div aria-modal="true" role="dialog" x-data="{
                                    isOpen: false,
                                
                                    livewire: null,
                                
                                    close: function() {
                                        this.isOpen = false
                                
                                        this.$refs.modalContainer.dispatchEvent(
                                            new CustomEvent('modal-closed', { id: 'database-notifications' }),
                                        )
                                    },
                                
                                    open: function() {
                                        this.isOpen = true
                                
                                        this.$refs.modalContainer.dispatchEvent(
                                            new CustomEvent('modal-opened', { id: 'database-notifications' }),
                                        )
                                    },
                                }"
                                    x-on:close-modal.window="if ($event.detail.id === 'database-notifications') close()"
                                    x-on:open-modal.window="if ($event.detail.id === 'database-notifications') open()"
                                    x-trap.noscroll="isOpen" wire:ignore.self="" class="fi-modal inline-block">
        
                                    <div x-show="isOpen" x-transition.duration.300ms.opacity=""
                                        class="fixed inset-0 z-40 min-h-full overflow-y-auto overflow-x-hidden transition"
                                        style="display: none;">
                                        <div aria-hidden="true"
                                            x-on:click="$dispatch('close-modal', { id: 'database-notifications' })"
                                            class="fi-modal-close-overlay fixed inset-0 bg-gray-950/50 dark:bg-gray-950/75 cursor-pointer"
                                            style="will-change: transform"></div>
        
                                        <div x-ref="modalContainer" class="pointer-events-none relative w-full transition">
                                            <div x-data="{ isShown: false }" x-init="$nextTick(() => {
                                                isShown = isOpen
                                                $watch('isOpen', () => (isShown = isOpen))
                                            })"
                                                x-on:keydown.window.escape="$dispatch('close-modal', { id: 'database-notifications' })"
                                                x-show="isShown" x-transition:enter="duration-300"
                                                x-transition:leave="duration-300"
                                                x-transition:enter-start="translate-x-full rtl:-translate-x-full"
                                                x-transition:enter-end="translate-x-0"
                                                x-transition:leave-start="translate-x-0"
                                                x-transition:leave-end="translate-x-full rtl:-translate-x-full"
                                                class="fi-modal-window pointer-events-auto relative flex w-full cursor-default flex-col bg-white shadow-xl ring-1 ring-gray-950/5 dark:bg-gray-900 dark:ring-white/10 fi-modal-slide-over-window ms-auto overflow-y-auto h-screen max-w-md"
                                                style="display: none;" data-has-alpine-state="true">
                                                <div
                                                    class="fi-modal-header flex px-6 pt-6 sticky top-0 z-10 border-b border-gray-200 bg-white bg-white pb-6 dark:border-white/10 dark:bg-gray-900 gap-x-5">
                                                    <div class="absolute end-6 top-6">
                                                        <button
                                                            style="--c-300:var(--gray-300);--c-400:var(--gray-400);--c-500:var(--gray-500);--c-600:var(--gray-600);"
                                                            class="fi-icon-btn relative flex items-center justify-center rounded-lg outline-none transition duration-75 focus:ring-2 disabled:pointer-events-none disabled:opacity-70 h-9 w-9 text-gray-400 hover:text-gray-500 focus:ring-primary-600 dark:text-gray-500 dark:hover:text-gray-400 dark:focus:ring-primary-500 fi-modal-close-btn -m-1.5"
                                                            title="Close" type="button" tabindex="-1"
                                                            x-on:click="$dispatch('close-modal', { id: 'database-notifications' })">
                                                            <span class="sr-only">
                                                                Close
                                                            </span>
        
                                                            <svg class="fi-icon-btn-icon h-6 w-6"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                                aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M6 18L18 6M6 6l12 12"></path>
                                                            </svg>
        
                                                        </button>
                                                    </div>
        
                                                    <div>
                                                        <h2
                                                            class="fi-modal-heading text-base font-semibold leading-6 text-gray-950 dark:text-white">
                                                            <span class="relative">
                                                                Notifications
        
                                                            </span>
                                                        </h2>
        
                                                        <div class="mt-2 flex gap-x-3">
        
                                                            <button
                                                                style="--c-300:var(--danger-300);--c-400:var(--danger-400);--c-500:var(--danger-500);--c-600:var(--danger-600);"
                                                                class="fi-link fi-link-size-md relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus:underline disabled:pointer-events-none disabled:opacity-70 gap-1.5 text-sm text-custom-600 dark:text-custom-400"
                                                                type="button" wire:loading.attr="disabled"
                                                                wire:target="clearNotifications" tabindex="-1"
                                                                wire:click="clearNotifications" x-on:click="close()">
        
                                                                <svg fill="none" viewBox="0 0 24 24"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    class="animate-spin fi-link-icon h-5 w-5 text-custom-600 dark:text-custom-400"
                                                                    wire:loading.delay=""
                                                                    wire:target="clearNotifications">
                                                                    <path clip-rule="evenodd"
                                                                        d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                        fill-rule="evenodd" fill="currentColor"
                                                                        opacity="0.2"></path>
                                                                    <path
                                                                        d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z"
                                                                        fill="currentColor"></path>
                                                                </svg>
        
                                                                Clear
        
        
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="fi-modal-content flex flex-col gap-y-4 py-6 flex-1 px-6">
                                                    <div
                                                        class="-mx-6 -mt-6 divide-y divide-gray-200 dark:divide-white/10 -mb-6">
                                                        <div class="">
                                                            <div x-data="notificationComponent({ notification: JSON.parse('{\u0022id\u0022:\u0022e48a5877-4a60-4996-832d-26442eb72a71\u0022,\u0022actions\u0022:[{\u0022name\u0022:\u0022View\u0022,\u0022color\u0022:null,\u0022event\u0022:null,\u0022eventData\u0022:[],\u0022dispatchDirection\u0022:false,\u0022dispatchToComponent\u0022:null,\u0022extraAttributes\u0022:[],\u0022icon\u0022:null,\u0022iconPosition\u0022:\u0022before\u0022,\u0022iconSize\u0022:null,\u0022isOutlined\u0022:false,\u0022isDisabled\u0022:false,\u0022label\u0022:\u0022View\u0022,\u0022shouldClose\u0022:false,\u0022shouldMarkAsRead\u0022:false,\u0022shouldMarkAsUnread\u0022:false,\u0022shouldOpenUrlInNewTab\u0022:false,\u0022size\u0022:\u0022sm\u0022,\u0022url\u0022:\u0022https:\\\/\\\/demo.filamentphp.com\\\/shop\\\/orders\\\/1001\\\/edit\u0022,\u0022view\u0022:\u0022filament-actions::link-action\u0022}],\u0022body\u0022:\u0022**Prof. Alexzander Casper II ordered 2 products.**\u0022,\u0022color\u0022:null,\u0022duration\u0022:\u0022persistent\u0022,\u0022icon\u0022:\u0022heroicon-o-shopping-bag\u0022,\u0022iconColor\u0022:null,\u0022title\u0022:\u0022New order\u0022,\u0022view\u0022:\u0022filament-notifications::notification\u0022,\u0022viewData\u0022:[]}') })"
                                                                class="fi-no-notification pointer-events-auto invisible w-full transition duration-300"
                                                                style="display: block; visibility: visible;"
                                                                wire:key="hTrvX4N4B04V1cvsBvuV.notifications.e48a5877-4a60-4996-832d-26442eb72a71"
                                                                x-transition:enter-start="opacity-0"
                                                                x-transition:leave-end="opacity-0">
                                                                <div class="flex w-full gap-3 p-4" style="">
                                                                    <svg style="--c-400:var(--gray-400);"
                                                                        class="fi-no-notification-icon text-custom-400 h-6 w-6"
                                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                        viewBox="0 0 24 24" stroke-width="1.5"
                                                                        stroke="currentColor" aria-hidden="true">
                                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                                            d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z">
                                                                        </path>
                                                                    </svg>
                                                                    <div class="mt-0.5 grid flex-1">
                                                                        <h3
                                                                            class="fi-no-notification-title text-sm font-medium text-gray-950 dark:text-white">
                                                                            New order
                                                                        </h3>
        
                                                                        <time
                                                                            class="fi-no-notification-date text-sm text-gray-500 dark:text-gray-400 mt-1">
                                                                            4 minutes ago
                                                                        </time>
        
                                                                        <p
                                                                            class="fi-no-notification-body text-sm text-gray-500 dark:text-gray-400 mt-1">
                                                                            **Prof. Alexzander Casper II ordered 2 products.**
                                                                        </p>
        
                                                                        <div
                                                                            class="fi-no-notification-actions flex gap-x-3 mt-3">
                                                                            <a style="--c-300:var(--primary-300);--c-400:var(--primary-400);--c-500:var(--primary-500);--c-600:var(--primary-600);"
                                                                                class="fi-link fi-link-size-sm relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus:underline disabled:pointer-events-none disabled:opacity-70 gap-1 text-sm text-custom-600 dark:text-custom-400 fi-ac-link-action"
                                                                                href="https://demo.filamentphp.com/shop/orders/1001/edit">
        
                                                                                View
        
        
                                                                            </a>
        
                                                                        </div>
                                                                    </div>
        
                                                                    <button
                                                                        style="--c-300:var(--gray-300);--c-400:var(--gray-400);--c-500:var(--gray-500);--c-600:var(--gray-600);"
                                                                        class="fi-icon-btn relative flex items-center justify-center rounded-lg outline-none transition duration-75 focus:ring-2 disabled:pointer-events-none disabled:opacity-70 h-9 w-9 text-gray-400 hover:text-gray-500 focus:ring-primary-600 dark:text-gray-500 dark:hover:text-gray-400 dark:focus:ring-primary-500 fi-no-notification-close-btn -m-2"
                                                                        type="button" x-on:click="close">
        
                                                                        <svg class="fi-icon-btn-icon h-5 w-5"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 20 20" fill="currentColor"
                                                                            aria-hidden="true">
                                                                            <path
                                                                                d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z">
                                                                            </path>
                                                                        </svg>
        
                                                                    </button>
                                                                </div>
                                                            </div>
        
                                                        </div>
                                                    </div>
                                                </div>
        
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <div x-data="{}" x-init="window.addEventListener('EchoLoaded', () => {
                                    window.Echo.private('App.Models.User.1').listen('.database-notifications.sent', () => {
                                        setTimeout(() => $wire.call('$refresh'), 500)
                                    })
                                })
                                
                                if (window.Echo) {
                                    window.dispatchEvent(new CustomEvent('EchoLoaded'))
                                }" data-has-alpine-state="true"></div>
                            </div>
                            <div x-data="{
                                toggle: function(event) {
                                    $refs.panel.toggle(event)
                                },
                            
                                open: function(event) {
                                    $refs.panel.open(event)
                                },
                            
                                close: function(event) {
                                    $refs.panel.close(event)
                                },
                            }" class="fi-dropdown fi-user-menu">
                                <div x-on:click="toggle" class="fi-dropdown-trigger flex cursor-pointer">
                                    <button aria-label="User menu" type="button">
                                        <div style="background-image: url('https://ui-avatars.com/api/?name=D+U&amp;color=FFFFFF&amp;background=09090b');"
                                            class="fi-avatar bg-cover bg-center h-9 w-9 fi-user-avatar rounded-full"></div>
                                    </button>
                                </div>
        
                                <div x-float.placement.bottom-end.flip.teleport.offset="{ offset: 8 }" x-ref="panel"
                                    x-transition:enter-start="opacity-0" x-transition:leave-end="opacity-0"
                                    class="fi-dropdown-panel absolute z-10 w-screen divide-y divide-gray-100 rounded-lg bg-white shadow-lg ring-1 ring-gray-950/5 transition dark:divide-white/5 dark:bg-gray-900 dark:ring-white/10 max-w-[14rem]"
                                    style="position: fixed; display: none;">
                                    <div style=""
                                        class="fi-dropdown-header flex w-full gap-2 p-3 text-sm fi-dropdown-header-color-gray"
                                        icon-alias="panels::user-menu.profile-item">
                                        <svg class="fi-dropdown-header-icon h-5 w-5 text-gray-400 dark:text-gray-500"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-5.5-2.5a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zM10 12a5.99 5.99 0 00-4.793 2.39A6.483 6.483 0 0010 16.5a6.483 6.483 0 004.793-2.11A5.99 5.99 0 0010 12z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span
                                            class="fi-dropdown-header-label flex-1 truncate text-start text-gray-700 dark:text-gray-200">
                                            Demo User
                                        </span>
                                    </div>
        
        
        
                                    <div class="fi-dropdown-list p-1">
                                        <div x-data="{
                                            theme: null,
                                        
                                            init: function() {
                                                this.theme = localStorage.getItem('theme') || 'system'
                                        
                                                $dispatch('theme-changed', theme)
                                        
                                                $watch('theme', (theme) => {
                                                    $dispatch('theme-changed', theme)
                                                })
                                            },
                                        }" class="fi-theme-switcher grid grid-flow-col gap-x-1">
                                            <button aria-label="Enable light theme" type="button"
                                                x-bind:class="theme === 'light' ?
                                                    'bg-gray-50 text-primary-500 dark:bg-white/5 dark:text-primary-400' :
                                                    'text-gray-400 hover:text-gray-500 focus:text-gray-500 dark:text-gray-500 dark:hover:text-gray-400 dark:focus:text-gray-400'"
                                                x-on:click="(theme = 'light') &amp;&amp; close()"
                                                x-tooltip="{
            content: 'Enable light theme',
            theme: $store.theme,
        }"
                                                class="flex justify-center rounded-lg p-2 outline-none transition duration-75 hover:bg-gray-50 focus:bg-gray-50 dark:hover:bg-white/5 dark:focus:bg-white/5 bg-gray-50 text-primary-500 dark:bg-white/5 dark:text-primary-400">
                                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path
                                                        d="M10 2a.75.75 0 01.75.75v1.5a.75.75 0 01-1.5 0v-1.5A.75.75 0 0110 2zM10 15a.75.75 0 01.75.75v1.5a.75.75 0 01-1.5 0v-1.5A.75.75 0 0110 15zM10 7a3 3 0 100 6 3 3 0 000-6zM15.657 5.404a.75.75 0 10-1.06-1.06l-1.061 1.06a.75.75 0 001.06 1.06l1.06-1.06zM6.464 14.596a.75.75 0 10-1.06-1.06l-1.06 1.06a.75.75 0 001.06 1.06l1.06-1.06zM18 10a.75.75 0 01-.75.75h-1.5a.75.75 0 010-1.5h1.5A.75.75 0 0118 10zM5 10a.75.75 0 01-.75.75h-1.5a.75.75 0 010-1.5h1.5A.75.75 0 015 10zM14.596 15.657a.75.75 0 001.06-1.06l-1.06-1.061a.75.75 0 10-1.06 1.06l1.06 1.06zM5.404 6.464a.75.75 0 001.06-1.06l-1.06-1.06a.75.75 0 10-1.061 1.06l1.06 1.06z">
                                                    </path>
                                                </svg></button>
        
                                            <button aria-label="Enable dark theme" type="button"
                                                x-bind:class="theme === 'dark' ?
                                                    'bg-gray-50 text-primary-500 dark:bg-white/5 dark:text-primary-400' :
                                                    'text-gray-400 hover:text-gray-500 focus:text-gray-500 dark:text-gray-500 dark:hover:text-gray-400 dark:focus:text-gray-400'"
                                                x-on:click="(theme = 'dark') &amp;&amp; close()"
                                                x-tooltip="{
            content: 'Enable dark theme',
            theme: $store.theme,
        }"
                                                class="flex justify-center rounded-lg p-2 outline-none transition duration-75 hover:bg-gray-50 focus:bg-gray-50 dark:hover:bg-white/5 dark:focus:bg-white/5 text-gray-400 hover:text-gray-500 focus:text-gray-500 dark:text-gray-500 dark:hover:text-gray-400 dark:focus:text-gray-400">
                                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M7.455 2.004a.75.75 0 01.26.77 7 7 0 009.958 7.967.75.75 0 011.067.853A8.5 8.5 0 116.647 1.921a.75.75 0 01.808.083z"
                                                        clip-rule="evenodd"></path>
                                                </svg></button>
        
                                            <button aria-label="Enable system theme" type="button"
                                                x-bind:class="theme === 'system' ?
                                                    'bg-gray-50 text-primary-500 dark:bg-white/5 dark:text-primary-400' :
                                                    'text-gray-400 hover:text-gray-500 focus:text-gray-500 dark:text-gray-500 dark:hover:text-gray-400 dark:focus:text-gray-400'"
                                                x-on:click="(theme = 'system') &amp;&amp; close()"
                                                x-tooltip="{
            content: 'Enable system theme',
            theme: $store.theme,
        }"
                                                class="flex justify-center rounded-lg p-2 outline-none transition duration-75 hover:bg-gray-50 focus:bg-gray-50 dark:hover:bg-white/5 dark:focus:bg-white/5 text-gray-400 hover:text-gray-500 focus:text-gray-500 dark:text-gray-500 dark:hover:text-gray-400 dark:focus:text-gray-400">
                                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M2 4.25A2.25 2.25 0 014.25 2h11.5A2.25 2.25 0 0118 4.25v8.5A2.25 2.25 0 0115.75 15h-3.105a3.501 3.501 0 001.1 1.677A.75.75 0 0113.26 18H6.74a.75.75 0 01-.484-1.323A3.501 3.501 0 007.355 15H4.25A2.25 2.25 0 012 12.75v-8.5zm1.5 0a.75.75 0 01.75-.75h11.5a.75.75 0 01.75.75v7.5a.75.75 0 01-.75.75H4.25a.75.75 0 01-.75-.75v-7.5z"
                                                        clip-rule="evenodd"></path>
                                                </svg></button>
                                        </div>
                                    </div>
        
                                    <div class="fi-dropdown-list p-1">
                                        <form action="https://demo.filamentphp.com/logout" method="post">
                                            <input type="hidden" name="_token"
                                                value="gNzjnWrXLifyVWu3MkFsHPTYfZp2Zg0A0TdF258j">
                                            <button type="submit" style=";"
                                                class="fi-dropdown-list-item flex w-full items-center gap-2 whitespace-nowrap rounded-md p-2 text-sm transition-colors duration-75 outline-none disabled:pointer-events-none disabled:opacity-70 fi-dropdown-list-item-color-gray hover:bg-gray-50 focus:bg-gray-50 dark:hover:bg-white/5 dark:focus:bg-white/5">
                                                <svg class="fi-dropdown-list-item-icon h-5 w-5 text-gray-400 dark:text-gray-500"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M3 4.25A2.25 2.25 0 015.25 2h5.5A2.25 2.25 0 0113 4.25v2a.75.75 0 01-1.5 0v-2a.75.75 0 00-.75-.75h-5.5a.75.75 0 00-.75.75v11.5c0 .414.336.75.75.75h5.5a.75.75 0 00.75-.75v-2a.75.75 0 011.5 0v2A2.25 2.25 0 0110.75 18h-5.5A2.25 2.25 0 013 15.75V4.25z"
                                                        clip-rule="evenodd"></path>
                                                    <path fill-rule="evenodd"
                                                        d="M19 10a.75.75 0 00-.75-.75H8.704l1.048-.943a.75.75 0 10-1.004-1.114l-2.5 2.25a.75.75 0 000 1.114l2.5 2.25a.75.75 0 101.004-1.114l-1.048-.943h9.546A.75.75 0 0019 10z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <span
                                                    class="fi-dropdown-list-item-label flex-1 truncate text-start text-gray-700 dark:text-gray-200">
                                                    Sign out
                                                </span>
        
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
        
        
                        </div>
        
        
                    </nav>
                </div>
        
                <main class="fi-main mx-auto w-full px-4 md:px-6 lg:px-8 max-w-7xl">
        
        
                    <div wire:id="KNf45ZgeKjr9QYRAbUKb" class="fi-page fi-resource-list-records-page fi-resource-blog-posts">
        
        
                        <section class="grid auto-cols-fr gap-y-8 py-8">
                            <header class="fi-header flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                                <div>
                                    <nav class="fi-breadcrumbs mb-2 hidden sm:block">
                                        <ol class="flex flex-wrap items-center gap-x-2">
                                            <li class="flex gap-x-2">
        
                                                <a href="https://demo.filamentphp.com/blog/posts"
                                                    class="text-sm font-medium text-gray-500 outline-none transition duration-75 hover:text-gray-700 focus:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:text-gray-200">
                                                    Posts
                                                </a>
                                            </li>
                                            <li class="flex gap-x-2">
                                                <svg class="h-5 w-5 text-gray-400 dark:text-gray-500 rtl:hidden"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <svg class="h-5 w-5 text-gray-400 dark:text-gray-500 ltr:hidden"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <a href="#"
                                                    class="text-sm font-medium text-gray-500 outline-none transition duration-75 hover:text-gray-700 focus:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:text-gray-200">
                                                    List
                                                </a>
                                            </li>
                                        </ol>
                                    </nav>
        
                                    <h1
                                        class="fi-header-heading text-2xl font-bold tracking-tight text-gray-950 dark:text-white sm:text-3xl">
                                        Posts
                                    </h1>
        
                                </div>
        
                                <div class="fi-ac gap-3 flex flex-wrap items-center justify-start shrink-0 sm:mt-7">
                                    <a style="--c-400:var(--primary-400);--c-500:var(--primary-500);--c-600:var(--primary-600);"
                                        class="fi-btn fi-btn-size-md relative grid-flow-col items-center justify-center font-semibold outline-none transition duration-75 focus:ring-2 disabled:pointer-events-none disabled:opacity-70 rounded-lg fi-btn-color-primary gap-1.5 px-3 py-2 text-sm inline-grid shadow-sm bg-custom-600 text-white hover:bg-custom-500 dark:bg-custom-500 dark:hover:bg-custom-400 focus:ring-custom-500/50 dark:focus:ring-custom-400/50 fi-ac-btn-action"
                                        href="https://demo.filamentphp.com/blog/posts/create">
        
                                        <span class="fi-btn-label">
                                            New post
                                        </span>
        
        
                                    </a>
        
                                </div>
                            </header>
        
        
        
        
        
        
                            <div class="flex flex-col gap-y-6">
        
        
        
                                <div x-data="{
                                    collapsedGroups: [],
                                
                                    isLoading: false,
                                
                                    selectedRecords: [],
                                
                                    shouldCheckUniqueSelection: true,
                                
                                    init: function() {
                                        this.$wire.$on('deselectAllTableRecords', () =>
                                            this.deselectAllRecords(),
                                        )
                                
                                        $watch('selectedRecords', () => {
                                            if (!this.shouldCheckUniqueSelection) {
                                                this.shouldCheckUniqueSelection = true
                                
                                                return
                                            }
                                
                                            this.selectedRecords = [...new Set(this.selectedRecords)]
                                
                                            this.shouldCheckUniqueSelection = false
                                        })
                                    },
                                
                                    mountBulkAction: function(name) {
                                        $wire.set('selectedTableRecords', this.selectedRecords, false)
                                        $wire.mountTableBulkAction(name)
                                    },
                                
                                    toggleSelectRecordsOnPage: function() {
                                        const keys = this.getRecordsOnPage()
                                
                                        if (this.areRecordsSelected(keys)) {
                                            this.deselectRecords(keys)
                                
                                            return
                                        }
                                
                                        this.selectRecords(keys)
                                    },
                                
                                    getRecordsOnPage: function() {
                                        const keys = []
                                
                                        for (checkbox of $el.getElementsByClassName('fi-ta-record-checkbox')) {
                                            keys.push(checkbox.value)
                                        }
                                
                                        return keys
                                    },
                                
                                    selectRecords: function(keys) {
                                        for (key of keys) {
                                            if (this.isRecordSelected(key)) {
                                                continue
                                            }
                                
                                            this.selectedRecords.push(key)
                                        }
                                    },
                                
                                    deselectRecords: function(keys) {
                                        for (key of keys) {
                                            let index = this.selectedRecords.indexOf(key)
                                
                                            if (index === -1) {
                                                continue
                                            }
                                
                                            this.selectedRecords.splice(index, 1)
                                        }
                                    },
                                
                                    selectAllRecords: async function() {
                                        this.isLoading = true
                                
                                        this.selectedRecords = await $wire.getAllSelectableTableRecordKeys()
                                
                                        this.isLoading = false
                                    },
                                
                                    deselectAllRecords: function() {
                                        this.selectedRecords = []
                                    },
                                
                                    isRecordSelected: function(key) {
                                        return this.selectedRecords.includes(key)
                                    },
                                
                                    areRecordsSelected: function(keys) {
                                        return keys.every((key) => this.isRecordSelected(key))
                                    },
                                
                                    toggleCollapseGroup: function(group) {
                                        if (this.isGroupCollapsed(group)) {
                                            this.collapsedGroups.splice(this.collapsedGroups.indexOf(group), 1)
                                
                                            return
                                        }
                                
                                        this.collapsedGroups.push(group)
                                    },
                                
                                    isGroupCollapsed: function(group) {
                                        return this.collapsedGroups.includes(group)
                                    },
                                
                                    resetCollapsedGroups: function() {
                                        this.collapsedGroups = []
                                    },
                                }" class="fi-ta" data-has-alpine-state="true">
                                    <div
                                        class="fi-ta-ctn divide-y divide-gray-200 overflow-hidden rounded-xl bg-white shadow-sm ring-1 ring-gray-950/5 dark:divide-white/10 dark:bg-gray-900 dark:ring-white/10">
                                        <div x-bind:hidden="!(true || (selectedRecords.length & amp; & amp; 1))"
                                            x-show="true || (selectedRecords.length &amp;&amp; 1)"
                                            class="fi-ta-header-ctn divide-y divide-gray-200 dark:divide-white/10">
        
        
                                            <div x-show="true || (selectedRecords.length &amp;&amp; 1)"
                                                class="fi-ta-header-toolbar flex items-center justify-between gap-3 px-4 py-3 sm:px-6">
                                                <div class="flex shrink-0 items-center gap-x-3">
        
                                                    <div class="fi-ta-actions flex shrink-0 items-center gap-3 justify-end"
                                                        x-show="selectedRecords.length" style="display: none;">
        
                                                        <span class="inline-flex -mx-2 sm:mx-0">
                                                            <div x-data="{
                                                                toggle: function(event) {
                                                                    $refs.panel.toggle(event)
                                                                },
                                                            
                                                                open: function(event) {
                                                                    $refs.panel.open(event)
                                                                },
                                                            
                                                                close: function(event) {
                                                                    $refs.panel.close(event)
                                                                },
                                                            }" class="fi-dropdown"
                                                                data-has-alpine-state="true">
                                                                <div x-on:click="toggle"
                                                                    class="fi-dropdown-trigger flex cursor-pointer">
                                                                    <button
                                                                        style="--c-300:var(--gray-300);--c-400:var(--gray-400);--c-500:var(--gray-500);--c-600:var(--gray-600);"
                                                                        class="fi-icon-btn relative flex items-center justify-center rounded-lg outline-none transition duration-75 focus:ring-2 disabled:pointer-events-none disabled:opacity-70 h-9 w-9 text-gray-400 hover:text-gray-500 focus:ring-primary-600 dark:text-gray-500 dark:hover:text-gray-400 dark:focus:ring-primary-500 sm:hidden fi-ac-btn-group"
                                                                        title="Bulk actions" type="button">
                                                                        <span class="sr-only">
                                                                            Bulk actions
                                                                        </span>
        
                                                                        <svg class="fi-icon-btn-icon h-5 w-5"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 20 20" fill="currentColor"
                                                                            aria-hidden="true">
                                                                            <path
                                                                                d="M10 3a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM10 8.5a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM11.5 15.5a1.5 1.5 0 10-3 0 1.5 1.5 0 003 0z">
                                                                            </path>
                                                                        </svg>
        
                                                                    </button>
        
                                                                    <button style=";"
                                                                        class="fi-btn fi-btn-size-md relative grid-flow-col items-center justify-center font-semibold outline-none transition duration-75 focus:ring-2 disabled:pointer-events-none disabled:opacity-70 rounded-lg fi-btn-color-gray gap-1.5 px-3 py-2 text-sm hidden sm:inline-grid shadow-sm bg-white text-gray-950 hover:bg-gray-50 dark:bg-white/5 dark:text-white dark:hover:bg-white/10 ring-1 ring-gray-950/10 dark:ring-white/20 fi-ac-btn-group"
                                                                        type="button" wire:loading.attr="disabled">
                                                                        <svg class="fi-btn-icon h-5 w-5 text-gray-400 dark:text-gray-500"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 20 20" fill="currentColor"
                                                                            aria-hidden="true">
                                                                            <path
                                                                                d="M10 3a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM10 8.5a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM11.5 15.5a1.5 1.5 0 10-3 0 1.5 1.5 0 003 0z">
                                                                            </path>
                                                                        </svg>
        
        
                                                                        <span class="fi-btn-label">
                                                                            Bulk actions
                                                                        </span>
        
        
        
                                                                    </button>
                                                                </div>
        
                                                                <div x-float.placement.bottom-start.flip.teleport.offset="{ offset: 8 }"
                                                                    x-ref="panel" x-transition:enter-start="opacity-0"
                                                                    x-transition:leave-end="opacity-0"
                                                                    class="fi-dropdown-panel absolute z-10 w-screen divide-y divide-gray-100 rounded-lg bg-white shadow-lg ring-1 ring-gray-950/5 transition dark:divide-white/5 dark:bg-gray-900 dark:ring-white/10 max-w-[14rem]"
                                                                    style="position: fixed; display: none;">
                                                                    <div class="fi-dropdown-list p-1">
                                                                        <button
                                                                            style="--c-50:var(--danger-50);--c-400:var(--danger-400);--c-500:var(--danger-500);--c-600:var(--danger-600);"
                                                                            class="fi-dropdown-list-item flex w-full items-center gap-2 whitespace-nowrap rounded-md p-2 text-sm transition-colors duration-75 outline-none disabled:pointer-events-none disabled:opacity-70 fi-dropdown-list-item-color-danger hover:bg-custom-50 focus:bg-custom-50 dark:hover:bg-custom-400/10 dark:focus:bg-custom-400/10 fi-ac-grouped-action"
                                                                            type="button" wire:loading.attr="disabled"
                                                                            wire:target="mountTableBulkAction('delete')"
                                                                            x-on:click="mountBulkAction('delete')"
                                                                            x-bind:disabled="!selectedRecords.length"
                                                                            disabled="disabled">
                                                                            <svg wire:loading.remove.delay="1"
                                                                                wire:target="mountTableBulkAction('delete')"
                                                                                class="fi-dropdown-list-item-icon h-5 w-5 text-custom-500 dark:text-custom-400"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                                aria-hidden="true">
                                                                                <path fill-rule="evenodd"
                                                                                    d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z"
                                                                                    clip-rule="evenodd"></path>
                                                                            </svg>
        
                                                                            <svg fill="none" viewBox="0 0 24 24"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="animate-spin fi-dropdown-list-item-icon h-5 w-5 text-custom-500 dark:text-custom-400"
                                                                                wire:loading.delay=""
                                                                                wire:target="mountTableBulkAction('delete')">
                                                                                <path clip-rule="evenodd"
                                                                                    d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                                    fill-rule="evenodd" fill="currentColor"
                                                                                    opacity="0.2"></path>
                                                                                <path
                                                                                    d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z"
                                                                                    fill="currentColor"></path>
                                                                            </svg>
        
                                                                            <span
                                                                                class="fi-dropdown-list-item-label flex-1 truncate text-start text-custom-600 dark:text-custom-400 ">
                                                                                Delete selected
                                                                            </span>
        
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
        
                                                        </span>
                                                    </div>
        
                                                </div>
        
                                                <div class="ms-auto flex items-center gap-x-4">
                                                    <div x-id="['input']" class="fi-ta-search-field">
                                                        <label x-bind:for="$id('input')" class="sr-only" for="input-4">
                                                            Search
                                                        </label>
        
                                                        <div
                                                            class="fi-input-wrapper flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white focus-within:ring-2 dark:bg-white/5 ring-gray-950/10 focus-within:ring-primary-600 dark:ring-white/20 dark:focus-within:ring-primary-500">
                                                            <div class="flex items-center gap-x-3 ps-3 pe-2">
        
                                                                <svg wire:loading.remove.delay="1"
                                                                    wire:target="tableSearch"
                                                                    class="fi-input-wrapper-icon h-5 w-5 text-gray-400 dark:text-gray-500"
                                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                    fill="currentColor" aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                        d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                                                                        clip-rule="evenodd"></path>
                                                                </svg>
                                                                <svg fill="none" viewBox="0 0 24 24"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    class="animate-spin fi-input-wrapper-icon h-5 w-5 text-gray-400 dark:text-gray-500"
                                                                    wire:loading.delay="wire:loading.delay"
                                                                    wire:target="tableSearch">
                                                                    <path clip-rule="evenodd"
                                                                        d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                        fill-rule="evenodd" fill="currentColor"
                                                                        opacity="0.2"></path>
                                                                    <path
                                                                        d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z"
                                                                        fill="currentColor"></path>
                                                                </svg>
        
                                                            </div>
        
                                                            <div class="min-w-0 flex-1">
                                                                <input
                                                                    class="fi-input block w-full border-none bg-transparent py-1.5 text-base text-gray-950 outline-none transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 ps-0 pe-3"
                                                                    autocomplete="off" placeholder="Search" type="search"
                                                                    wire:model.live.debounce.500ms="tableSearch"
                                                                    x-bind:id="$id('input')"
                                                                    wire:key="KNf45ZgeKjr9QYRAbUKb.table.tableSearch.field.input"
                                                                    id="input-4">
                                                            </div>
        
                                                        </div>
                                                    </div>
        
                                                    <div x-data="{
                                                        toggle: function(event) {
                                                            $refs.panel.toggle(event)
                                                        },
                                                    
                                                        open: function(event) {
                                                            $refs.panel.open(event)
                                                        },
                                                    
                                                        close: function(event) {
                                                            $refs.panel.close(event)
                                                        },
                                                    }" class="fi-dropdown fi-ta-filters-dropdown"
                                                        wire:key="KNf45ZgeKjr9QYRAbUKb.table.filters"
                                                        data-has-alpine-state="true">
                                                        <div x-on:click="toggle"
                                                            class="fi-dropdown-trigger flex cursor-pointer">
                                                            <span class="inline-flex -mx-2">
                                                                <button
                                                                    style="--c-300:var(--gray-300);--c-400:var(--gray-400);--c-500:var(--gray-500);--c-600:var(--gray-600);"
                                                                    class="fi-icon-btn relative flex items-center justify-center rounded-lg outline-none transition duration-75 focus:ring-2 disabled:pointer-events-none disabled:opacity-70 h-9 w-9 text-gray-400 hover:text-gray-500 focus:ring-primary-600 dark:text-gray-500 dark:hover:text-gray-400 dark:focus:ring-primary-500 fi-ac-icon-btn-action"
                                                                    title="Filter" type="button">
                                                                    <span class="sr-only">
                                                                        Filter
                                                                    </span>
        
                                                                    <svg class="fi-icon-btn-icon h-5 w-5"
                                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                        fill="currentColor" aria-hidden="true">
                                                                        <path fill-rule="evenodd"
                                                                            d="M2.628 1.601C5.028 1.206 7.49 1 10 1s4.973.206 7.372.601a.75.75 0 01.628.74v2.288a2.25 2.25 0 01-.659 1.59l-4.682 4.683a2.25 2.25 0 00-.659 1.59v3.037c0 .684-.31 1.33-.844 1.757l-1.937 1.55A.75.75 0 018 18.25v-5.757a2.25 2.25 0 00-.659-1.591L2.659 6.22A2.25 2.25 0 012 4.629V2.34a.75.75 0 01.628-.74z"
                                                                            clip-rule="evenodd"></path>
                                                                    </svg>
        
                                                                    <div
                                                                        class="absolute start-full top-0 z-[1] -ms-1 -translate-x-1/2 rounded-md bg-white rtl:translate-x-1/2 dark:bg-gray-900">
                                                                        <div style="--c-50:var(--primary-50);--c-300:var(--primary-300);--c-400:var(--primary-400);--c-600:var(--primary-600);"
                                                                            class="fi-badge flex items-center justify-center gap-x-1 whitespace-nowrap rounded-md  text-xs font-medium ring-1 ring-inset px-0.5 min-w-[theme(spacing.4)] tracking-tighter bg-custom-50 text-custom-600 ring-custom-600/10 dark:bg-custom-400/10 dark:text-custom-400 dark:ring-custom-400/30">
        
                                                                            <span>
                                                                                0
                                                                            </span>
        
                                                                        </div>
                                                                    </div>
                                                                </button>
        
                                                            </span>
                                                        </div>
        
                                                        <div x-float.placement.bottom-end.flip.shift.offset="{ offset: 8 }"
                                                            x-ref="panel" x-transition:enter-start="opacity-0"
                                                            x-transition:leave-end="opacity-0" wire:ignore.self=""
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.filters.panel"
                                                            class="fi-dropdown-panel absolute z-10 w-screen divide-y divide-gray-100 rounded-lg bg-white shadow-lg ring-1 ring-gray-950/5 transition dark:divide-white/5 dark:bg-gray-900 dark:ring-white/10 max-w-xs"
                                                            style="display: none;">
                                                            <div class="fi-ta-filters grid gap-y-4 p-6">
                                                                <div class="flex items-center justify-between">
                                                                    <h4
                                                                        class="text-base font-semibold leading-6 text-gray-950 dark:text-white">
                                                                        Filters
                                                                    </h4>
        
                                                                    <button
                                                                        style="--c-300:var(--danger-300);--c-400:var(--danger-400);--c-500:var(--danger-500);--c-600:var(--danger-600);"
                                                                        class="fi-link fi-link-size-md relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus:underline disabled:pointer-events-none disabled:opacity-70 gap-1.5 text-sm text-custom-600 dark:text-custom-400"
                                                                        type="button" wire:loading.attr="disabled"
                                                                        wire:target="tableFilters,resetTableFiltersForm"
                                                                        wire:click="resetTableFiltersForm"
                                                                        wire:loading.remove.delay="">
        
                                                                        <svg fill="none" viewBox="0 0 24 24"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            class="animate-spin fi-link-icon h-5 w-5 text-custom-600 dark:text-custom-400"
                                                                            wire:loading.delay=""
                                                                            wire:target="resetTableFiltersForm">
                                                                            <path clip-rule="evenodd"
                                                                                d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                                fill-rule="evenodd" fill="currentColor"
                                                                                opacity="0.2"></path>
                                                                            <path
                                                                                d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z"
                                                                                fill="currentColor"></path>
                                                                        </svg>
        
                                                                        Reset
        
        
                                                                    </button>
        
                                                                    <svg fill="none" viewBox="0 0 24 24"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        class="animate-spin h-5 w-5 text-gray-400 dark:text-gray-500"
                                                                        wire:loading.delay=""
                                                                        wire:target="tableFilters,resetTableFiltersForm">
                                                                        <path clip-rule="evenodd"
                                                                            d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                            fill-rule="evenodd" fill="currentColor"
                                                                            opacity="0.2"></path>
                                                                        <path
                                                                            d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </div>
        
                                                                <div style="--cols-default: repeat(1, minmax(0, 1fr)); --cols-lg: repeat(1, minmax(0, 1fr));"
                                                                    class="grid grid-cols-[--cols-default] lg:grid-cols-[--cols-lg] fi-fo-component-ctn gap-6">
                                                                    <div style="--col-span-default: span 1 / span 1;"
                                                                        class="col-[--col-span-default]">
                                                                        <div>
                                                                            <div style="--cols-default: repeat(1, minmax(0, 1fr));"
                                                                                class="grid grid-cols-[--cols-default] fi-fo-component-ctn gap-6">
                                                                                <div style="--col-span-default: span 1 / span 1;"
                                                                                    class="col-[--col-span-default]"
                                                                                    wire:key="KNf45ZgeKjr9QYRAbUKb.tableFilters.published_at.published_from.Filament\Forms\Components\DatePicker">
                                                                                    <div class="fi-fo-field-wrp">
        
                                                                                        <div class="grid gap-y-2">
                                                                                            <div
                                                                                                class="flex items-center justify-between gap-x-3">
                                                                                                <label
                                                                                                    class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                                                                                    for="tableFilters.published_at.published_from">
        
        
                                                                                                    <span
                                                                                                        class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
        
                                                                                                        Published from </span>
        
        
                                                                                                </label>
        
                                                                                            </div>
        
                                                                                            <div class="grid gap-y-2">
                                                                                                <div
                                                                                                    class="fi-input-wrapper flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white focus-within:ring-2 dark:bg-white/5 ring-gray-950/10 focus-within:ring-primary-600 dark:ring-white/20 dark:focus-within:ring-primary-500">
        
                                                                                                    <div
                                                                                                        class="min-w-0 flex-1">
                                                                                                        <input
                                                                                                            class="fi-input block w-full border-none bg-transparent py-1.5 text-base text-gray-950 outline-none transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 ps-3 pe-3"
                                                                                                            id="tableFilters.published_at.published_from"
                                                                                                            placeholder="Dec 18, 2022"
                                                                                                            type="date"
                                                                                                            wire:model.live="tableFilters.published_at.published_from">
                                                                                                    </div>
        
                                                                                                </div>
        
        
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
        
                                                                                <div style="--col-span-default: span 1 / span 1;"
                                                                                    class="col-[--col-span-default]"
                                                                                    wire:key="KNf45ZgeKjr9QYRAbUKb.tableFilters.published_at.published_until.Filament\Forms\Components\DatePicker">
                                                                                    <div class="fi-fo-field-wrp">
        
                                                                                        <div class="grid gap-y-2">
                                                                                            <div
                                                                                                class="flex items-center justify-between gap-x-3">
                                                                                                <label
                                                                                                    class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                                                                                    for="tableFilters.published_at.published_until">
        
        
                                                                                                    <span
                                                                                                        class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
        
                                                                                                        Published until </span>
        
        
                                                                                                </label>
        
                                                                                            </div>
        
                                                                                            <div class="grid gap-y-2">
                                                                                                <div
                                                                                                    class="fi-input-wrapper flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white focus-within:ring-2 dark:bg-white/5 ring-gray-950/10 focus-within:ring-primary-600 dark:ring-white/20 dark:focus-within:ring-primary-500">
        
                                                                                                    <div
                                                                                                        class="min-w-0 flex-1">
                                                                                                        <input
                                                                                                            class="fi-input block w-full border-none bg-transparent py-1.5 text-base text-gray-950 outline-none transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 ps-3 pe-3"
                                                                                                            id="tableFilters.published_at.published_until"
                                                                                                            placeholder="Aug 10, 2023"
                                                                                                            type="date"
                                                                                                            wire:model.live="tableFilters.published_at.published_until">
                                                                                                    </div>
        
                                                                                                </div>
        
        
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
                                                                    </div>
                                                                </div>
        
                                                            </div>
                                                        </div>
                                                    </div>
        
                                                    <div x-data="{
                                                        toggle: function(event) {
                                                            $refs.panel.toggle(event)
                                                        },
                                                    
                                                        open: function(event) {
                                                            $refs.panel.open(event)
                                                        },
                                                    
                                                        close: function(event) {
                                                            $refs.panel.close(event)
                                                        },
                                                    }" class="fi-dropdown fi-ta-col-toggle"
                                                        wire:key="KNf45ZgeKjr9QYRAbUKb.table.column-toggle"
                                                        data-has-alpine-state="true">
                                                        <div x-on:click="toggle"
                                                            class="fi-dropdown-trigger flex cursor-pointer"
                                                            aria-expanded="false">
                                                            <span class="inline-flex -mx-2">
                                                                <button
                                                                    style="--c-300:var(--gray-300);--c-400:var(--gray-400);--c-500:var(--gray-500);--c-600:var(--gray-600);"
                                                                    class="fi-icon-btn relative flex items-center justify-center rounded-lg outline-none transition duration-75 focus:ring-2 disabled:pointer-events-none disabled:opacity-70 h-9 w-9 text-gray-400 hover:text-gray-500 focus:ring-primary-600 dark:text-gray-500 dark:hover:text-gray-400 dark:focus:ring-primary-500 fi-ac-icon-btn-action"
                                                                    title="Toggle columns" type="button">
                                                                    <span class="sr-only">
                                                                        Toggle columns
                                                                    </span>
        
                                                                    <svg class="fi-icon-btn-icon h-5 w-5"
                                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                        fill="currentColor" aria-hidden="true">
                                                                        <path
                                                                            d="M14 17h2.75A2.25 2.25 0 0019 14.75v-9.5A2.25 2.25 0 0016.75 3H14v14zM12.5 3h-5v14h5V3zM3.25 3H6v14H3.25A2.25 2.25 0 011 14.75v-9.5A2.25 2.25 0 013.25 3z">
                                                                        </path>
                                                                    </svg>
        
                                                                </button>
        
                                                            </span>
                                                        </div>
        
                                                        <div x-float.placement.bottom-end.flip.shift.offset="{ offset: 8 }"
                                                            x-ref="panel" x-transition:enter-start="opacity-0"
                                                            x-transition:leave-end="opacity-0" wire:ignore.self=""
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.column-toggle.panel"
                                                            class="fi-dropdown-panel absolute z-10 w-screen divide-y divide-gray-100 rounded-lg bg-white shadow-lg ring-1 ring-gray-950/5 transition dark:divide-white/5 dark:bg-gray-900 dark:ring-white/10 max-w-xs"
                                                            style="display: none; left: 904px; top: 248px;">
                                                            <div class="grid gap-y-4 p-6">
                                                                <h4
                                                                    class="text-base font-semibold leading-6 text-gray-950 dark:text-white">
                                                                    Columns
                                                                </h4>
        
                                                                <div style="--cols-default: repeat(1, minmax(0, 1fr)); --cols-lg: repeat(1, minmax(0, 1fr));"
                                                                    class="grid grid-cols-[--cols-default] lg:grid-cols-[--cols-lg] fi-fo-component-ctn gap-6">
                                                                    <div style="--col-span-default: span 1 / span 1;"
                                                                        class="col-[--col-span-default]"
                                                                        wire:key="KNf45ZgeKjr9QYRAbUKb.toggledTableColumns.slug.Filament\Forms\Components\Checkbox">
                                                                        <div class="fi-fo-field-wrp">
        
                                                                            <div class="grid gap-y-2">
                                                                                <div
                                                                                    class="flex items-center justify-between gap-x-3">
                                                                                    <label
                                                                                        class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                                                                        for="toggledTableColumns.slug">
                                                                                        <input type="checkbox"
                                                                                            class="fi-checkbox-input rounded border-none bg-white shadow-sm ring-1 transition duration-75 checked:ring-0 focus:ring-2 focus:ring-offset-0 disabled:pointer-events-none disabled:bg-gray-50 disabled:text-gray-50 disabled:checked:bg-current disabled:checked:text-gray-400 dark:bg-white/5 dark:disabled:bg-transparent dark:disabled:checked:bg-gray-600 text-primary-600 ring-gray-950/10 focus:ring-primary-600 checked:focus:ring-primary-500/50 dark:ring-white/20 dark:checked:bg-primary-500 dark:focus:ring-primary-500 dark:checked:focus:ring-primary-400/50 dark:disabled:ring-white/10"
                                                                                            id="toggledTableColumns.slug"
                                                                                            wire:loading.attr="disabled"
                                                                                            wire:model.live="toggledTableColumns.slug">
        
                                                                                        <span
                                                                                            class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
        
                                                                                            Slug </span>
        
        
                                                                                    </label>
        
                                                                                </div>
        
                                                                            </div>
                                                                        </div>
                                                                    </div>
        
                                                                    <div style="--col-span-default: span 1 / span 1;"
                                                                        class="col-[--col-span-default]"
                                                                        wire:key="KNf45ZgeKjr9QYRAbUKb.toggledTableColumns.author.name.Filament\Forms\Components\Checkbox">
                                                                        <div class="fi-fo-field-wrp">
        
                                                                            <div class="grid gap-y-2">
                                                                                <div
                                                                                    class="flex items-center justify-between gap-x-3">
                                                                                    <label
                                                                                        class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                                                                        for="toggledTableColumns.author.name">
                                                                                        <input type="checkbox"
                                                                                            class="fi-checkbox-input rounded border-none bg-white shadow-sm ring-1 transition duration-75 checked:ring-0 focus:ring-2 focus:ring-offset-0 disabled:pointer-events-none disabled:bg-gray-50 disabled:text-gray-50 disabled:checked:bg-current disabled:checked:text-gray-400 dark:bg-white/5 dark:disabled:bg-transparent dark:disabled:checked:bg-gray-600 text-primary-600 ring-gray-950/10 focus:ring-primary-600 checked:focus:ring-primary-500/50 dark:ring-white/20 dark:checked:bg-primary-500 dark:focus:ring-primary-500 dark:checked:focus:ring-primary-400/50 dark:disabled:ring-white/10"
                                                                                            id="toggledTableColumns.author.name"
                                                                                            wire:loading.attr="disabled"
                                                                                            wire:model.live="toggledTableColumns.author.name">
        
                                                                                        <span
                                                                                            class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
        
                                                                                            Author </span>
        
        
                                                                                    </label>
        
                                                                                </div>
        
                                                                            </div>
                                                                        </div>
                                                                    </div>
        
                                                                    <div style="--col-span-default: span 1 / span 1;"
                                                                        class="col-[--col-span-default]"
                                                                        wire:key="KNf45ZgeKjr9QYRAbUKb.toggledTableColumns.category.name.Filament\Forms\Components\Checkbox">
                                                                        <div class="fi-fo-field-wrp">
        
                                                                            <div class="grid gap-y-2">
                                                                                <div
                                                                                    class="flex items-center justify-between gap-x-3">
                                                                                    <label
                                                                                        class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                                                                        for="toggledTableColumns.category.name">
                                                                                        <input type="checkbox"
                                                                                            class="fi-checkbox-input rounded border-none bg-white shadow-sm ring-1 transition duration-75 checked:ring-0 focus:ring-2 focus:ring-offset-0 disabled:pointer-events-none disabled:bg-gray-50 disabled:text-gray-50 disabled:checked:bg-current disabled:checked:text-gray-400 dark:bg-white/5 dark:disabled:bg-transparent dark:disabled:checked:bg-gray-600 text-primary-600 ring-gray-950/10 focus:ring-primary-600 checked:focus:ring-primary-500/50 dark:ring-white/20 dark:checked:bg-primary-500 dark:focus:ring-primary-500 dark:checked:focus:ring-primary-400/50 dark:disabled:ring-white/10"
                                                                                            id="toggledTableColumns.category.name"
                                                                                            wire:loading.attr="disabled"
                                                                                            wire:model.live="toggledTableColumns.category.name">
        
                                                                                        <span
                                                                                            class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
        
                                                                                            Category </span>
        
        
                                                                                    </label>
        
                                                                                </div>
        
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
        
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="fi-ta-selection-indicator flex flex-col justify-between gap-y-1 bg-gray-50 px-3 py-2 dark:bg-white/5 sm:flex-row sm:items-center sm:px-6 sm:py-1.5"
                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.selection.indicator" colspan="10"
                                            x-bind:hidden="!selectedRecords.length" x-show="selectedRecords.length"
                                            hidden="hidden" style="display: none;">
                                            <div class="flex gap-x-3">
                                                <svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                    class="animate-spin h-5 w-5 text-gray-400 dark:text-gray-500"
                                                    x-show="isLoading" style="display: none;">
                                                    <path clip-rule="evenodd"
                                                        d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                        fill-rule="evenodd" fill="currentColor" opacity="0.2"></path>
                                                    <path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z"
                                                        fill="currentColor"></path>
                                                </svg>
        
                                                <span
                                                    x-text="
                    window.pluralize('1 record selected|:count records selected', selectedRecords.length, {
                        count: selectedRecords.length,
                    })
                "
                                                    class="text-sm font-medium leading-6 text-gray-700 dark:text-gray-200">1
                                                    record selected</span>
                                            </div>
        
                                            <div class="flex gap-x-3">
                                                <button
                                                    style="--c-300:var(--primary-300);--c-400:var(--primary-400);--c-500:var(--primary-500);--c-600:var(--primary-600);"
                                                    class="fi-link fi-link-size-md relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus:underline disabled:pointer-events-none disabled:opacity-70 gap-1.5 text-sm text-custom-600 dark:text-custom-400"
                                                    type="button" wire:loading.attr="disabled"
                                                    id="KNf45ZgeKjr9QYRAbUKb.table.selection.indicator.record-count.100"
                                                    x-on:click="selectAllRecords" x-show="100 !== selectedRecords.length">
        
        
                                                    Select all 100
        
        
                                                </button>
        
                                                <button
                                                    style="--c-300:var(--danger-300);--c-400:var(--danger-400);--c-500:var(--danger-500);--c-600:var(--danger-600);"
                                                    class="fi-link fi-link-size-md relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus:underline disabled:pointer-events-none disabled:opacity-70 gap-1.5 text-sm text-custom-600 dark:text-custom-400"
                                                    type="button" wire:loading.attr="disabled"
                                                    x-on:click="deselectAllRecords">
        
        
                                                    Deselect all
        
        
                                                </button>
        
        
                                            </div>
                                        </div>
        
        
                                        <div
                                            class="fi-ta-content relative divide-y divide-gray-200 overflow-x-auto dark:divide-white/10 dark:border-t-white/10">
                                            <table
                                                class="fi-ta-table w-full table-auto divide-y divide-gray-200 text-start dark:divide-white/5">
                                                <thead class="bg-gray-50 dark:bg-white/5">
                                                    <tr>
                                                        <th
                                                            class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 w-1">
                                                            <div class="px-3 py-4">
                                                                <label class="flex">
                                                                    <input type="checkbox"
                                                                        class="fi-checkbox-input rounded border-none bg-white shadow-sm ring-1 transition duration-75 checked:ring-0 focus:ring-2 focus:ring-offset-0 disabled:pointer-events-none disabled:bg-gray-50 disabled:text-gray-50 disabled:checked:bg-current disabled:checked:text-gray-400 dark:bg-white/5 dark:disabled:bg-transparent dark:disabled:checked:bg-gray-600 text-primary-600 ring-gray-950/10 focus:ring-primary-600 checked:focus:ring-primary-500/50 dark:ring-white/20 dark:checked:bg-primary-500 dark:focus:ring-primary-500 dark:checked:focus:ring-primary-400/50 dark:disabled:ring-white/10"
                                                                        wire:loading.attr="disabled"
                                                                        wire:target="gotoPage,nextPage,previousPage,removeTableFilter,removeTableFilters,reorderTable,resetTableFiltersForm,sortTable,tableColumnSearches,tableFilters,tableRecordsPerPage,tableSearch"
                                                                        x-bind:checked="const recordsOnPage = getRecordsOnPage()
                                                                        
                                                                        if (recordsOnPage.length & amp; &
                                                                            amp; areRecordsSelected(recordsOnPage)) {
                                                                            $el.checked = true
                                                                        
                                                                            return 'checked'
                                                                        }
                                                                        
                                                                        $el.checked = false
                                                                        
                                                                        return null"
                                                                        x-on:click="toggleSelectRecordsOnPage">
        
                                                                    <span class="sr-only">
                                                                        Select/deselect all items for bulk actions.
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </th>
        
        
                                                        <th
                                                            class="fi-ta-header-cell px-3 py-3.5 sm:first-of-type:ps-6 sm:last-of-type:pe-6 fi-table-header-cell-image">
                                                            <span
                                                                class="group flex w-full items-center gap-x-1 whitespace-nowrap ">
        
                                                                <span
                                                                    class="text-sm font-semibold text-gray-950 dark:text-white">
                                                                    Image
                                                                </span>
        
                                                            </span>
                                                        </th>
                                                        <th
                                                            class="fi-ta-header-cell px-3 py-3.5 sm:first-of-type:ps-6 sm:last-of-type:pe-6 fi-table-header-cell-title">
                                                            <button type="button" wire:click="sortTable('title')"
                                                                class="group flex w-full items-center gap-x-1 whitespace-nowrap ">
                                                                <span class="sr-only">
                                                                    Sort by
                                                                </span>
        
                                                                <span
                                                                    class="text-sm font-semibold text-gray-950 dark:text-white">
                                                                    Title
                                                                </span>
        
                                                                <svg class="fi-ta-header-cell-sort-icon h-5 w-5 transition duration-75 text-gray-400 dark:text-gray-500 group-hover:text-gray-500 group-focus:text-gray-500 dark:group-hover:text-gray-400 dark:group-focus:text-gray-400"
                                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                    fill="currentColor" aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                                        clip-rule="evenodd"></path>
                                                                </svg>
                                                                <span class="sr-only">
                                                                    Ascending
                                                                </span>
                                                            </button>
                                                        </th>
                                                        <th
                                                            class="fi-ta-header-cell px-3 py-3.5 sm:first-of-type:ps-6 sm:last-of-type:pe-6 fi-table-header-cell-slug">
                                                            <button type="button" wire:click="sortTable('slug')"
                                                                class="group flex w-full items-center gap-x-1 whitespace-nowrap ">
                                                                <span class="sr-only">
                                                                    Sort by
                                                                </span>
        
                                                                <span
                                                                    class="text-sm font-semibold text-gray-950 dark:text-white">
                                                                    Slug
                                                                </span>
        
                                                                <svg class="fi-ta-header-cell-sort-icon h-5 w-5 transition duration-75 text-gray-400 dark:text-gray-500 group-hover:text-gray-500 group-focus:text-gray-500 dark:group-hover:text-gray-400 dark:group-focus:text-gray-400"
                                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                    fill="currentColor" aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                                        clip-rule="evenodd"></path>
                                                                </svg>
                                                                <span class="sr-only">
                                                                    Ascending
                                                                </span>
                                                            </button>
                                                        </th>
                                                        <th
                                                            class="fi-ta-header-cell px-3 py-3.5 sm:first-of-type:ps-6 sm:last-of-type:pe-6 fi-table-header-cell-author.name">
                                                            <button type="button" wire:click="sortTable('author.name')"
                                                                class="group flex w-full items-center gap-x-1 whitespace-nowrap ">
                                                                <span class="sr-only">
                                                                    Sort by
                                                                </span>
        
                                                                <span
                                                                    class="text-sm font-semibold text-gray-950 dark:text-white">
                                                                    Author
                                                                </span>
        
                                                                <svg class="fi-ta-header-cell-sort-icon h-5 w-5 transition duration-75 text-gray-400 dark:text-gray-500 group-hover:text-gray-500 group-focus:text-gray-500 dark:group-hover:text-gray-400 dark:group-focus:text-gray-400"
                                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                    fill="currentColor" aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                                        clip-rule="evenodd"></path>
                                                                </svg>
                                                                <span class="sr-only">
                                                                    Ascending
                                                                </span>
                                                            </button>
                                                        </th>
                                                        <th
                                                            class="fi-ta-header-cell px-3 py-3.5 sm:first-of-type:ps-6 sm:last-of-type:pe-6 fi-table-header-cell-status">
                                                            <span
                                                                class="group flex w-full items-center gap-x-1 whitespace-nowrap ">
        
                                                                <span
                                                                    class="text-sm font-semibold text-gray-950 dark:text-white">
                                                                    Status
                                                                </span>
        
                                                            </span>
                                                        </th>
                                                        <th
                                                            class="fi-ta-header-cell px-3 py-3.5 sm:first-of-type:ps-6 sm:last-of-type:pe-6 fi-table-header-cell-category.name">
                                                            <button type="button" wire:click="sortTable('category.name')"
                                                                class="group flex w-full items-center gap-x-1 whitespace-nowrap ">
                                                                <span class="sr-only">
                                                                    Sort by
                                                                </span>
        
                                                                <span
                                                                    class="text-sm font-semibold text-gray-950 dark:text-white">
                                                                    Category
                                                                </span>
        
                                                                <svg class="fi-ta-header-cell-sort-icon h-5 w-5 transition duration-75 text-gray-400 dark:text-gray-500 group-hover:text-gray-500 group-focus:text-gray-500 dark:group-hover:text-gray-400 dark:group-focus:text-gray-400"
                                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                    fill="currentColor" aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                                        clip-rule="evenodd"></path>
                                                                </svg>
                                                                <span class="sr-only">
                                                                    Ascending
                                                                </span>
                                                            </button>
                                                        </th>
                                                        <th
                                                            class="fi-ta-header-cell px-3 py-3.5 sm:first-of-type:ps-6 sm:last-of-type:pe-6 fi-table-header-cell-published-at">
                                                            <span
                                                                class="group flex w-full items-center gap-x-1 whitespace-nowrap ">
        
                                                                <span
                                                                    class="text-sm font-semibold text-gray-950 dark:text-white">
                                                                    Published Date
                                                                </span>
        
                                                            </span>
                                                        </th>
                                                        <th
                                                            class="fi-ta-header-cell px-3 py-3.5 sm:first-of-type:ps-6 sm:last-of-type:pe-6 fi-table-header-cell-comments.customer.name">
                                                            <span
                                                                class="group flex w-full items-center gap-x-1 whitespace-nowrap ">
        
                                                                <span
                                                                    class="text-sm font-semibold text-gray-950 dark:text-white">
                                                                    Comment Authors
                                                                </span>
        
                                                            </span>
                                                        </th>
        
                                                        <th class="w-1"></th>
                                                    </tr>
                                                </thead>
        
                                                <tbody class="divide-y divide-gray-200 whitespace-nowrap dark:divide-white/5">
                                                    <tr x-bind:class="{
                                                        'hidden': false & amp; & amp;isGroupCollapsed(''),
                                                        'bg-gray-50 dark:bg-white/5': isRecordSelected('1'),
                                                        '[&amp;>*:first-child]:relative [&amp;>*:first-child]:before:absolute [&amp;>*:first-child]:before:start-0 [&amp;>*:first-child]:before:inset-y-0 [&amp;>*:first-child]:before:w-0.5 [&amp;>*:first-child]:before:bg-primary-600 [&amp;>*:first-child]:dark:before:bg-primary-500': isRecordSelected(
                                                            '1'),
                                                    }"
                                                        class="fi-ta-row transition duration-75 hover:bg-gray-50 dark:hover:bg-white/5"
                                                        wire:key="KNf45ZgeKjr9QYRAbUKb.table.records.1">
                                                        <td
                                                            class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 w-1">
                                                            <div class="px-3 py-4">
                                                                <label class="flex">
                                                                    <input type="checkbox"
                                                                        class="fi-checkbox-input rounded border-none bg-white shadow-sm ring-1 transition duration-75 checked:ring-0 focus:ring-2 focus:ring-offset-0 disabled:pointer-events-none disabled:bg-gray-50 disabled:text-gray-50 disabled:checked:bg-current disabled:checked:text-gray-400 dark:bg-white/5 dark:disabled:bg-transparent dark:disabled:checked:bg-gray-600 text-primary-600 ring-gray-950/10 focus:ring-primary-600 checked:focus:ring-primary-500/50 dark:ring-white/20 dark:checked:bg-primary-500 dark:focus:ring-primary-500 dark:checked:focus:ring-primary-400/50 dark:disabled:ring-white/10 fi-ta-record-checkbox"
                                                                        wire:loading.attr="disabled"
                                                                        wire:target="gotoPage,nextPage,previousPage,removeTableFilter,removeTableFilters,reorderTable,resetTableFiltersForm,sortTable,tableColumnSearches,tableFilters,tableRecordsPerPage,tableSearch"
                                                                        value="1" x-model="selectedRecords">
        
                                                                    <span class="sr-only">
                                                                        Select/deselect item 1 for bulk actions.
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>
        
        
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-image"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.1.column.image">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/1"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-image px-3 py-4">
                                                                        <div class="flex items-center gap-x-2.5">
                                                                            <div class="flex gap-x-1.5">
                                                                                <img src="https://demo.filamentphp.com/storage/aa129fb6-76e2-4946-9853-7ca0661cd5c9.jpg"
                                                                                    style="height: 2.5rem;"
                                                                                    class="max-w-none object-cover object-center ring-white dark:ring-gray-900">
        
                                                                            </div>
        
                                                                        </div>
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-title"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.1.column.title">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/1"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Qui explicabo quia reiciendis est
                                                                                        ducimus.
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-slug"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.1.column.slug">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/1"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        qui-explicabo-quia-reiciendis-est-ducimus
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-author.name"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.1.column.author.name">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/1"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Mrs. Lavinia Beier IV
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-status"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.1.column.status">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/1"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="flex flex-wrap items-center gap-1.5">
        
                                                                            <div class="flex max-w-max">
                                                                                <div style="--c-50:var(--success-50);--c-300:var(--success-300);--c-400:var(--success-400);--c-600:var(--success-600);"
                                                                                    class="fi-badge flex items-center justify-center gap-x-1 whitespace-nowrap rounded-md  text-xs font-medium ring-1 ring-inset px-2 min-w-[theme(spacing.6)] py-1 bg-custom-50 text-custom-600 ring-custom-600/10 dark:bg-custom-400/10 dark:text-custom-400 dark:ring-custom-400/30">
        
                                                                                    <span>
                                                                                        Published
                                                                                    </span>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-category.name"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.1.column.category.name">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/1"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        accusantium qui rem
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-published-at"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.1.column.published_at">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/1"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Mar 17, 2023
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-comments.customer.name"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.1.column.comments.customer.name">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/1"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <ul class="">
        
                                                                            <li class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Garrison Mertz
                                                                                    </div>
        
                                                                                </div>
                                                                            </li>
        
                                                                            <li class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Zachery Reilly
                                                                                    </div>
        
                                                                                </div>
                                                                            </li>
        
                                                                            <li
                                                                                class="text-sm text-gray-500 dark:text-gray-400">
                                                                                and 8 more
                                                                            </li>
                                                                        </ul>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td
                                                            class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3">
                                                            <div class="whitespace-nowrap px-3 py-4">
                                                                <div
                                                                    class="fi-ta-actions flex shrink-0 items-center gap-3 justify-end">
        
                                                                    <span class="inline-flex ">
                                                                        <a style=";"
                                                                            class="fi-link fi-link-size-sm relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus:underline disabled:pointer-events-none disabled:opacity-70 gap-1 text-sm text-gray-700 dark:text-gray-200 fi-ac-link-action"
                                                                            href="https://demo.filamentphp.com/blog/posts/1">
                                                                            <svg class="fi-link-icon h-4 w-4 text-gray-400 dark:text-gray-500"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                                aria-hidden="true">
                                                                                <path
                                                                                    d="M10 12.5a2.5 2.5 0 100-5 2.5 2.5 0 000 5z">
                                                                                </path>
                                                                                <path fill-rule="evenodd"
                                                                                    d="M.664 10.59a1.651 1.651 0 010-1.186A10.004 10.004 0 0110 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0110 17c-4.257 0-7.893-2.66-9.336-6.41zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                                                    clip-rule="evenodd"></path>
                                                                            </svg>
                                                                            View
        
        
                                                                        </a>
        
                                                                    </span>
        
                                                                    <span class="inline-flex ">
                                                                        <a style="--c-300:var(--primary-300);--c-400:var(--primary-400);--c-500:var(--primary-500);--c-600:var(--primary-600);"
                                                                            class="fi-link fi-link-size-sm relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus:underline disabled:pointer-events-none disabled:opacity-70 gap-1 text-sm text-custom-600 dark:text-custom-400 fi-ac-link-action"
                                                                            href="https://demo.filamentphp.com/blog/posts/1/edit">
                                                                            <svg style="--c-500:var(--primary-500);"
                                                                                class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                                aria-hidden="true">
                                                                                <path
                                                                                    d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z">
                                                                                </path>
                                                                                <path
                                                                                    d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z">
                                                                                </path>
                                                                            </svg>
                                                                            Edit
        
        
                                                                        </a>
        
                                                                    </span>
        
                                                                    <span class="inline-flex ">
                                                                        <button
                                                                            style="--c-300:var(--danger-300);--c-400:var(--danger-400);--c-500:var(--danger-500);--c-600:var(--danger-600);"
                                                                            class="fi-link fi-link-size-sm relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus:underline disabled:pointer-events-none disabled:opacity-70 gap-1 text-sm text-custom-600 dark:text-custom-400 fi-ac-link-action"
                                                                            type="button" wire:loading.attr="disabled"
                                                                            wire:click="mountTableAction('delete', '1')">
                                                                            <svg wire:loading.remove.delay="1"
                                                                                wire:target="mountTableAction('delete', '1')"
                                                                                class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                                aria-hidden="true" style="display: block;">
                                                                                <path fill-rule="evenodd"
                                                                                    d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z"
                                                                                    clip-rule="evenodd"></path>
                                                                            </svg>
                                                                            <svg fill="none" viewBox="0 0 24 24"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="animate-spin fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400"
                                                                                wire:loading.delay=""
                                                                                wire:target="mountTableAction('delete', '1')"
                                                                                style="display: none;">
                                                                                <path clip-rule="evenodd"
                                                                                    d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                                    fill-rule="evenodd" fill="currentColor"
                                                                                    opacity="0.2"></path>
                                                                                <path
                                                                                    d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z"
                                                                                    fill="currentColor"></path>
                                                                            </svg>
        
                                                                            Delete
        
        
                                                                        </button>
        
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
        
        
        
                                                    <tr x-bind:class="{
                                                        'hidden': false & amp; & amp;isGroupCollapsed(''),
                                                        'bg-gray-50 dark:bg-white/5': isRecordSelected('2'),
                                                        '[&amp;>*:first-child]:relative [&amp;>*:first-child]:before:absolute [&amp;>*:first-child]:before:start-0 [&amp;>*:first-child]:before:inset-y-0 [&amp;>*:first-child]:before:w-0.5 [&amp;>*:first-child]:before:bg-primary-600 [&amp;>*:first-child]:dark:before:bg-primary-500': isRecordSelected(
                                                            '2'),
                                                    }"
                                                        class="fi-ta-row transition duration-75 hover:bg-gray-50 dark:hover:bg-white/5"
                                                        wire:key="KNf45ZgeKjr9QYRAbUKb.table.records.2">
                                                        <td
                                                            class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 w-1">
                                                            <div class="px-3 py-4">
                                                                <label class="flex">
                                                                    <input type="checkbox"
                                                                        class="fi-checkbox-input rounded border-none bg-white shadow-sm ring-1 transition duration-75 checked:ring-0 focus:ring-2 focus:ring-offset-0 disabled:pointer-events-none disabled:bg-gray-50 disabled:text-gray-50 disabled:checked:bg-current disabled:checked:text-gray-400 dark:bg-white/5 dark:disabled:bg-transparent dark:disabled:checked:bg-gray-600 text-primary-600 ring-gray-950/10 focus:ring-primary-600 checked:focus:ring-primary-500/50 dark:ring-white/20 dark:checked:bg-primary-500 dark:focus:ring-primary-500 dark:checked:focus:ring-primary-400/50 dark:disabled:ring-white/10 fi-ta-record-checkbox"
                                                                        wire:loading.attr="disabled"
                                                                        wire:target="gotoPage,nextPage,previousPage,removeTableFilter,removeTableFilters,reorderTable,resetTableFiltersForm,sortTable,tableColumnSearches,tableFilters,tableRecordsPerPage,tableSearch"
                                                                        value="2" x-model="selectedRecords">
        
                                                                    <span class="sr-only">
                                                                        Select/deselect item 2 for bulk actions.
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>
        
        
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-image"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.2.column.image">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/2"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-image px-3 py-4">
                                                                        <div class="flex items-center gap-x-2.5">
                                                                            <div class="flex gap-x-1.5">
                                                                                <img src="https://demo.filamentphp.com/storage/a0bf6d58-412c-4c6a-86fc-2edd55b06907.jpg"
                                                                                    style="height: 2.5rem;"
                                                                                    class="max-w-none object-cover object-center ring-white dark:ring-gray-900">
        
                                                                            </div>
        
                                                                        </div>
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-title"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.2.column.title">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/2"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Sunt accusantium molestias.
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-slug"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.2.column.slug">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/2"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        sunt-accusantium-molestias
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-author.name"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.2.column.author.name">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/2"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Mrs. Lavinia Beier IV
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-status"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.2.column.status">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/2"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="flex flex-wrap items-center gap-1.5">
        
                                                                            <div class="flex max-w-max">
                                                                                <div style="--c-50:var(--primary-50);--c-300:var(--primary-300);--c-400:var(--primary-400);--c-600:var(--primary-600);"
                                                                                    class="fi-badge flex items-center justify-center gap-x-1 whitespace-nowrap rounded-md  text-xs font-medium ring-1 ring-inset px-2 min-w-[theme(spacing.6)] py-1 bg-custom-50 text-custom-600 ring-custom-600/10 dark:bg-custom-400/10 dark:text-custom-400 dark:ring-custom-400/30">
        
                                                                                    <span>
                                                                                        Draft
                                                                                    </span>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-category.name"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.2.column.category.name">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/2"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        nobis amet vitae
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-published-at"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.2.column.published_at">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/2"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Aug 17, 2023
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-comments.customer.name"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.2.column.comments.customer.name">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/2"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <ul class="">
        
                                                                            <li class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Prof. Robb Pouros DDS
                                                                                    </div>
        
                                                                                </div>
                                                                            </li>
        
                                                                            <li class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Palma Hessel PhD
                                                                                    </div>
        
                                                                                </div>
                                                                            </li>
        
                                                                            <li
                                                                                class="text-sm text-gray-500 dark:text-gray-400">
                                                                                and 8 more
                                                                            </li>
                                                                        </ul>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td
                                                            class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3">
                                                            <div class="whitespace-nowrap px-3 py-4">
                                                                <div
                                                                    class="fi-ta-actions flex shrink-0 items-center gap-3 justify-end">
        
                                                                    <span class="inline-flex ">
                                                                        <a style=";"
                                                                            class="fi-link fi-link-size-sm relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus:underline disabled:pointer-events-none disabled:opacity-70 gap-1 text-sm text-gray-700 dark:text-gray-200 fi-ac-link-action"
                                                                            href="https://demo.filamentphp.com/blog/posts/2">
                                                                            <svg class="fi-link-icon h-4 w-4 text-gray-400 dark:text-gray-500"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                                aria-hidden="true">
                                                                                <path
                                                                                    d="M10 12.5a2.5 2.5 0 100-5 2.5 2.5 0 000 5z">
                                                                                </path>
                                                                                <path fill-rule="evenodd"
                                                                                    d="M.664 10.59a1.651 1.651 0 010-1.186A10.004 10.004 0 0110 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0110 17c-4.257 0-7.893-2.66-9.336-6.41zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                                                    clip-rule="evenodd"></path>
                                                                            </svg>
                                                                            View
        
        
                                                                        </a>
        
                                                                    </span>
        
                                                                    <span class="inline-flex ">
                                                                        <a style="--c-300:var(--primary-300);--c-400:var(--primary-400);--c-500:var(--primary-500);--c-600:var(--primary-600);"
                                                                            class="fi-link fi-link-size-sm relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus:underline disabled:pointer-events-none disabled:opacity-70 gap-1 text-sm text-custom-600 dark:text-custom-400 fi-ac-link-action"
                                                                            href="https://demo.filamentphp.com/blog/posts/2/edit">
                                                                            <svg style="--c-500:var(--primary-500);"
                                                                                class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                                aria-hidden="true">
                                                                                <path
                                                                                    d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z">
                                                                                </path>
                                                                                <path
                                                                                    d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z">
                                                                                </path>
                                                                            </svg>
                                                                            Edit
        
        
                                                                        </a>
        
                                                                    </span>
        
                                                                    <span class="inline-flex ">
                                                                        <button
                                                                            style="--c-300:var(--danger-300);--c-400:var(--danger-400);--c-500:var(--danger-500);--c-600:var(--danger-600);"
                                                                            class="fi-link fi-link-size-sm relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus:underline disabled:pointer-events-none disabled:opacity-70 gap-1 text-sm text-custom-600 dark:text-custom-400 fi-ac-link-action"
                                                                            type="button" wire:loading.attr="disabled"
                                                                            wire:click="mountTableAction('delete', '2')">
                                                                            <svg wire:loading.remove.delay="1"
                                                                                wire:target="mountTableAction('delete', '2')"
                                                                                class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                                aria-hidden="true" style="display: block;">
                                                                                <path fill-rule="evenodd"
                                                                                    d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z"
                                                                                    clip-rule="evenodd"></path>
                                                                            </svg>
                                                                            <svg fill="none" viewBox="0 0 24 24"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="animate-spin fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400"
                                                                                wire:loading.delay=""
                                                                                wire:target="mountTableAction('delete', '2')"
                                                                                style="display: none;">
                                                                                <path clip-rule="evenodd"
                                                                                    d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                                    fill-rule="evenodd" fill="currentColor"
                                                                                    opacity="0.2"></path>
                                                                                <path
                                                                                    d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z"
                                                                                    fill="currentColor"></path>
                                                                            </svg>
        
                                                                            Delete
        
        
                                                                        </button>
        
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
        
        
        
                                                    <tr x-bind:class="{
                                                        'hidden': false & amp; & amp;isGroupCollapsed(''),
                                                        'bg-gray-50 dark:bg-white/5': isRecordSelected('3'),
                                                        '[&amp;>*:first-child]:relative [&amp;>*:first-child]:before:absolute [&amp;>*:first-child]:before:start-0 [&amp;>*:first-child]:before:inset-y-0 [&amp;>*:first-child]:before:w-0.5 [&amp;>*:first-child]:before:bg-primary-600 [&amp;>*:first-child]:dark:before:bg-primary-500': isRecordSelected(
                                                            '3'),
                                                    }"
                                                        class="fi-ta-row transition duration-75 hover:bg-gray-50 dark:hover:bg-white/5"
                                                        wire:key="KNf45ZgeKjr9QYRAbUKb.table.records.3">
                                                        <td
                                                            class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 w-1">
                                                            <div class="px-3 py-4">
                                                                <label class="flex">
                                                                    <input type="checkbox"
                                                                        class="fi-checkbox-input rounded border-none bg-white shadow-sm ring-1 transition duration-75 checked:ring-0 focus:ring-2 focus:ring-offset-0 disabled:pointer-events-none disabled:bg-gray-50 disabled:text-gray-50 disabled:checked:bg-current disabled:checked:text-gray-400 dark:bg-white/5 dark:disabled:bg-transparent dark:disabled:checked:bg-gray-600 text-primary-600 ring-gray-950/10 focus:ring-primary-600 checked:focus:ring-primary-500/50 dark:ring-white/20 dark:checked:bg-primary-500 dark:focus:ring-primary-500 dark:checked:focus:ring-primary-400/50 dark:disabled:ring-white/10 fi-ta-record-checkbox"
                                                                        wire:loading.attr="disabled"
                                                                        wire:target="gotoPage,nextPage,previousPage,removeTableFilter,removeTableFilters,reorderTable,resetTableFiltersForm,sortTable,tableColumnSearches,tableFilters,tableRecordsPerPage,tableSearch"
                                                                        value="3" x-model="selectedRecords">
        
                                                                    <span class="sr-only">
                                                                        Select/deselect item 3 for bulk actions.
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>
        
        
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-image"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.3.column.image">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/3"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-image px-3 py-4">
                                                                        <div class="flex items-center gap-x-2.5">
                                                                            <div class="flex gap-x-1.5">
                                                                                <img src="https://demo.filamentphp.com/storage/c08fc64a-fc0a-4874-bb66-a1a892690094.jpg"
                                                                                    style="height: 2.5rem;"
                                                                                    class="max-w-none object-cover object-center ring-white dark:ring-gray-900">
        
                                                                            </div>
        
                                                                        </div>
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-title"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.3.column.title">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/3"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Animi provident totam est suscipit.
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-slug"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.3.column.slug">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/3"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        animi-provident-totam-est-suscipit
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-author.name"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.3.column.author.name">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/3"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Mrs. Lavinia Beier IV
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-status"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.3.column.status">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/3"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="flex flex-wrap items-center gap-1.5">
        
                                                                            <div class="flex max-w-max">
                                                                                <div style="--c-50:var(--success-50);--c-300:var(--success-300);--c-400:var(--success-400);--c-600:var(--success-600);"
                                                                                    class="fi-badge flex items-center justify-center gap-x-1 whitespace-nowrap rounded-md  text-xs font-medium ring-1 ring-inset px-2 min-w-[theme(spacing.6)] py-1 bg-custom-50 text-custom-600 ring-custom-600/10 dark:bg-custom-400/10 dark:text-custom-400 dark:ring-custom-400/30">
        
                                                                                    <span>
                                                                                        Published
                                                                                    </span>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-category.name"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.3.column.category.name">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/3"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        unde provident quae
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-published-at"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.3.column.published_at">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/3"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Jul 2, 2023
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-comments.customer.name"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.3.column.comments.customer.name">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/3"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <ul class="">
        
                                                                            <li class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Prof. Junius Gorczany
                                                                                    </div>
        
                                                                                </div>
                                                                            </li>
        
                                                                            <li class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Kadin Purdy
                                                                                    </div>
        
                                                                                </div>
                                                                            </li>
        
                                                                            <li
                                                                                class="text-sm text-gray-500 dark:text-gray-400">
                                                                                and 8 more
                                                                            </li>
                                                                        </ul>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td
                                                            class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3">
                                                            <div class="whitespace-nowrap px-3 py-4">
                                                                <div
                                                                    class="fi-ta-actions flex shrink-0 items-center gap-3 justify-end">
        
                                                                    <span class="inline-flex ">
                                                                        <a style=";"
                                                                            class="fi-link fi-link-size-sm relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus:underline disabled:pointer-events-none disabled:opacity-70 gap-1 text-sm text-gray-700 dark:text-gray-200 fi-ac-link-action"
                                                                            href="https://demo.filamentphp.com/blog/posts/3">
                                                                            <svg class="fi-link-icon h-4 w-4 text-gray-400 dark:text-gray-500"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                                aria-hidden="true">
                                                                                <path
                                                                                    d="M10 12.5a2.5 2.5 0 100-5 2.5 2.5 0 000 5z">
                                                                                </path>
                                                                                <path fill-rule="evenodd"
                                                                                    d="M.664 10.59a1.651 1.651 0 010-1.186A10.004 10.004 0 0110 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0110 17c-4.257 0-7.893-2.66-9.336-6.41zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                                                    clip-rule="evenodd"></path>
                                                                            </svg>
                                                                            View
        
        
                                                                        </a>
        
                                                                    </span>
        
                                                                    <span class="inline-flex ">
                                                                        <a style="--c-300:var(--primary-300);--c-400:var(--primary-400);--c-500:var(--primary-500);--c-600:var(--primary-600);"
                                                                            class="fi-link fi-link-size-sm relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus:underline disabled:pointer-events-none disabled:opacity-70 gap-1 text-sm text-custom-600 dark:text-custom-400 fi-ac-link-action"
                                                                            href="https://demo.filamentphp.com/blog/posts/3/edit">
                                                                            <svg style="--c-500:var(--primary-500);"
                                                                                class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                                aria-hidden="true">
                                                                                <path
                                                                                    d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z">
                                                                                </path>
                                                                                <path
                                                                                    d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z">
                                                                                </path>
                                                                            </svg>
                                                                            Edit
        
        
                                                                        </a>
        
                                                                    </span>
        
                                                                    <span class="inline-flex ">
                                                                        <button
                                                                            style="--c-300:var(--danger-300);--c-400:var(--danger-400);--c-500:var(--danger-500);--c-600:var(--danger-600);"
                                                                            class="fi-link fi-link-size-sm relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus:underline disabled:pointer-events-none disabled:opacity-70 gap-1 text-sm text-custom-600 dark:text-custom-400 fi-ac-link-action"
                                                                            type="button" wire:loading.attr="disabled"
                                                                            wire:click="mountTableAction('delete', '3')">
                                                                            <svg wire:loading.remove.delay="1"
                                                                                wire:target="mountTableAction('delete', '3')"
                                                                                class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                                aria-hidden="true" style="display: block;">
                                                                                <path fill-rule="evenodd"
                                                                                    d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z"
                                                                                    clip-rule="evenodd"></path>
                                                                            </svg>
                                                                            <svg fill="none" viewBox="0 0 24 24"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="animate-spin fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400"
                                                                                wire:loading.delay=""
                                                                                wire:target="mountTableAction('delete', '3')"
                                                                                style="display: none;">
                                                                                <path clip-rule="evenodd"
                                                                                    d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                                    fill-rule="evenodd" fill="currentColor"
                                                                                    opacity="0.2"></path>
                                                                                <path
                                                                                    d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z"
                                                                                    fill="currentColor"></path>
                                                                            </svg>
        
                                                                            Delete
        
        
                                                                        </button>
        
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
        
        
        
                                                    <tr x-bind:class="{
                                                        'hidden': false & amp; & amp;isGroupCollapsed(''),
                                                        'bg-gray-50 dark:bg-white/5': isRecordSelected('4'),
                                                        '[&amp;>*:first-child]:relative [&amp;>*:first-child]:before:absolute [&amp;>*:first-child]:before:start-0 [&amp;>*:first-child]:before:inset-y-0 [&amp;>*:first-child]:before:w-0.5 [&amp;>*:first-child]:before:bg-primary-600 [&amp;>*:first-child]:dark:before:bg-primary-500': isRecordSelected(
                                                            '4'),
                                                    }"
                                                        class="fi-ta-row transition duration-75 hover:bg-gray-50 dark:hover:bg-white/5"
                                                        wire:key="KNf45ZgeKjr9QYRAbUKb.table.records.4">
                                                        <td
                                                            class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 w-1">
                                                            <div class="px-3 py-4">
                                                                <label class="flex">
                                                                    <input type="checkbox"
                                                                        class="fi-checkbox-input rounded border-none bg-white shadow-sm ring-1 transition duration-75 checked:ring-0 focus:ring-2 focus:ring-offset-0 disabled:pointer-events-none disabled:bg-gray-50 disabled:text-gray-50 disabled:checked:bg-current disabled:checked:text-gray-400 dark:bg-white/5 dark:disabled:bg-transparent dark:disabled:checked:bg-gray-600 text-primary-600 ring-gray-950/10 focus:ring-primary-600 checked:focus:ring-primary-500/50 dark:ring-white/20 dark:checked:bg-primary-500 dark:focus:ring-primary-500 dark:checked:focus:ring-primary-400/50 dark:disabled:ring-white/10 fi-ta-record-checkbox"
                                                                        wire:loading.attr="disabled"
                                                                        wire:target="gotoPage,nextPage,previousPage,removeTableFilter,removeTableFilters,reorderTable,resetTableFiltersForm,sortTable,tableColumnSearches,tableFilters,tableRecordsPerPage,tableSearch"
                                                                        value="4" x-model="selectedRecords">
        
                                                                    <span class="sr-only">
                                                                        Select/deselect item 4 for bulk actions.
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>
        
        
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-image"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.4.column.image">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/4"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-image px-3 py-4">
                                                                        <div class="flex items-center gap-x-2.5">
                                                                            <div class="flex gap-x-1.5">
                                                                                <img src="https://demo.filamentphp.com/storage/7ec8df9e-38ee-4881-8daa-21c155b929a7.jpg"
                                                                                    style="height: 2.5rem;"
                                                                                    class="max-w-none object-cover object-center ring-white dark:ring-gray-900">
        
                                                                            </div>
        
                                                                        </div>
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-title"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.4.column.title">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/4"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Soluta libero culpa.
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-slug"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.4.column.slug">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/4"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        soluta-libero-culpa
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-author.name"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.4.column.author.name">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/4"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Mrs. Lavinia Beier IV
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-status"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.4.column.status">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/4"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="flex flex-wrap items-center gap-1.5">
        
                                                                            <div class="flex max-w-max">
                                                                                <div style="--c-50:var(--success-50);--c-300:var(--success-300);--c-400:var(--success-400);--c-600:var(--success-600);"
                                                                                    class="fi-badge flex items-center justify-center gap-x-1 whitespace-nowrap rounded-md  text-xs font-medium ring-1 ring-inset px-2 min-w-[theme(spacing.6)] py-1 bg-custom-50 text-custom-600 ring-custom-600/10 dark:bg-custom-400/10 dark:text-custom-400 dark:ring-custom-400/30">
        
                                                                                    <span>
                                                                                        Published
                                                                                    </span>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-category.name"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.4.column.category.name">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/4"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        aut incidunt ex
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-published-at"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.4.column.published_at">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/4"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Aug 4, 2023
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-comments.customer.name"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.4.column.comments.customer.name">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/4"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <ul class="">
        
                                                                            <li class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Miss Iliana Veum
                                                                                    </div>
        
                                                                                </div>
                                                                            </li>
        
                                                                            <li class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Deondre Keebler
                                                                                    </div>
        
                                                                                </div>
                                                                            </li>
        
                                                                            <li
                                                                                class="text-sm text-gray-500 dark:text-gray-400">
                                                                                and 8 more
                                                                            </li>
                                                                        </ul>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td
                                                            class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3">
                                                            <div class="whitespace-nowrap px-3 py-4">
                                                                <div
                                                                    class="fi-ta-actions flex shrink-0 items-center gap-3 justify-end">
        
                                                                    <span class="inline-flex ">
                                                                        <a style=";"
                                                                            class="fi-link fi-link-size-sm relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus:underline disabled:pointer-events-none disabled:opacity-70 gap-1 text-sm text-gray-700 dark:text-gray-200 fi-ac-link-action"
                                                                            href="https://demo.filamentphp.com/blog/posts/4">
                                                                            <svg class="fi-link-icon h-4 w-4 text-gray-400 dark:text-gray-500"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                                aria-hidden="true">
                                                                                <path
                                                                                    d="M10 12.5a2.5 2.5 0 100-5 2.5 2.5 0 000 5z">
                                                                                </path>
                                                                                <path fill-rule="evenodd"
                                                                                    d="M.664 10.59a1.651 1.651 0 010-1.186A10.004 10.004 0 0110 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0110 17c-4.257 0-7.893-2.66-9.336-6.41zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                                                    clip-rule="evenodd"></path>
                                                                            </svg>
                                                                            View
        
        
                                                                        </a>
        
                                                                    </span>
        
                                                                    <span class="inline-flex ">
                                                                        <a style="--c-300:var(--primary-300);--c-400:var(--primary-400);--c-500:var(--primary-500);--c-600:var(--primary-600);"
                                                                            class="fi-link fi-link-size-sm relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus:underline disabled:pointer-events-none disabled:opacity-70 gap-1 text-sm text-custom-600 dark:text-custom-400 fi-ac-link-action"
                                                                            href="https://demo.filamentphp.com/blog/posts/4/edit">
                                                                            <svg style="--c-500:var(--primary-500);"
                                                                                class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                                aria-hidden="true">
                                                                                <path
                                                                                    d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z">
                                                                                </path>
                                                                                <path
                                                                                    d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z">
                                                                                </path>
                                                                            </svg>
                                                                            Edit
        
        
                                                                        </a>
        
                                                                    </span>
        
                                                                    <span class="inline-flex ">
                                                                        <button
                                                                            style="--c-300:var(--danger-300);--c-400:var(--danger-400);--c-500:var(--danger-500);--c-600:var(--danger-600);"
                                                                            class="fi-link fi-link-size-sm relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus:underline disabled:pointer-events-none disabled:opacity-70 gap-1 text-sm text-custom-600 dark:text-custom-400 fi-ac-link-action"
                                                                            type="button" wire:loading.attr="disabled"
                                                                            wire:click="mountTableAction('delete', '4')">
                                                                            <svg wire:loading.remove.delay="1"
                                                                                wire:target="mountTableAction('delete', '4')"
                                                                                class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                                aria-hidden="true" style="display: block;">
                                                                                <path fill-rule="evenodd"
                                                                                    d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z"
                                                                                    clip-rule="evenodd"></path>
                                                                            </svg>
                                                                            <svg fill="none" viewBox="0 0 24 24"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="animate-spin fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400"
                                                                                wire:loading.delay=""
                                                                                wire:target="mountTableAction('delete', '4')"
                                                                                style="display: none;">
                                                                                <path clip-rule="evenodd"
                                                                                    d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                                    fill-rule="evenodd" fill="currentColor"
                                                                                    opacity="0.2"></path>
                                                                                <path
                                                                                    d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z"
                                                                                    fill="currentColor"></path>
                                                                            </svg>
        
                                                                            Delete
        
        
                                                                        </button>
        
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
        
        
        
                                                    <tr x-bind:class="{
                                                        'hidden': false & amp; & amp;isGroupCollapsed(''),
                                                        'bg-gray-50 dark:bg-white/5': isRecordSelected('5'),
                                                        '[&amp;>*:first-child]:relative [&amp;>*:first-child]:before:absolute [&amp;>*:first-child]:before:start-0 [&amp;>*:first-child]:before:inset-y-0 [&amp;>*:first-child]:before:w-0.5 [&amp;>*:first-child]:before:bg-primary-600 [&amp;>*:first-child]:dark:before:bg-primary-500': isRecordSelected(
                                                            '5'),
                                                    }"
                                                        class="fi-ta-row transition duration-75 hover:bg-gray-50 dark:hover:bg-white/5"
                                                        wire:key="KNf45ZgeKjr9QYRAbUKb.table.records.5">
                                                        <td
                                                            class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 w-1">
                                                            <div class="px-3 py-4">
                                                                <label class="flex">
                                                                    <input type="checkbox"
                                                                        class="fi-checkbox-input rounded border-none bg-white shadow-sm ring-1 transition duration-75 checked:ring-0 focus:ring-2 focus:ring-offset-0 disabled:pointer-events-none disabled:bg-gray-50 disabled:text-gray-50 disabled:checked:bg-current disabled:checked:text-gray-400 dark:bg-white/5 dark:disabled:bg-transparent dark:disabled:checked:bg-gray-600 text-primary-600 ring-gray-950/10 focus:ring-primary-600 checked:focus:ring-primary-500/50 dark:ring-white/20 dark:checked:bg-primary-500 dark:focus:ring-primary-500 dark:checked:focus:ring-primary-400/50 dark:disabled:ring-white/10 fi-ta-record-checkbox"
                                                                        wire:loading.attr="disabled"
                                                                        wire:target="gotoPage,nextPage,previousPage,removeTableFilter,removeTableFilters,reorderTable,resetTableFiltersForm,sortTable,tableColumnSearches,tableFilters,tableRecordsPerPage,tableSearch"
                                                                        value="5" x-model="selectedRecords">
        
                                                                    <span class="sr-only">
                                                                        Select/deselect item 5 for bulk actions.
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>
        
        
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-image"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.5.column.image">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/5"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-image px-3 py-4">
                                                                        <div class="flex items-center gap-x-2.5">
                                                                            <div class="flex gap-x-1.5">
                                                                                <img src="https://demo.filamentphp.com/storage/670565f6-5d16-49bb-8842-6713ff3afe4e.jpg"
                                                                                    style="height: 2.5rem;"
                                                                                    class="max-w-none object-cover object-center ring-white dark:ring-gray-900">
        
                                                                            </div>
        
                                                                        </div>
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-title"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.5.column.title">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/5"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        In hic fugiat sapiente cum porro.
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-slug"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.5.column.slug">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/5"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        in-hic-fugiat-sapiente-cum-porro
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-author.name"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.5.column.author.name">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/5"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Mrs. Lavinia Beier IV
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-status"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.5.column.status">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/5"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="flex flex-wrap items-center gap-1.5">
        
                                                                            <div class="flex max-w-max">
                                                                                <div style="--c-50:var(--success-50);--c-300:var(--success-300);--c-400:var(--success-400);--c-600:var(--success-600);"
                                                                                    class="fi-badge flex items-center justify-center gap-x-1 whitespace-nowrap rounded-md  text-xs font-medium ring-1 ring-inset px-2 min-w-[theme(spacing.6)] py-1 bg-custom-50 text-custom-600 ring-custom-600/10 dark:bg-custom-400/10 dark:text-custom-400 dark:ring-custom-400/30">
        
                                                                                    <span>
                                                                                        Published
                                                                                    </span>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-category.name"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.5.column.category.name">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/5"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        voluptatem harum eligendi
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-published-at"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.5.column.published_at">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/5"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Jun 3, 2023
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-comments.customer.name"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.5.column.comments.customer.name">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/5"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <ul class="">
        
                                                                            <li class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Prof. Sven Jacobs I
                                                                                    </div>
        
                                                                                </div>
                                                                            </li>
        
                                                                            <li class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Prof. Reina Hackett
                                                                                    </div>
        
                                                                                </div>
                                                                            </li>
        
                                                                            <li
                                                                                class="text-sm text-gray-500 dark:text-gray-400">
                                                                                and 8 more
                                                                            </li>
                                                                        </ul>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td
                                                            class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3">
                                                            <div class="whitespace-nowrap px-3 py-4">
                                                                <div
                                                                    class="fi-ta-actions flex shrink-0 items-center gap-3 justify-end">
        
                                                                    <span class="inline-flex ">
                                                                        <a style=";"
                                                                            class="fi-link fi-link-size-sm relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus:underline disabled:pointer-events-none disabled:opacity-70 gap-1 text-sm text-gray-700 dark:text-gray-200 fi-ac-link-action"
                                                                            href="https://demo.filamentphp.com/blog/posts/5">
                                                                            <svg class="fi-link-icon h-4 w-4 text-gray-400 dark:text-gray-500"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                                aria-hidden="true">
                                                                                <path
                                                                                    d="M10 12.5a2.5 2.5 0 100-5 2.5 2.5 0 000 5z">
                                                                                </path>
                                                                                <path fill-rule="evenodd"
                                                                                    d="M.664 10.59a1.651 1.651 0 010-1.186A10.004 10.004 0 0110 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0110 17c-4.257 0-7.893-2.66-9.336-6.41zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                                                    clip-rule="evenodd"></path>
                                                                            </svg>
                                                                            View
        
        
                                                                        </a>
        
                                                                    </span>
        
                                                                    <span class="inline-flex ">
                                                                        <a style="--c-300:var(--primary-300);--c-400:var(--primary-400);--c-500:var(--primary-500);--c-600:var(--primary-600);"
                                                                            class="fi-link fi-link-size-sm relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus:underline disabled:pointer-events-none disabled:opacity-70 gap-1 text-sm text-custom-600 dark:text-custom-400 fi-ac-link-action"
                                                                            href="https://demo.filamentphp.com/blog/posts/5/edit">
                                                                            <svg style="--c-500:var(--primary-500);"
                                                                                class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                                aria-hidden="true">
                                                                                <path
                                                                                    d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z">
                                                                                </path>
                                                                                <path
                                                                                    d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z">
                                                                                </path>
                                                                            </svg>
                                                                            Edit
        
        
                                                                        </a>
        
                                                                    </span>
        
                                                                    <span class="inline-flex ">
                                                                        <button
                                                                            style="--c-300:var(--danger-300);--c-400:var(--danger-400);--c-500:var(--danger-500);--c-600:var(--danger-600);"
                                                                            class="fi-link fi-link-size-sm relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus:underline disabled:pointer-events-none disabled:opacity-70 gap-1 text-sm text-custom-600 dark:text-custom-400 fi-ac-link-action"
                                                                            type="button" wire:loading.attr="disabled"
                                                                            wire:click="mountTableAction('delete', '5')">
                                                                            <svg wire:loading.remove.delay="1"
                                                                                wire:target="mountTableAction('delete', '5')"
                                                                                class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                                aria-hidden="true" style="display: block;">
                                                                                <path fill-rule="evenodd"
                                                                                    d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z"
                                                                                    clip-rule="evenodd"></path>
                                                                            </svg>
                                                                            <svg fill="none" viewBox="0 0 24 24"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="animate-spin fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400"
                                                                                wire:loading.delay=""
                                                                                wire:target="mountTableAction('delete', '5')"
                                                                                style="display: none;">
                                                                                <path clip-rule="evenodd"
                                                                                    d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                                    fill-rule="evenodd" fill="currentColor"
                                                                                    opacity="0.2"></path>
                                                                                <path
                                                                                    d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z"
                                                                                    fill="currentColor"></path>
                                                                            </svg>
        
                                                                            Delete
        
        
                                                                        </button>
        
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
        
        
        
                                                    <tr x-bind:class="{
                                                        'hidden': false & amp; & amp;isGroupCollapsed(''),
                                                        'bg-gray-50 dark:bg-white/5': isRecordSelected('6'),
                                                        '[&amp;>*:first-child]:relative [&amp;>*:first-child]:before:absolute [&amp;>*:first-child]:before:start-0 [&amp;>*:first-child]:before:inset-y-0 [&amp;>*:first-child]:before:w-0.5 [&amp;>*:first-child]:before:bg-primary-600 [&amp;>*:first-child]:dark:before:bg-primary-500': isRecordSelected(
                                                            '6'),
                                                    }"
                                                        class="fi-ta-row transition duration-75 hover:bg-gray-50 dark:hover:bg-white/5"
                                                        wire:key="KNf45ZgeKjr9QYRAbUKb.table.records.6">
                                                        <td
                                                            class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 w-1">
                                                            <div class="px-3 py-4">
                                                                <label class="flex">
                                                                    <input type="checkbox"
                                                                        class="fi-checkbox-input rounded border-none bg-white shadow-sm ring-1 transition duration-75 checked:ring-0 focus:ring-2 focus:ring-offset-0 disabled:pointer-events-none disabled:bg-gray-50 disabled:text-gray-50 disabled:checked:bg-current disabled:checked:text-gray-400 dark:bg-white/5 dark:disabled:bg-transparent dark:disabled:checked:bg-gray-600 text-primary-600 ring-gray-950/10 focus:ring-primary-600 checked:focus:ring-primary-500/50 dark:ring-white/20 dark:checked:bg-primary-500 dark:focus:ring-primary-500 dark:checked:focus:ring-primary-400/50 dark:disabled:ring-white/10 fi-ta-record-checkbox"
                                                                        wire:loading.attr="disabled"
                                                                        wire:target="gotoPage,nextPage,previousPage,removeTableFilter,removeTableFilters,reorderTable,resetTableFiltersForm,sortTable,tableColumnSearches,tableFilters,tableRecordsPerPage,tableSearch"
                                                                        value="6" x-model="selectedRecords">
        
                                                                    <span class="sr-only">
                                                                        Select/deselect item 6 for bulk actions.
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>
        
        
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-image"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.6.column.image">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/6"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-image px-3 py-4">
                                                                        <div class="flex items-center gap-x-2.5">
                                                                            <div class="flex gap-x-1.5">
                                                                                <img src="https://demo.filamentphp.com/storage/84246de3-c49c-4d0b-95b8-d69738b6c9c4.jpg"
                                                                                    style="height: 2.5rem;"
                                                                                    class="max-w-none object-cover object-center ring-white dark:ring-gray-900">
        
                                                                            </div>
        
                                                                        </div>
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-title"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.6.column.title">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/6"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Et corporis et excepturi temporibus.
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-slug"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.6.column.slug">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/6"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        et-corporis-et-excepturi-temporibus
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-author.name"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.6.column.author.name">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/6"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Amy O'Connell
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-status"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.6.column.status">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/6"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="flex flex-wrap items-center gap-1.5">
        
                                                                            <div class="flex max-w-max">
                                                                                <div style="--c-50:var(--success-50);--c-300:var(--success-300);--c-400:var(--success-400);--c-600:var(--success-600);"
                                                                                    class="fi-badge flex items-center justify-center gap-x-1 whitespace-nowrap rounded-md  text-xs font-medium ring-1 ring-inset px-2 min-w-[theme(spacing.6)] py-1 bg-custom-50 text-custom-600 ring-custom-600/10 dark:bg-custom-400/10 dark:text-custom-400 dark:ring-custom-400/30">
        
                                                                                    <span>
                                                                                        Published
                                                                                    </span>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-category.name"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.6.column.category.name">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/6"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        ratione temporibus consectetur
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-published-at"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.6.column.published_at">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/6"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Jul 11, 2023
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-comments.customer.name"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.6.column.comments.customer.name">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/6"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <ul class="">
        
                                                                            <li class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Jarvis Bruen
                                                                                    </div>
        
                                                                                </div>
                                                                            </li>
        
                                                                            <li class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Vincenza Gislason
                                                                                    </div>
        
                                                                                </div>
                                                                            </li>
        
                                                                            <li
                                                                                class="text-sm text-gray-500 dark:text-gray-400">
                                                                                and 5 more
                                                                            </li>
                                                                        </ul>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td
                                                            class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3">
                                                            <div class="whitespace-nowrap px-3 py-4">
                                                                <div
                                                                    class="fi-ta-actions flex shrink-0 items-center gap-3 justify-end">
        
                                                                    <span class="inline-flex ">
                                                                        <a style=";"
                                                                            class="fi-link fi-link-size-sm relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus:underline disabled:pointer-events-none disabled:opacity-70 gap-1 text-sm text-gray-700 dark:text-gray-200 fi-ac-link-action"
                                                                            href="https://demo.filamentphp.com/blog/posts/6">
                                                                            <svg class="fi-link-icon h-4 w-4 text-gray-400 dark:text-gray-500"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                                aria-hidden="true">
                                                                                <path
                                                                                    d="M10 12.5a2.5 2.5 0 100-5 2.5 2.5 0 000 5z">
                                                                                </path>
                                                                                <path fill-rule="evenodd"
                                                                                    d="M.664 10.59a1.651 1.651 0 010-1.186A10.004 10.004 0 0110 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0110 17c-4.257 0-7.893-2.66-9.336-6.41zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                                                    clip-rule="evenodd"></path>
                                                                            </svg>
                                                                            View
        
        
                                                                        </a>
        
                                                                    </span>
        
                                                                    <span class="inline-flex ">
                                                                        <a style="--c-300:var(--primary-300);--c-400:var(--primary-400);--c-500:var(--primary-500);--c-600:var(--primary-600);"
                                                                            class="fi-link fi-link-size-sm relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus:underline disabled:pointer-events-none disabled:opacity-70 gap-1 text-sm text-custom-600 dark:text-custom-400 fi-ac-link-action"
                                                                            href="https://demo.filamentphp.com/blog/posts/6/edit">
                                                                            <svg style="--c-500:var(--primary-500);"
                                                                                class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                                aria-hidden="true">
                                                                                <path
                                                                                    d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z">
                                                                                </path>
                                                                                <path
                                                                                    d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z">
                                                                                </path>
                                                                            </svg>
                                                                            Edit
        
        
                                                                        </a>
        
                                                                    </span>
        
                                                                    <span class="inline-flex ">
                                                                        <button
                                                                            style="--c-300:var(--danger-300);--c-400:var(--danger-400);--c-500:var(--danger-500);--c-600:var(--danger-600);"
                                                                            class="fi-link fi-link-size-sm relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus:underline disabled:pointer-events-none disabled:opacity-70 gap-1 text-sm text-custom-600 dark:text-custom-400 fi-ac-link-action"
                                                                            type="button" wire:loading.attr="disabled"
                                                                            wire:click="mountTableAction('delete', '6')">
                                                                            <svg wire:loading.remove.delay="1"
                                                                                wire:target="mountTableAction('delete', '6')"
                                                                                class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                                aria-hidden="true" style="display: block;">
                                                                                <path fill-rule="evenodd"
                                                                                    d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z"
                                                                                    clip-rule="evenodd"></path>
                                                                            </svg>
                                                                            <svg fill="none" viewBox="0 0 24 24"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="animate-spin fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400"
                                                                                wire:loading.delay=""
                                                                                wire:target="mountTableAction('delete', '6')"
                                                                                style="display: none;">
                                                                                <path clip-rule="evenodd"
                                                                                    d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                                    fill-rule="evenodd" fill="currentColor"
                                                                                    opacity="0.2"></path>
                                                                                <path
                                                                                    d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z"
                                                                                    fill="currentColor"></path>
                                                                            </svg>
        
                                                                            Delete
        
        
                                                                        </button>
        
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
        
        
        
                                                    <tr x-bind:class="{
                                                        'hidden': false & amp; & amp;isGroupCollapsed(''),
                                                        'bg-gray-50 dark:bg-white/5': isRecordSelected('7'),
                                                        '[&amp;>*:first-child]:relative [&amp;>*:first-child]:before:absolute [&amp;>*:first-child]:before:start-0 [&amp;>*:first-child]:before:inset-y-0 [&amp;>*:first-child]:before:w-0.5 [&amp;>*:first-child]:before:bg-primary-600 [&amp;>*:first-child]:dark:before:bg-primary-500': isRecordSelected(
                                                            '7'),
                                                    }"
                                                        class="fi-ta-row transition duration-75 hover:bg-gray-50 dark:hover:bg-white/5"
                                                        wire:key="KNf45ZgeKjr9QYRAbUKb.table.records.7">
                                                        <td
                                                            class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 w-1">
                                                            <div class="px-3 py-4">
                                                                <label class="flex">
                                                                    <input type="checkbox"
                                                                        class="fi-checkbox-input rounded border-none bg-white shadow-sm ring-1 transition duration-75 checked:ring-0 focus:ring-2 focus:ring-offset-0 disabled:pointer-events-none disabled:bg-gray-50 disabled:text-gray-50 disabled:checked:bg-current disabled:checked:text-gray-400 dark:bg-white/5 dark:disabled:bg-transparent dark:disabled:checked:bg-gray-600 text-primary-600 ring-gray-950/10 focus:ring-primary-600 checked:focus:ring-primary-500/50 dark:ring-white/20 dark:checked:bg-primary-500 dark:focus:ring-primary-500 dark:checked:focus:ring-primary-400/50 dark:disabled:ring-white/10 fi-ta-record-checkbox"
                                                                        wire:loading.attr="disabled"
                                                                        wire:target="gotoPage,nextPage,previousPage,removeTableFilter,removeTableFilters,reorderTable,resetTableFiltersForm,sortTable,tableColumnSearches,tableFilters,tableRecordsPerPage,tableSearch"
                                                                        value="7" x-model="selectedRecords">
        
                                                                    <span class="sr-only">
                                                                        Select/deselect item 7 for bulk actions.
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>
        
        
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-image"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.7.column.image">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/7"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-image px-3 py-4">
                                                                        <div class="flex items-center gap-x-2.5">
                                                                            <div class="flex gap-x-1.5">
                                                                                <img src="https://demo.filamentphp.com/storage/57cf914e-fec2-4490-9884-de959bf57f9c.jpg"
                                                                                    style="height: 2.5rem;"
                                                                                    class="max-w-none object-cover object-center ring-white dark:ring-gray-900">
        
                                                                            </div>
        
                                                                        </div>
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-title"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.7.column.title">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/7"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Est eligendi consequuntur quibusdam
                                                                                        rerum.
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-slug"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.7.column.slug">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/7"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        est-eligendi-consequuntur-quibusdam-rerum
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-author.name"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.7.column.author.name">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/7"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Amy O'Connell
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-status"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.7.column.status">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/7"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="flex flex-wrap items-center gap-1.5">
        
                                                                            <div class="flex max-w-max">
                                                                                <div style="--c-50:var(--success-50);--c-300:var(--success-300);--c-400:var(--success-400);--c-600:var(--success-600);"
                                                                                    class="fi-badge flex items-center justify-center gap-x-1 whitespace-nowrap rounded-md  text-xs font-medium ring-1 ring-inset px-2 min-w-[theme(spacing.6)] py-1 bg-custom-50 text-custom-600 ring-custom-600/10 dark:bg-custom-400/10 dark:text-custom-400 dark:ring-custom-400/30">
        
                                                                                    <span>
                                                                                        Published
                                                                                    </span>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-category.name"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.7.column.category.name">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/7"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        officiis harum ad
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-published-at"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.7.column.published_at">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/7"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Jun 4, 2023
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-comments.customer.name"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.7.column.comments.customer.name">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/7"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <ul class="">
        
                                                                            <li class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Zita Wisozk
                                                                                    </div>
        
                                                                                </div>
                                                                            </li>
        
                                                                            <li class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Scotty Paucek
                                                                                    </div>
        
                                                                                </div>
                                                                            </li>
        
                                                                            <li
                                                                                class="text-sm text-gray-500 dark:text-gray-400">
                                                                                and 5 more
                                                                            </li>
                                                                        </ul>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td
                                                            class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3">
                                                            <div class="whitespace-nowrap px-3 py-4">
                                                                <div
                                                                    class="fi-ta-actions flex shrink-0 items-center gap-3 justify-end">
        
                                                                    <span class="inline-flex ">
                                                                        <a style=";"
                                                                            class="fi-link fi-link-size-sm relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus:underline disabled:pointer-events-none disabled:opacity-70 gap-1 text-sm text-gray-700 dark:text-gray-200 fi-ac-link-action"
                                                                            href="https://demo.filamentphp.com/blog/posts/7">
                                                                            <svg class="fi-link-icon h-4 w-4 text-gray-400 dark:text-gray-500"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                                aria-hidden="true">
                                                                                <path
                                                                                    d="M10 12.5a2.5 2.5 0 100-5 2.5 2.5 0 000 5z">
                                                                                </path>
                                                                                <path fill-rule="evenodd"
                                                                                    d="M.664 10.59a1.651 1.651 0 010-1.186A10.004 10.004 0 0110 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0110 17c-4.257 0-7.893-2.66-9.336-6.41zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                                                    clip-rule="evenodd"></path>
                                                                            </svg>
                                                                            View
        
        
                                                                        </a>
        
                                                                    </span>
        
                                                                    <span class="inline-flex ">
                                                                        <a style="--c-300:var(--primary-300);--c-400:var(--primary-400);--c-500:var(--primary-500);--c-600:var(--primary-600);"
                                                                            class="fi-link fi-link-size-sm relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus:underline disabled:pointer-events-none disabled:opacity-70 gap-1 text-sm text-custom-600 dark:text-custom-400 fi-ac-link-action"
                                                                            href="https://demo.filamentphp.com/blog/posts/7/edit">
                                                                            <svg style="--c-500:var(--primary-500);"
                                                                                class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                                aria-hidden="true">
                                                                                <path
                                                                                    d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z">
                                                                                </path>
                                                                                <path
                                                                                    d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z">
                                                                                </path>
                                                                            </svg>
                                                                            Edit
        
        
                                                                        </a>
        
                                                                    </span>
        
                                                                    <span class="inline-flex ">
                                                                        <button
                                                                            style="--c-300:var(--danger-300);--c-400:var(--danger-400);--c-500:var(--danger-500);--c-600:var(--danger-600);"
                                                                            class="fi-link fi-link-size-sm relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus:underline disabled:pointer-events-none disabled:opacity-70 gap-1 text-sm text-custom-600 dark:text-custom-400 fi-ac-link-action"
                                                                            type="button" wire:loading.attr="disabled"
                                                                            wire:click="mountTableAction('delete', '7')">
                                                                            <svg wire:loading.remove.delay="1"
                                                                                wire:target="mountTableAction('delete', '7')"
                                                                                class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                                aria-hidden="true" style="display: block;">
                                                                                <path fill-rule="evenodd"
                                                                                    d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z"
                                                                                    clip-rule="evenodd"></path>
                                                                            </svg>
                                                                            <svg fill="none" viewBox="0 0 24 24"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="animate-spin fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400"
                                                                                wire:loading.delay=""
                                                                                wire:target="mountTableAction('delete', '7')"
                                                                                style="display: none;">
                                                                                <path clip-rule="evenodd"
                                                                                    d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                                    fill-rule="evenodd" fill="currentColor"
                                                                                    opacity="0.2"></path>
                                                                                <path
                                                                                    d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z"
                                                                                    fill="currentColor"></path>
                                                                            </svg>
        
                                                                            Delete
        
        
                                                                        </button>
        
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
        
        
        
                                                    <tr x-bind:class="{
                                                        'hidden': false & amp; & amp;isGroupCollapsed(''),
                                                        'bg-gray-50 dark:bg-white/5': isRecordSelected('8'),
                                                        '[&amp;>*:first-child]:relative [&amp;>*:first-child]:before:absolute [&amp;>*:first-child]:before:start-0 [&amp;>*:first-child]:before:inset-y-0 [&amp;>*:first-child]:before:w-0.5 [&amp;>*:first-child]:before:bg-primary-600 [&amp;>*:first-child]:dark:before:bg-primary-500': isRecordSelected(
                                                            '8'),
                                                    }"
                                                        class="fi-ta-row transition duration-75 hover:bg-gray-50 dark:hover:bg-white/5"
                                                        wire:key="KNf45ZgeKjr9QYRAbUKb.table.records.8">
                                                        <td
                                                            class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 w-1">
                                                            <div class="px-3 py-4">
                                                                <label class="flex">
                                                                    <input type="checkbox"
                                                                        class="fi-checkbox-input rounded border-none bg-white shadow-sm ring-1 transition duration-75 checked:ring-0 focus:ring-2 focus:ring-offset-0 disabled:pointer-events-none disabled:bg-gray-50 disabled:text-gray-50 disabled:checked:bg-current disabled:checked:text-gray-400 dark:bg-white/5 dark:disabled:bg-transparent dark:disabled:checked:bg-gray-600 text-primary-600 ring-gray-950/10 focus:ring-primary-600 checked:focus:ring-primary-500/50 dark:ring-white/20 dark:checked:bg-primary-500 dark:focus:ring-primary-500 dark:checked:focus:ring-primary-400/50 dark:disabled:ring-white/10 fi-ta-record-checkbox"
                                                                        wire:loading.attr="disabled"
                                                                        wire:target="gotoPage,nextPage,previousPage,removeTableFilter,removeTableFilters,reorderTable,resetTableFiltersForm,sortTable,tableColumnSearches,tableFilters,tableRecordsPerPage,tableSearch"
                                                                        value="8" x-model="selectedRecords">
        
                                                                    <span class="sr-only">
                                                                        Select/deselect item 8 for bulk actions.
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>
        
        
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-image"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.8.column.image">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/8"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-image px-3 py-4">
                                                                        <div class="flex items-center gap-x-2.5">
                                                                            <div class="flex gap-x-1.5">
                                                                                <img src="https://demo.filamentphp.com/storage/934afb0e-a391-472b-9625-c96f6929e58c.jpg"
                                                                                    style="height: 2.5rem;"
                                                                                    class="max-w-none object-cover object-center ring-white dark:ring-gray-900">
        
                                                                            </div>
        
                                                                        </div>
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-title"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.8.column.title">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/8"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Sunt corrupti deserunt voluptate rerum.
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-slug"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.8.column.slug">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/8"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        sunt-corrupti-deserunt-voluptate-rerum
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-author.name"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.8.column.author.name">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/8"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Amy O'Connell
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-status"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.8.column.status">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/8"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="flex flex-wrap items-center gap-1.5">
        
                                                                            <div class="flex max-w-max">
                                                                                <div style="--c-50:var(--primary-50);--c-300:var(--primary-300);--c-400:var(--primary-400);--c-600:var(--primary-600);"
                                                                                    class="fi-badge flex items-center justify-center gap-x-1 whitespace-nowrap rounded-md  text-xs font-medium ring-1 ring-inset px-2 min-w-[theme(spacing.6)] py-1 bg-custom-50 text-custom-600 ring-custom-600/10 dark:bg-custom-400/10 dark:text-custom-400 dark:ring-custom-400/30">
        
                                                                                    <span>
                                                                                        Draft
                                                                                    </span>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-category.name"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.8.column.category.name">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/8"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        ex et deserunt
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-published-at"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.8.column.published_at">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/8"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Aug 21, 2023
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-comments.customer.name"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.8.column.comments.customer.name">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/8"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <ul class="">
        
                                                                            <li class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Katrine Ruecker V
                                                                                    </div>
        
                                                                                </div>
                                                                            </li>
        
                                                                            <li class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Mrs. Alessandra Brekke
                                                                                    </div>
        
                                                                                </div>
                                                                            </li>
        
                                                                            <li
                                                                                class="text-sm text-gray-500 dark:text-gray-400">
                                                                                and 5 more
                                                                            </li>
                                                                        </ul>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td
                                                            class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3">
                                                            <div class="whitespace-nowrap px-3 py-4">
                                                                <div
                                                                    class="fi-ta-actions flex shrink-0 items-center gap-3 justify-end">
        
                                                                    <span class="inline-flex ">
                                                                        <a style=";"
                                                                            class="fi-link fi-link-size-sm relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus:underline disabled:pointer-events-none disabled:opacity-70 gap-1 text-sm text-gray-700 dark:text-gray-200 fi-ac-link-action"
                                                                            href="https://demo.filamentphp.com/blog/posts/8">
                                                                            <svg class="fi-link-icon h-4 w-4 text-gray-400 dark:text-gray-500"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                                aria-hidden="true">
                                                                                <path
                                                                                    d="M10 12.5a2.5 2.5 0 100-5 2.5 2.5 0 000 5z">
                                                                                </path>
                                                                                <path fill-rule="evenodd"
                                                                                    d="M.664 10.59a1.651 1.651 0 010-1.186A10.004 10.004 0 0110 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0110 17c-4.257 0-7.893-2.66-9.336-6.41zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                                                    clip-rule="evenodd"></path>
                                                                            </svg>
                                                                            View
        
        
                                                                        </a>
        
                                                                    </span>
        
                                                                    <span class="inline-flex ">
                                                                        <a style="--c-300:var(--primary-300);--c-400:var(--primary-400);--c-500:var(--primary-500);--c-600:var(--primary-600);"
                                                                            class="fi-link fi-link-size-sm relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus:underline disabled:pointer-events-none disabled:opacity-70 gap-1 text-sm text-custom-600 dark:text-custom-400 fi-ac-link-action"
                                                                            href="https://demo.filamentphp.com/blog/posts/8/edit">
                                                                            <svg style="--c-500:var(--primary-500);"
                                                                                class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                                aria-hidden="true">
                                                                                <path
                                                                                    d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z">
                                                                                </path>
                                                                                <path
                                                                                    d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z">
                                                                                </path>
                                                                            </svg>
                                                                            Edit
        
        
                                                                        </a>
        
                                                                    </span>
        
                                                                    <span class="inline-flex ">
                                                                        <button
                                                                            style="--c-300:var(--danger-300);--c-400:var(--danger-400);--c-500:var(--danger-500);--c-600:var(--danger-600);"
                                                                            class="fi-link fi-link-size-sm relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus:underline disabled:pointer-events-none disabled:opacity-70 gap-1 text-sm text-custom-600 dark:text-custom-400 fi-ac-link-action"
                                                                            type="button" wire:loading.attr="disabled"
                                                                            wire:click="mountTableAction('delete', '8')">
                                                                            <svg wire:loading.remove.delay="1"
                                                                                wire:target="mountTableAction('delete', '8')"
                                                                                class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                                aria-hidden="true" style="display: block;">
                                                                                <path fill-rule="evenodd"
                                                                                    d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z"
                                                                                    clip-rule="evenodd"></path>
                                                                            </svg>
                                                                            <svg fill="none" viewBox="0 0 24 24"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="animate-spin fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400"
                                                                                wire:loading.delay=""
                                                                                wire:target="mountTableAction('delete', '8')"
                                                                                style="display: none;">
                                                                                <path clip-rule="evenodd"
                                                                                    d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                                    fill-rule="evenodd" fill="currentColor"
                                                                                    opacity="0.2"></path>
                                                                                <path
                                                                                    d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z"
                                                                                    fill="currentColor"></path>
                                                                            </svg>
        
                                                                            Delete
        
        
                                                                        </button>
        
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
        
        
        
                                                    <tr x-bind:class="{
                                                        'hidden': false & amp; & amp;isGroupCollapsed(''),
                                                        'bg-gray-50 dark:bg-white/5': isRecordSelected('9'),
                                                        '[&amp;>*:first-child]:relative [&amp;>*:first-child]:before:absolute [&amp;>*:first-child]:before:start-0 [&amp;>*:first-child]:before:inset-y-0 [&amp;>*:first-child]:before:w-0.5 [&amp;>*:first-child]:before:bg-primary-600 [&amp;>*:first-child]:dark:before:bg-primary-500': isRecordSelected(
                                                            '9'),
                                                    }"
                                                        class="fi-ta-row transition duration-75 hover:bg-gray-50 dark:hover:bg-white/5"
                                                        wire:key="KNf45ZgeKjr9QYRAbUKb.table.records.9">
                                                        <td
                                                            class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 w-1">
                                                            <div class="px-3 py-4">
                                                                <label class="flex">
                                                                    <input type="checkbox"
                                                                        class="fi-checkbox-input rounded border-none bg-white shadow-sm ring-1 transition duration-75 checked:ring-0 focus:ring-2 focus:ring-offset-0 disabled:pointer-events-none disabled:bg-gray-50 disabled:text-gray-50 disabled:checked:bg-current disabled:checked:text-gray-400 dark:bg-white/5 dark:disabled:bg-transparent dark:disabled:checked:bg-gray-600 text-primary-600 ring-gray-950/10 focus:ring-primary-600 checked:focus:ring-primary-500/50 dark:ring-white/20 dark:checked:bg-primary-500 dark:focus:ring-primary-500 dark:checked:focus:ring-primary-400/50 dark:disabled:ring-white/10 fi-ta-record-checkbox"
                                                                        wire:loading.attr="disabled"
                                                                        wire:target="gotoPage,nextPage,previousPage,removeTableFilter,removeTableFilters,reorderTable,resetTableFiltersForm,sortTable,tableColumnSearches,tableFilters,tableRecordsPerPage,tableSearch"
                                                                        value="9" x-model="selectedRecords">
        
                                                                    <span class="sr-only">
                                                                        Select/deselect item 9 for bulk actions.
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>
        
        
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-image"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.9.column.image">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/9"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-image px-3 py-4">
                                                                        <div class="flex items-center gap-x-2.5">
                                                                            <div class="flex gap-x-1.5">
                                                                                <img src="https://demo.filamentphp.com/storage/65cdb535-b4cb-453c-b396-abf0977b167b.jpg"
                                                                                    style="height: 2.5rem;"
                                                                                    class="max-w-none object-cover object-center ring-white dark:ring-gray-900">
        
                                                                            </div>
        
                                                                        </div>
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-title"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.9.column.title">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/9"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Unde minima facere tempora.
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-slug"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.9.column.slug">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/9"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        unde-minima-facere-tempora
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-author.name"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.9.column.author.name">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/9"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Amy O'Connell
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-status"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.9.column.status">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/9"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="flex flex-wrap items-center gap-1.5">
        
                                                                            <div class="flex max-w-max">
                                                                                <div style="--c-50:var(--success-50);--c-300:var(--success-300);--c-400:var(--success-400);--c-600:var(--success-600);"
                                                                                    class="fi-badge flex items-center justify-center gap-x-1 whitespace-nowrap rounded-md  text-xs font-medium ring-1 ring-inset px-2 min-w-[theme(spacing.6)] py-1 bg-custom-50 text-custom-600 ring-custom-600/10 dark:bg-custom-400/10 dark:text-custom-400 dark:ring-custom-400/30">
        
                                                                                    <span>
                                                                                        Published
                                                                                    </span>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-category.name"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.9.column.category.name">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/9"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        fuga et ratione
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-published-at"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.9.column.published_at">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/9"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Feb 24, 2023
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-comments.customer.name"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.9.column.comments.customer.name">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/9"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <ul class="">
        
                                                                            <li class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Wanda Dietrich
                                                                                    </div>
        
                                                                                </div>
                                                                            </li>
        
                                                                            <li class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Simeon Denesik
                                                                                    </div>
        
                                                                                </div>
                                                                            </li>
        
                                                                            <li
                                                                                class="text-sm text-gray-500 dark:text-gray-400">
                                                                                and 5 more
                                                                            </li>
                                                                        </ul>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td
                                                            class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3">
                                                            <div class="whitespace-nowrap px-3 py-4">
                                                                <div
                                                                    class="fi-ta-actions flex shrink-0 items-center gap-3 justify-end">
        
                                                                    <span class="inline-flex ">
                                                                        <a style=";"
                                                                            class="fi-link fi-link-size-sm relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus:underline disabled:pointer-events-none disabled:opacity-70 gap-1 text-sm text-gray-700 dark:text-gray-200 fi-ac-link-action"
                                                                            href="https://demo.filamentphp.com/blog/posts/9">
                                                                            <svg class="fi-link-icon h-4 w-4 text-gray-400 dark:text-gray-500"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                                aria-hidden="true">
                                                                                <path
                                                                                    d="M10 12.5a2.5 2.5 0 100-5 2.5 2.5 0 000 5z">
                                                                                </path>
                                                                                <path fill-rule="evenodd"
                                                                                    d="M.664 10.59a1.651 1.651 0 010-1.186A10.004 10.004 0 0110 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0110 17c-4.257 0-7.893-2.66-9.336-6.41zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                                                    clip-rule="evenodd"></path>
                                                                            </svg>
                                                                            View
        
        
                                                                        </a>
        
                                                                    </span>
        
                                                                    <span class="inline-flex ">
                                                                        <a style="--c-300:var(--primary-300);--c-400:var(--primary-400);--c-500:var(--primary-500);--c-600:var(--primary-600);"
                                                                            class="fi-link fi-link-size-sm relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus:underline disabled:pointer-events-none disabled:opacity-70 gap-1 text-sm text-custom-600 dark:text-custom-400 fi-ac-link-action"
                                                                            href="https://demo.filamentphp.com/blog/posts/9/edit">
                                                                            <svg style="--c-500:var(--primary-500);"
                                                                                class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                                aria-hidden="true">
                                                                                <path
                                                                                    d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z">
                                                                                </path>
                                                                                <path
                                                                                    d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z">
                                                                                </path>
                                                                            </svg>
                                                                            Edit
        
        
                                                                        </a>
        
                                                                    </span>
        
                                                                    <span class="inline-flex ">
                                                                        <button
                                                                            style="--c-300:var(--danger-300);--c-400:var(--danger-400);--c-500:var(--danger-500);--c-600:var(--danger-600);"
                                                                            class="fi-link fi-link-size-sm relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus:underline disabled:pointer-events-none disabled:opacity-70 gap-1 text-sm text-custom-600 dark:text-custom-400 fi-ac-link-action"
                                                                            type="button" wire:loading.attr="disabled"
                                                                            wire:click="mountTableAction('delete', '9')">
                                                                            <svg wire:loading.remove.delay="1"
                                                                                wire:target="mountTableAction('delete', '9')"
                                                                                class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                                aria-hidden="true" style="display: block;">
                                                                                <path fill-rule="evenodd"
                                                                                    d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z"
                                                                                    clip-rule="evenodd"></path>
                                                                            </svg>
                                                                            <svg fill="none" viewBox="0 0 24 24"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="animate-spin fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400"
                                                                                wire:loading.delay=""
                                                                                wire:target="mountTableAction('delete', '9')"
                                                                                style="display: none;">
                                                                                <path clip-rule="evenodd"
                                                                                    d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                                    fill-rule="evenodd" fill="currentColor"
                                                                                    opacity="0.2"></path>
                                                                                <path
                                                                                    d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z"
                                                                                    fill="currentColor"></path>
                                                                            </svg>
        
                                                                            Delete
        
        
                                                                        </button>
        
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
        
        
        
                                                    <tr x-bind:class="{
                                                        'hidden': false & amp; & amp;isGroupCollapsed(''),
                                                        'bg-gray-50 dark:bg-white/5': isRecordSelected('10'),
                                                        '[&amp;>*:first-child]:relative [&amp;>*:first-child]:before:absolute [&amp;>*:first-child]:before:start-0 [&amp;>*:first-child]:before:inset-y-0 [&amp;>*:first-child]:before:w-0.5 [&amp;>*:first-child]:before:bg-primary-600 [&amp;>*:first-child]:dark:before:bg-primary-500': isRecordSelected(
                                                            '10'),
                                                    }"
                                                        class="fi-ta-row transition duration-75 hover:bg-gray-50 dark:hover:bg-white/5"
                                                        wire:key="KNf45ZgeKjr9QYRAbUKb.table.records.10">
                                                        <td
                                                            class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 w-1">
                                                            <div class="px-3 py-4">
                                                                <label class="flex">
                                                                    <input type="checkbox"
                                                                        class="fi-checkbox-input rounded border-none bg-white shadow-sm ring-1 transition duration-75 checked:ring-0 focus:ring-2 focus:ring-offset-0 disabled:pointer-events-none disabled:bg-gray-50 disabled:text-gray-50 disabled:checked:bg-current disabled:checked:text-gray-400 dark:bg-white/5 dark:disabled:bg-transparent dark:disabled:checked:bg-gray-600 text-primary-600 ring-gray-950/10 focus:ring-primary-600 checked:focus:ring-primary-500/50 dark:ring-white/20 dark:checked:bg-primary-500 dark:focus:ring-primary-500 dark:checked:focus:ring-primary-400/50 dark:disabled:ring-white/10 fi-ta-record-checkbox"
                                                                        wire:loading.attr="disabled"
                                                                        wire:target="gotoPage,nextPage,previousPage,removeTableFilter,removeTableFilters,reorderTable,resetTableFiltersForm,sortTable,tableColumnSearches,tableFilters,tableRecordsPerPage,tableSearch"
                                                                        value="10" x-model="selectedRecords">
        
                                                                    <span class="sr-only">
                                                                        Select/deselect item 10 for bulk actions.
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>
        
        
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-image"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.10.column.image">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/10"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-image px-3 py-4">
                                                                        <div class="flex items-center gap-x-2.5">
                                                                            <div class="flex gap-x-1.5">
                                                                                <img src="https://demo.filamentphp.com/storage/165e8ecc-643f-497d-8c08-8f30242b6a2a.jpg"
                                                                                    style="height: 2.5rem;"
                                                                                    class="max-w-none object-cover object-center ring-white dark:ring-gray-900">
        
                                                                            </div>
        
                                                                        </div>
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-title"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.10.column.title">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/10"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Dolores voluptas et voluptate.
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-slug"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.10.column.slug">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/10"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        dolores-voluptas-et-voluptate
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-author.name"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.10.column.author.name">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/10"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Amy O'Connell
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-status"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.10.column.status">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/10"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="flex flex-wrap items-center gap-1.5">
        
                                                                            <div class="flex max-w-max">
                                                                                <div style="--c-50:var(--success-50);--c-300:var(--success-300);--c-400:var(--success-400);--c-600:var(--success-600);"
                                                                                    class="fi-badge flex items-center justify-center gap-x-1 whitespace-nowrap rounded-md  text-xs font-medium ring-1 ring-inset px-2 min-w-[theme(spacing.6)] py-1 bg-custom-50 text-custom-600 ring-custom-600/10 dark:bg-custom-400/10 dark:text-custom-400 dark:ring-custom-400/30">
        
                                                                                    <span>
                                                                                        Published
                                                                                    </span>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-category.name"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.10.column.category.name">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/10"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        aut cum pariatur
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-published-at"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.10.column.published_at">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/10"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <div class="">
        
                                                                            <div class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Jun 25, 2023
                                                                                    </div>
        
                                                                                </div>
                                                                            </div>
        
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-comments.customer.name"
                                                            wire:key="KNf45ZgeKjr9QYRAbUKb.table.record.10.column.comments.customer.name">
                                                            <div class="fi-ta-col-wrp">
                                                                <a href="https://demo.filamentphp.com/blog/posts/10"
                                                                    class="flex w-full disabled:pointer-events-none justify-start text-start">
                                                                    <div class="fi-ta-text grid gap-y-1 px-3 py-4">
        
                                                                        <ul class="">
        
                                                                            <li class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Prof. Jarred Luettgen I
                                                                                    </div>
        
                                                                                </div>
                                                                            </li>
        
                                                                            <li class="flex max-w-max">
                                                                                <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  "
                                                                                    style="">
        
                                                                                    <div>
                                                                                        Sandrine Mueller
                                                                                    </div>
        
                                                                                </div>
                                                                            </li>
        
                                                                            <li
                                                                                class="text-sm text-gray-500 dark:text-gray-400">
                                                                                and 5 more
                                                                            </li>
                                                                        </ul>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </td>
        
                                                        <td
                                                            class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3">
                                                            <div class="whitespace-nowrap px-3 py-4">
                                                                <div
                                                                    class="fi-ta-actions flex shrink-0 items-center gap-3 justify-end">
        
                                                                    <span class="inline-flex ">
                                                                        <a style=";"
                                                                            class="fi-link fi-link-size-sm relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus:underline disabled:pointer-events-none disabled:opacity-70 gap-1 text-sm text-gray-700 dark:text-gray-200 fi-ac-link-action"
                                                                            href="https://demo.filamentphp.com/blog/posts/10">
                                                                            <svg class="fi-link-icon h-4 w-4 text-gray-400 dark:text-gray-500"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                                aria-hidden="true">
                                                                                <path
                                                                                    d="M10 12.5a2.5 2.5 0 100-5 2.5 2.5 0 000 5z">
                                                                                </path>
                                                                                <path fill-rule="evenodd"
                                                                                    d="M.664 10.59a1.651 1.651 0 010-1.186A10.004 10.004 0 0110 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0110 17c-4.257 0-7.893-2.66-9.336-6.41zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                                                    clip-rule="evenodd"></path>
                                                                            </svg>
                                                                            View
        
        
                                                                        </a>
        
                                                                    </span>
        
                                                                    <span class="inline-flex ">
                                                                        <a style="--c-300:var(--primary-300);--c-400:var(--primary-400);--c-500:var(--primary-500);--c-600:var(--primary-600);"
                                                                            class="fi-link fi-link-size-sm relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus:underline disabled:pointer-events-none disabled:opacity-70 gap-1 text-sm text-custom-600 dark:text-custom-400 fi-ac-link-action"
                                                                            href="https://demo.filamentphp.com/blog/posts/10/edit">
                                                                            <svg style="--c-500:var(--primary-500);"
                                                                                class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                                aria-hidden="true">
                                                                                <path
                                                                                    d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z">
                                                                                </path>
                                                                                <path
                                                                                    d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z">
                                                                                </path>
                                                                            </svg>
                                                                            Edit
        
        
                                                                        </a>
        
                                                                    </span>
        
                                                                    <span class="inline-flex ">
                                                                        <button
                                                                            style="--c-300:var(--danger-300);--c-400:var(--danger-400);--c-500:var(--danger-500);--c-600:var(--danger-600);"
                                                                            class="fi-link fi-link-size-sm relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus:underline disabled:pointer-events-none disabled:opacity-70 gap-1 text-sm text-custom-600 dark:text-custom-400 fi-ac-link-action"
                                                                            type="button" wire:loading.attr="disabled"
                                                                            wire:click="mountTableAction('delete', '10')">
                                                                            <svg wire:loading.remove.delay="1"
                                                                                wire:target="mountTableAction('delete', '10')"
                                                                                class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                                aria-hidden="true" style="display: block;">
                                                                                <path fill-rule="evenodd"
                                                                                    d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z"
                                                                                    clip-rule="evenodd"></path>
                                                                            </svg>
                                                                            <svg fill="none" viewBox="0 0 24 24"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="animate-spin fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400"
                                                                                wire:loading.delay=""
                                                                                wire:target="mountTableAction('delete', '10')"
                                                                                style="display: none;">
                                                                                <path clip-rule="evenodd"
                                                                                    d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                                    fill-rule="evenodd" fill="currentColor"
                                                                                    opacity="0.2"></path>
                                                                                <path
                                                                                    d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z"
                                                                                    fill="currentColor"></path>
                                                                            </svg>
        
                                                                            Delete
        
        
                                                                        </button>
        
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
        
                                            </table>
                                        </div>
        
                                        <nav aria-label="Pagination navigation" role="navigation"
                                            class="fi-pagination grid grid-cols-3 items-center px-3 py-3 sm:px-6">
        
                                            <span
                                                class="hidden text-sm font-medium text-gray-700 dark:text-gray-200 md:inline">
                                                Showing 1 to 10 of 100 results
                                            </span>
        
                                            <div class="col-start-2 justify-self-center">
                                                <label class="sm:hidden">
                                                    <div
                                                        class="fi-input-wrapper flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white focus-within:ring-2 dark:bg-white/5 ring-gray-950/10 focus-within:ring-primary-600 dark:ring-white/20 dark:focus-within:ring-primary-500">
        
                                                        <div class="min-w-0 flex-1">
                                                            <select
                                                                class="fi-select-input block w-full border-none bg-transparent py-1.5 pe-8 text-base text-gray-950 transition duration-75 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] dark:text-white dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] sm:text-sm sm:leading-6 [&amp;_option]:bg-white [&amp;_option]:dark:bg-gray-900 ps-3"
                                                                wire:model.live="tableRecordsPerPage">
                                                                <option value="5">
                                                                    5
                                                                </option>
                                                                <option value="10">
                                                                    10
                                                                </option>
                                                                <option value="25">
                                                                    25
                                                                </option>
                                                                <option value="50">
                                                                    50
                                                                </option>
                                                                <option value="all">
                                                                    All
                                                                </option>
                                                            </select>
                                                        </div>
        
                                                    </div>
        
                                                    <span class="sr-only">
                                                        Per page
                                                    </span>
                                                </label>
        
                                                <label class="hidden sm:inline">
                                                    <div
                                                        class="fi-input-wrapper flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white focus-within:ring-2 dark:bg-white/5 ring-gray-950/10 focus-within:ring-primary-600 dark:ring-white/20 dark:focus-within:ring-primary-500">
                                                        <div
                                                            class="flex items-center gap-x-3 ps-3 border-e border-gray-200 pe-3 ps-3 dark:border-white/10">
        
        
        
                                                            <span
                                                                class="fi-input-wrapper-label whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                                                Per page
                                                            </span>
                                                        </div>
        
                                                        <div class="min-w-0 flex-1">
                                                            <select
                                                                class="fi-select-input block w-full border-none bg-transparent py-1.5 pe-8 text-base text-gray-950 transition duration-75 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] dark:text-white dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] sm:text-sm sm:leading-6 [&amp;_option]:bg-white [&amp;_option]:dark:bg-gray-900 ps-3"
                                                                wire:model.live="tableRecordsPerPage">
                                                                <option value="5">
                                                                    5
                                                                </option>
                                                                <option value="10">
                                                                    10
                                                                </option>
                                                                <option value="25">
                                                                    25
                                                                </option>
                                                                <option value="50">
                                                                    50
                                                                </option>
                                                                <option value="all">
                                                                    All
                                                                </option>
                                                            </select>
                                                        </div>
        
                                                    </div>
                                                </label>
                                            </div>
        
                                            <button style=";"
                                                class="fi-btn fi-btn-size-md relative grid-flow-col items-center justify-center font-semibold outline-none transition duration-75 focus:ring-2 disabled:pointer-events-none disabled:opacity-70 rounded-lg fi-btn-color-gray gap-1.5 px-3 py-2 text-sm inline-grid shadow-sm bg-white text-gray-950 hover:bg-gray-50 dark:bg-white/5 dark:text-white dark:hover:bg-white/10 ring-1 ring-gray-950/10 dark:ring-white/20 col-start-3 justify-self-end inline-grid md:hidden"
                                                type="button" wire:loading.attr="disabled" wire:target="nextPage('page')"
                                                rel="next" wire:click="nextPage('page')"
                                                wire:key="KNf45ZgeKjr9QYRAbUKb.pagination.next">
        
                                                <svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                    class="animate-spin fi-btn-icon h-5 w-5 text-gray-400 dark:text-gray-500 md"
                                                    wire:loading.delay="" wire:target="nextPage('page')">
                                                    <path clip-rule="evenodd"
                                                        d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                        fill-rule="evenodd" fill="currentColor" opacity="0.2"></path>
                                                    <path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z"
                                                        fill="currentColor"></path>
                                                </svg>
        
        
                                                <span class="fi-btn-label">
                                                    Next
                                                </span>
        
        
        
                                            </button>
        
                                            <ol
                                                class="hidden justify-self-end rounded-lg bg-white shadow-sm ring-1 ring-gray-950/10 dark:bg-white/5 dark:ring-white/20 md:flex">
        
        
                                                <li
                                                    class="overflow-hidden border-x-[0.5px] border-gray-200 first:rounded-s-lg first:border-s-0 last:rounded-e-lg last:border-e-0 dark:border-white/10 focus-within:z-10 focus-within:ring-2 focus-within:ring-primary-600 dark:focus-within:ring-primary-500">
                                                    <button
                                                        class="fi-pagination-item relative overflow-hidden p-2 text-sm font-semibold outline-none transition duration-75 hover:bg-gray-50 dark:hover:bg-white/5 bg-gray-50 text-primary-600 dark:bg-white/5 dark:text-primary-400"
                                                        type="button"
                                                        aria-label="filament::components.pagination.actions.go_to_page.label"
                                                        wire:click="gotoPage(1, 'page')"
                                                        wire:key="KNf45ZgeKjr9QYRAbUKb.pagination.page.1">
        
                                                        <span class="px-1.5">
                                                            1
                                                        </span>
                                                    </button>
                                                </li>
                                                <li
                                                    class="overflow-hidden border-x-[0.5px] border-gray-200 first:rounded-s-lg first:border-s-0 last:rounded-e-lg last:border-e-0 dark:border-white/10 focus-within:z-10 focus-within:ring-2 focus-within:ring-primary-600 dark:focus-within:ring-primary-500">
                                                    <button
                                                        class="fi-pagination-item relative overflow-hidden p-2 text-sm font-semibold outline-none transition duration-75 text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-white/5"
                                                        type="button"
                                                        aria-label="filament::components.pagination.actions.go_to_page.label"
                                                        wire:click="gotoPage(2, 'page')"
                                                        wire:key="KNf45ZgeKjr9QYRAbUKb.pagination.page.2">
        
                                                        <span class="px-1.5">
                                                            2
                                                        </span>
                                                    </button>
                                                </li>
                                                <li
                                                    class="overflow-hidden border-x-[0.5px] border-gray-200 first:rounded-s-lg first:border-s-0 last:rounded-e-lg last:border-e-0 dark:border-white/10 focus-within:z-10 focus-within:ring-2 focus-within:ring-primary-600 dark:focus-within:ring-primary-500">
                                                    <button
                                                        class="fi-pagination-item relative overflow-hidden p-2 text-sm font-semibold outline-none transition duration-75 text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-white/5"
                                                        type="button"
                                                        aria-label="filament::components.pagination.actions.go_to_page.label"
                                                        wire:click="gotoPage(3, 'page')"
                                                        wire:key="KNf45ZgeKjr9QYRAbUKb.pagination.page.3">
        
                                                        <span class="px-1.5">
                                                            3
                                                        </span>
                                                    </button>
                                                </li>
                                                <li
                                                    class="overflow-hidden border-x-[0.5px] border-gray-200 first:rounded-s-lg first:border-s-0 last:rounded-e-lg last:border-e-0 dark:border-white/10 focus-within:z-10 focus-within:ring-2 focus-within:ring-primary-600 dark:focus-within:ring-primary-500">
                                                    <button
                                                        class="fi-pagination-item relative overflow-hidden p-2 text-sm font-semibold outline-none transition duration-75 text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-white/5"
                                                        type="button"
                                                        aria-label="filament::components.pagination.actions.go_to_page.label"
                                                        wire:click="gotoPage(4, 'page')"
                                                        wire:key="KNf45ZgeKjr9QYRAbUKb.pagination.page.4">
        
                                                        <span class="px-1.5">
                                                            4
                                                        </span>
                                                    </button>
                                                </li>
                                                <li
                                                    class="overflow-hidden border-x-[0.5px] border-gray-200 first:rounded-s-lg first:border-s-0 last:rounded-e-lg last:border-e-0 dark:border-white/10 focus-within:z-10 focus-within:ring-2 focus-within:ring-primary-600 dark:focus-within:ring-primary-500">
                                                    <button
                                                        class="fi-pagination-item relative overflow-hidden p-2 text-sm font-semibold outline-none transition duration-75 text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-white/5"
                                                        type="button"
                                                        aria-label="filament::components.pagination.actions.go_to_page.label"
                                                        wire:click="gotoPage(5, 'page')"
                                                        wire:key="KNf45ZgeKjr9QYRAbUKb.pagination.page.5">
        
                                                        <span class="px-1.5">
                                                            5
                                                        </span>
                                                    </button>
                                                </li>
                                                <li
                                                    class="overflow-hidden border-x-[0.5px] border-gray-200 first:rounded-s-lg first:border-s-0 last:rounded-e-lg last:border-e-0 dark:border-white/10 focus-within:z-10 focus-within:ring-2 focus-within:ring-primary-600 dark:focus-within:ring-primary-500">
                                                    <button
                                                        class="fi-pagination-item relative overflow-hidden p-2 text-sm font-semibold outline-none transition duration-75 text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-white/5"
                                                        type="button"
                                                        aria-label="filament::components.pagination.actions.go_to_page.label"
                                                        wire:click="gotoPage(6, 'page')"
                                                        wire:key="KNf45ZgeKjr9QYRAbUKb.pagination.page.6">
        
                                                        <span class="px-1.5">
                                                            6
                                                        </span>
                                                    </button>
                                                </li>
                                                <li
                                                    class="overflow-hidden border-x-[0.5px] border-gray-200 first:rounded-s-lg first:border-s-0 last:rounded-e-lg last:border-e-0 dark:border-white/10">
                                                    <button
                                                        class="fi-pagination-item relative overflow-hidden p-2 text-sm font-semibold outline-none transition duration-75"
                                                        disabled="disabled" type="button">
        
                                                        <span class="px-1.5">
                                                            ...
                                                        </span>
                                                    </button>
                                                </li>
        
        
                                                <li
                                                    class="overflow-hidden border-x-[0.5px] border-gray-200 first:rounded-s-lg first:border-s-0 last:rounded-e-lg last:border-e-0 dark:border-white/10 focus-within:z-10 focus-within:ring-2 focus-within:ring-primary-600 dark:focus-within:ring-primary-500">
                                                    <button
                                                        class="fi-pagination-item relative overflow-hidden p-2 text-sm font-semibold outline-none transition duration-75 text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-white/5"
                                                        type="button"
                                                        aria-label="filament::components.pagination.actions.go_to_page.label"
                                                        wire:click="gotoPage(9, 'page')"
                                                        wire:key="KNf45ZgeKjr9QYRAbUKb.pagination.page.9">
        
                                                        <span class="px-1.5">
                                                            9
                                                        </span>
                                                    </button>
                                                </li>
                                                <li
                                                    class="overflow-hidden border-x-[0.5px] border-gray-200 first:rounded-s-lg first:border-s-0 last:rounded-e-lg last:border-e-0 dark:border-white/10 focus-within:z-10 focus-within:ring-2 focus-within:ring-primary-600 dark:focus-within:ring-primary-500">
                                                    <button
                                                        class="fi-pagination-item relative overflow-hidden p-2 text-sm font-semibold outline-none transition duration-75 text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-white/5"
                                                        type="button"
                                                        aria-label="filament::components.pagination.actions.go_to_page.label"
                                                        wire:click="gotoPage(10, 'page')"
                                                        wire:key="KNf45ZgeKjr9QYRAbUKb.pagination.page.10">
        
                                                        <span class="px-1.5">
                                                            10
                                                        </span>
                                                    </button>
                                                </li>
        
                                                <li
                                                    class="overflow-hidden border-x-[0.5px] border-gray-200 first:rounded-s-lg first:border-s-0 last:rounded-e-lg last:border-e-0 dark:border-white/10 focus-within:z-10 focus-within:ring-2 focus-within:ring-primary-600 dark:focus-within:ring-primary-500">
                                                    <button
                                                        class="fi-pagination-item relative overflow-hidden p-2 text-sm font-semibold outline-none transition duration-75 text-gray-400 hover:text-gray-500 dark:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-50 dark:hover:bg-white/5"
                                                        type="button" aria-label="Next" rel="next"
                                                        wire:click="nextPage('page')"
                                                        wire:key="KNf45ZgeKjr9QYRAbUKb.pagination.next">
                                                        <svg class="fi-pagination-item-icon h-5 w-5"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd"
                                                                d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                    </button>
                                                </li>
                                            </ol>
                                        </nav>
                                    </div>
        
                                    <form wire:submit.prevent="callMountedAction">
        
                                        <div aria-modal="true" role="dialog" x-data="{
                                            isOpen: false,
                                        
                                            livewire: null,
                                        
                                            close: function() {
                                                this.isOpen = false
                                        
                                                this.$refs.modalContainer.dispatchEvent(
                                                    new CustomEvent('modal-closed', { id: 'KNf45ZgeKjr9QYRAbUKb-action' }),
                                                )
                                            },
                                        
                                            open: function() {
                                                this.isOpen = true
                                        
                                                this.$refs.modalContainer.dispatchEvent(
                                                    new CustomEvent('modal-opened', { id: 'KNf45ZgeKjr9QYRAbUKb-action' }),
                                                )
                                            },
                                        }"
                                            x-on:close-modal.window="if ($event.detail.id === 'KNf45ZgeKjr9QYRAbUKb-action') close()"
                                            x-on:open-modal.window="if ($event.detail.id === 'KNf45ZgeKjr9QYRAbUKb-action') open()"
                                            x-trap.noscroll="isOpen" wire:ignore.self="" class="fi-modal block">
        
                                            <div x-show="isOpen" x-transition.duration.300ms.opacity=""
                                                class="fixed inset-0 z-40 min-h-full overflow-y-auto overflow-x-hidden transition flex items-center"
                                                style="display: none;">
                                                <div aria-hidden="true"
                                                    x-on:click="$dispatch('close-modal', { id: 'KNf45ZgeKjr9QYRAbUKb-action' })"
                                                    class="fi-modal-close-overlay fixed inset-0 bg-gray-950/50 dark:bg-gray-950/75 cursor-pointer"
                                                    style="will-change: transform"></div>
        
                                                <div x-ref="modalContainer"
                                                    class="pointer-events-none relative w-full transition my-auto p-4"
                                                    x-on:closed-form-component-action-modal.window="if (($event.detail.id === 'KNf45ZgeKjr9QYRAbUKb') &amp;&amp; $wire.mountedActions.length) open()"
                                                    x-on:modal-closed.stop="const mountedActionShouldOpenModal = false
        
        
                    if (! mountedActionShouldOpenModal) {
                        return
                    }
        
                    if ($wire.mountedFormComponentActions.length) {
                        return
                    }
        
                    $wire.unmountAction(false)"
                                                    x-on:opened-form-component-action-modal.window="if ($event.detail.id === 'KNf45ZgeKjr9QYRAbUKb') close()">
                                                    <div x-data="{ isShown: false }" x-init="$nextTick(() => {
                                                        isShown = isOpen
                                                        $watch('isOpen', () => (isShown = isOpen))
                                                    })"
                                                        x-on:keydown.window.escape="$dispatch('close-modal', { id: 'KNf45ZgeKjr9QYRAbUKb-action' })"
                                                        x-show="isShown" x-transition:enter="duration-300"
                                                        x-transition:leave="duration-300"
                                                        x-transition:enter-start="scale-95"
                                                        x-transition:enter-end="scale-100"
                                                        x-transition:leave-start="scale-95"
                                                        x-transition:leave-end="scale-100"
                                                        class="fi-modal-window pointer-events-auto relative flex w-full cursor-default flex-col bg-white shadow-xl ring-1 ring-gray-950/5 dark:bg-gray-900 dark:ring-white/10 mx-auto rounded-xl hidden max-w-sm"
                                                        style="display: none;" data-has-alpine-state="true">
        
        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
        
        
        
                                    <form wire:submit.prevent="callMountedTableAction">
        
                                        <div aria-modal="true" role="dialog" x-data="{
                                            isOpen: false,
                                        
                                            livewire: null,
                                        
                                            close: function() {
                                                this.isOpen = false
                                        
                                                this.$refs.modalContainer.dispatchEvent(
                                                    new CustomEvent('modal-closed', { id: 'KNf45ZgeKjr9QYRAbUKb-table-action' }),
                                                )
                                            },
                                        
                                            open: function() {
                                                this.isOpen = true
                                        
                                                this.$refs.modalContainer.dispatchEvent(
                                                    new CustomEvent('modal-opened', { id: 'KNf45ZgeKjr9QYRAbUKb-table-action' }),
                                                )
                                            },
                                        }"
                                            x-on:close-modal.window="if ($event.detail.id === 'KNf45ZgeKjr9QYRAbUKb-table-action') close()"
                                            x-on:open-modal.window="if ($event.detail.id === 'KNf45ZgeKjr9QYRAbUKb-table-action') open()"
                                            x-trap.noscroll="isOpen" wire:ignore.self="" class="fi-modal block">
        
                                            <div x-show="isOpen" x-transition.duration.300ms.opacity=""
                                                class="fixed inset-0 z-40 min-h-full overflow-y-auto overflow-x-hidden transition flex items-center"
                                                style="display: none;">
                                                <div aria-hidden="true"
                                                    x-on:click="$dispatch('close-modal', { id: 'KNf45ZgeKjr9QYRAbUKb-table-action' })"
                                                    class="fi-modal-close-overlay fixed inset-0 bg-gray-950/50 dark:bg-gray-950/75 cursor-pointer"
                                                    style="will-change: transform"></div>
        
                                                <div x-ref="modalContainer"
                                                    class="pointer-events-none relative w-full transition my-auto p-4"
                                                    x-on:closed-form-component-action-modal.window="if (($event.detail.id === 'KNf45ZgeKjr9QYRAbUKb') &amp;&amp; $wire.mountedTableActions.length) open()"
                                                    x-on:modal-closed.stop="const mountedTableActionShouldOpenModal = false
        
        
                    if (! mountedTableActionShouldOpenModal) {
                        return
                    }
        
                    if ($wire.mountedFormComponentActions.length) {
                        return
                    }
        
                    $wire.unmountTableAction(false)"
                                                    x-on:opened-form-component-action-modal.window="if ($event.detail.id === 'KNf45ZgeKjr9QYRAbUKb') close()">
                                                    <div x-data="{ isShown: false }" x-init="$nextTick(() => {
                                                        isShown = isOpen
                                                        $watch('isOpen', () => (isShown = isOpen))
                                                    })"
                                                        x-on:keydown.window.escape="$dispatch('close-modal', { id: 'KNf45ZgeKjr9QYRAbUKb-table-action' })"
                                                        x-show="isShown" x-transition:enter="duration-300"
                                                        x-transition:leave="duration-300"
                                                        x-transition:enter-start="scale-95"
                                                        x-transition:enter-end="scale-100"
                                                        x-transition:leave-start="scale-95"
                                                        x-transition:leave-end="scale-100"
                                                        class="fi-modal-window pointer-events-auto relative flex w-full cursor-default flex-col bg-white shadow-xl ring-1 ring-gray-950/5 dark:bg-gray-900 dark:ring-white/10 mx-auto rounded-xl hidden max-w-sm"
                                                        style="display: none;" data-has-alpine-state="true">
        
        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
        
                                    <form wire:submit.prevent="callMountedTableBulkAction">
        
                                        <div aria-modal="true" role="dialog" x-data="{
                                            isOpen: false,
                                        
                                            livewire: null,
                                        
                                            close: function() {
                                                this.isOpen = false
                                        
                                                this.$refs.modalContainer.dispatchEvent(
                                                    new CustomEvent('modal-closed', { id: 'KNf45ZgeKjr9QYRAbUKb-table-bulk-action' }),
                                                )
                                            },
                                        
                                            open: function() {
                                                this.isOpen = true
                                        
                                                this.$refs.modalContainer.dispatchEvent(
                                                    new CustomEvent('modal-opened', { id: 'KNf45ZgeKjr9QYRAbUKb-table-bulk-action' }),
                                                )
                                            },
                                        }"
                                            x-on:close-modal.window="if ($event.detail.id === 'KNf45ZgeKjr9QYRAbUKb-table-bulk-action') close()"
                                            x-on:open-modal.window="if ($event.detail.id === 'KNf45ZgeKjr9QYRAbUKb-table-bulk-action') open()"
                                            x-trap.noscroll="isOpen" wire:ignore.self="" class="fi-modal block">
        
                                            <div x-show="isOpen" x-transition.duration.300ms.opacity=""
                                                class="fixed inset-0 z-40 min-h-full overflow-y-auto overflow-x-hidden transition flex items-center"
                                                style="display: none;">
                                                <div aria-hidden="true"
                                                    x-on:click="$dispatch('close-modal', { id: 'KNf45ZgeKjr9QYRAbUKb-table-bulk-action' })"
                                                    class="fi-modal-close-overlay fixed inset-0 bg-gray-950/50 dark:bg-gray-950/75 cursor-pointer"
                                                    style="will-change: transform"></div>
        
                                                <div x-ref="modalContainer"
                                                    class="pointer-events-none relative w-full transition my-auto p-4"
                                                    x-on:closed-form-component-action-modal.window="if (($event.detail.id === 'KNf45ZgeKjr9QYRAbUKb') &amp;&amp; $wire.mountedTableBulkAction) open()"
                                                    x-on:modal-closed.stop="const mountedTableBulkActionShouldOpenModal = false
        
        
                    if (! mountedTableBulkActionShouldOpenModal) {
                        return
                    }
        
                    if ($wire.mountedFormComponentActions.length) {
                        return
                    }
        
                    $wire.mountedTableBulkAction = null"
                                                    x-on:opened-form-component-action-modal.window="if ($event.detail.id === 'KNf45ZgeKjr9QYRAbUKb') close()">
                                                    <div x-data="{ isShown: false }" x-init="$nextTick(() => {
                                                        isShown = isOpen
                                                        $watch('isOpen', () => (isShown = isOpen))
                                                    })"
                                                        x-on:keydown.window.escape="$dispatch('close-modal', { id: 'KNf45ZgeKjr9QYRAbUKb-table-bulk-action' })"
                                                        x-show="isShown" x-transition:enter="duration-300"
                                                        x-transition:leave="duration-300"
                                                        x-transition:enter-start="scale-95"
                                                        x-transition:enter-end="scale-100"
                                                        x-transition:leave-start="scale-95"
                                                        x-transition:leave-end="scale-100"
                                                        class="fi-modal-window pointer-events-auto relative flex w-full cursor-default flex-col bg-white shadow-xl ring-1 ring-gray-950/5 dark:bg-gray-900 dark:ring-white/10 mx-auto rounded-xl hidden max-w-sm"
                                                        style="display: none;" data-has-alpine-state="true">
        
        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
        
        
        
                                    <form wire:submit.prevent="callMountedFormComponentAction">
                                        <div aria-modal="true" role="dialog" x-data="{
                                            isOpen: false,
                                        
                                            livewire: null,
                                        
                                            close: function() {
                                                this.isOpen = false
                                        
                                                this.$refs.modalContainer.dispatchEvent(
                                                    new CustomEvent('modal-closed', { id: 'KNf45ZgeKjr9QYRAbUKb-form-component-action' }),
                                                )
                                            },
                                        
                                            open: function() {
                                                this.isOpen = true
                                        
                                                this.$refs.modalContainer.dispatchEvent(
                                                    new CustomEvent('modal-opened', { id: 'KNf45ZgeKjr9QYRAbUKb-form-component-action' }),
                                                )
                                            },
                                        }"
                                            x-on:close-modal.window="if ($event.detail.id === 'KNf45ZgeKjr9QYRAbUKb-form-component-action') close()"
                                            x-on:open-modal.window="if ($event.detail.id === 'KNf45ZgeKjr9QYRAbUKb-form-component-action') open()"
                                            x-trap.noscroll="isOpen" wire:ignore.self="" class="fi-modal block">
        
                                            <div x-show="isOpen" x-transition.duration.300ms.opacity=""
                                                class="fixed inset-0 z-40 min-h-full overflow-y-auto overflow-x-hidden transition flex items-center"
                                                style="display: none;">
                                                <div aria-hidden="true"
                                                    x-on:click="$dispatch('close-modal', { id: 'KNf45ZgeKjr9QYRAbUKb-form-component-action' })"
                                                    class="fi-modal-close-overlay fixed inset-0 bg-gray-950/50 dark:bg-gray-950/75 cursor-pointer"
                                                    style="will-change: transform"></div>
        
                                                <div x-ref="modalContainer"
                                                    class="pointer-events-none relative w-full transition my-auto p-4"
                                                    x-on:modal-closed.stop="const mountedFormComponentActionShouldOpenModal = false
        
        
                    if (mountedFormComponentActionShouldOpenModal) {
                        $wire.unmountFormComponentAction(false)
                    }">
                                                    <div x-data="{ isShown: false }" x-init="$nextTick(() => {
                                                        isShown = isOpen
                                                        $watch('isOpen', () => (isShown = isOpen))
                                                    })"
                                                        x-on:keydown.window.escape="$dispatch('close-modal', { id: 'KNf45ZgeKjr9QYRAbUKb-form-component-action' })"
                                                        x-show="isShown" x-transition:enter="duration-300"
                                                        x-transition:leave="duration-300"
                                                        x-transition:enter-start="scale-95"
                                                        x-transition:enter-end="scale-100"
                                                        x-transition:leave-start="scale-95"
                                                        x-transition:leave-end="scale-100"
                                                        class="fi-modal-window pointer-events-auto relative flex w-full cursor-default flex-col bg-white shadow-xl ring-1 ring-gray-950/5 dark:bg-gray-900 dark:ring-white/10 mx-auto rounded-xl hidden max-w-sm"
                                                        style="display: none;" data-has-alpine-state="true">
        
        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
        
                                </div>
        
        
        
                            </div>
        
        
        
        
        
        
                        </section>
        
        
        
                    </div>
        
        
                </main>
        
        
            </div>
        </div>
        
    </body>
</html>
