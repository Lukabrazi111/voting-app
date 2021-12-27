<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laracasts Voting</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@livewireStyles

<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="font-sans bg-gray-background text-gray-900 text-sm">

<header class="flex flex-col md:flex-row items-center justify-between px-8 py-4">
    <a href="/"><img src="{{ asset('img/logo.svg') }}" alt="logo"></a>
    <div class="flex items-center mt-2 md:mt-0">
        @if (Route::has('login'))
            <div class="px-6 py-4">
                @auth
                    <div class="flex items-center space-x-4">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a class="hover:underline" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>

                        <div x-data="{ isOpen: false }" class="relative">
                            <button @click="isOpen = !isOpen">
                                <svg class="h-8 w-8 text-gray-400" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                                </svg>
                                <span
                                    class="absolute rounded-full bg-red text-white text-xss w-6 h-6 flex justify-center items-center -top-1 -right-1 border-2">8</span>
                            </button>
                            <ul
                                x-cloak
                                x-show="isOpen" x-transition.origin.top
                                @click.outside="isOpen = false"
                                @keydown.esc.window="isOpen = false"
                                class="z-10 absolute w-76 md:w-96 text-left text-gray-700 bg-white text-sm shadow-dialog max-h-128 overflow-y-auto rounded-xl -right-28 md:-right-12"
                            >

                                <li>
                                    <a
                                        @click.prevent="
                                        isOpen = false
                                        "
                                        href="#"
                                        class="flex hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in">

                                        <img src="https://www.gravatar.com/avatar/c6ad550c8f30082474d1e58d20f67b3a"
                                             class="rounded-xl w-10 h-10" alt="avatar">

                                        <div class="ml-4">
                                            <div class="line-clamp-6">
                                                <span class="font-semibold">drehimself</span>
                                                commented on
                                                <span class="font-semibold">This is my idea</span>
                                                <span>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci excepturi explicabo labore nemo sit. Ad dolores ea in iste quaerat veniam? Aliquid blanditiis corporis eius enim explicabo magnam mollitia nihil quam vero voluptatem. A consectetur corporis, eius fugiat repellendus saepe. Accusamus atque cumque dicta earum inventore maxime molestiae nobis porro quaerat quas rerum, sit. Commodi consectetur cumque distinctio ducimus ea excepturi impedit in modi mollitia nulla omnis possimus quia, reprehenderit sequi sit vel, vitae. Ad at corporis eius, id libero maiores molestiae molestias pariatur reiciendis sit veniam vero. Accusantium architecto dolores enim iusto neque quos saepe tempore veniam veritatis. Fugiat."</span>
                                            </div>
                                            <div class="text-xs text-gray-500 mt-2">1 hour ago</div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a
                                        @click.prevent="
                                        isOpen = false
                                        "
                                        href="#"
                                        class="flex hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in">

                                        <img src="https://www.gravatar.com/avatar/c6ad550c8f30082474d1e58d20f67b3a"
                                             class="rounded-xl w-10 h-10" alt="avatar">

                                        <div class="ml-4">
                                            <div>
                                                <span class="font-semibold">drehimself</span>
                                                commented on
                                                <span class="font-semibold">This is my idea</span>
                                                <span>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque cum delectus dicta incidunt laudantium totam veniam? Autem culpa dicta dolor enim incidunt inventore iste mollitia nihil numquam quidem! Earum, laborum?"</span>
                                            </div>
                                            <div class="text-xs text-gray-500 mt-2">1 hour ago</div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a
                                        @click.prevent="
                                        isOpen = false
                                        "
                                        href="#"
                                        class="flex hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in">

                                        <img src="https://www.gravatar.com/avatar/c6ad550c8f30082474d1e58d20f67b3a"
                                             class="rounded-xl w-10 h-10" alt="avatar">

                                        <div class="ml-4">
                                            <div>
                                                <span class="font-semibold">drehimself</span>
                                                commented on
                                                <span class="font-semibold">This is my idea</span>
                                                <span>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque cum delectus dicta incidunt laudantium totam veniam? Autem culpa dicta dolor enim incidunt inventore iste mollitia nihil numquam quidem! Earum, laborum?"</span>
                                            </div>
                                            <div class="text-xs text-gray-500 mt-2">1 hour ago</div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a
                                        @click.prevent="
                                        isOpen = false
                                        "
                                        href="#"
                                        class="flex hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in">

                                        <img src="https://www.gravatar.com/avatar/c6ad550c8f30082474d1e58d20f67b3a"
                                             class="rounded-xl w-10 h-10" alt="avatar">

                                        <div class="ml-4">
                                            <div>
                                                <span class="font-semibold">drehimself</span>
                                                commented on
                                                <span class="font-semibold">This is my idea</span>
                                                <span>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque cum delectus dicta incidunt laudantium totam veniam? Autem culpa dicta dolor enim incidunt inventore iste mollitia nihil numquam quidem! Earum, laborum?"</span>
                                            </div>
                                            <div class="text-xs text-gray-500 mt-2">1 hour ago</div>
                                        </div>
                                    </a>
                                </li>

                                <li class="border-t border-gray-300 text-center">
                                    <button
                                        href="#"
                                        class="w-full block font-semibold hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in">
                                        Mark all as read
                                    </button>
                                </li>

                            </ul>
                        </div>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                           class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        <a href="#">
            <img src="https://www.gravatar.com/avatar/000000000000000000000000000?d=mp" alt="avatar"
                 class="w-10 h-10 rounded-full">
        </a>
    </div>
</header>

<main class="container mx-auto max-w-custom flex flex-col md:flex-row">
    <div class="mx-auto w-70 md:mx-0 md:mr-5">
        <div class="bg-white md:sticky md:top-8 border-2 border-blue rounded-xl mt-16"
             style="
            border-image-source: linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));
            background-image: linear-gradient(to bottom, #ffffff, #ffffff), linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));
            background-origin: border-box;
            background-clip: content-box, border-box;
            "
        >
            <div class="text-center px-6 py-2 pt-6">
                <h3 class="font-semibold text-base">Add an idea</h3>
                <p class="text-xs mt-4">
                    @auth
                        Let us know what you would like and we'll take a look over!
                    @else
                        Please login to create an idea.
                    @endauth
                </p>
            </div>

            @auth
                <livewire:create-idea/>
            @else
                <div class="my-6 text-center">
                    <a
                        href="{{ route('login') }}"
                        class="inline-block w-1/2 h-11 text-xs bg-blue text-white font-semibold
                        rounded-xl border border-blue hover:bg-blue-hover
                         transition duration-150 ease-in px-6 py-3"
                    >
                        <span class="ml-1">Login</span>
                    </a>

                    <a
                        href="{{ route('register') }}"
                        class="inline-block w-1/2 h-11 text-xs bg-gray-200 font-semibold
                        rounded-xl border border-gray-200 hover:border-gray-400
                         transition duration-150 ease-in px-6 py-3 mt-4"
                    >
                        <span class="ml-1">Sign up</span>
                    </a>
                </div>
            @endauth
        </div>
    </div>
    <div class="w-full px-2 md:px-0 md:w-175">

        <livewire:status-filters/>

        <div class="mt-8">
            {{ $slot }}
        </div>
    </div>
</main>

@if(session('success_message'))
    <x-notification-success :redirect="true" messageToDisplay="{{ session('success_message') }}"/>
@endif

@livewireScripts

</body>
</html>
