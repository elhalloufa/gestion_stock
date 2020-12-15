<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

    @livewireStyles
    <title>Gestion de stock</title>

    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body>
    <div class="flex flex-col">
        <nav class="bg-gray-800">
            <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-8 w-8" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow">
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium">Gestion de stock</a>

                                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Team</a>

                                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Projects</a>

                                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Calendar</a>

                                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Reports</a>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">
                            <button class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                                <span class="sr-only">View notifications</span>
                                <!-- Heroicon name: bell -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                </svg>
                            </button>

                            <!-- Profile dropdown -->
                            <div class="ml-3 relative">
                                <div>
                                    <button class="max-w-xs bg-gray-800 rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu" aria-haspopup="true">
                                        <span class="sr-only">Open user menu</span>

                                        <svg class="h-8 w-8 rounded-full" id="f36e36b5-a914-4189-a8f7-2c7091a7d461" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="676" height="676" viewBox="0 0 676 676">
                                            <title>female_avatar</title>
                                            <path d="M938,450a337.10014,337.10014,0,0,1-24.55,126.7c-.04.09-.07.17-.11.26v.01a336.51307,336.51307,0,0,1-42.79,75.64q-5.055,6.75-10.43,13.22c-1.31,1.58-2.64,3.15-3.97,4.7q-10.275,11.925-21.62,22.85-2.64,2.54994-5.34,5.04c-.42.39-.84.77-1.26,1.16a337.81887,337.81887,0,0,1-27.65,22.7q-9.675,7.155-19.86,13.59-2.235,1.425-4.5,2.8-3.93,2.4-7.93,4.69-5.22,3-10.57,5.81c-1.44.77-2.88995,1.51-4.34,2.25-2.12,1.09-4.25,2.14-6.4,3.17-.37.18-.74.36-1.11.53-1.4.68-2.82,1.34-4.24,2a334.89638,334.89638,0,0,1-57.46,20.39c-.11.03-.21.05-.32.08-1.29.33-2.59.65-3.89.96-.97.24-1.95.47-2.93.69a2.48782,2.48782,0,0,1-.37.09c-2.01.47-4.02.92-6.05,1.33-1.14.24-2.28.48-3.42.71-.69.15-1.39.28-2.08.41-.87.17-1.73.33-2.6.5-.48.1-.96.18-1.45.26-1.1.2-2.2.4-3.29.59-1.86.32-3.74.63-5.61.91-1.36.21-2.71.41-4.07.6-1.6.23-3.2.44-4.81.64-.44.07-.88.12-1.32.17q-.85491.10492-1.71.21c-1.15.14-2.3.27-3.46.39-.6.07-1.19.13-1.79.19q-1.71.18-3.42.33c-1.47.13995-2.94.26-4.42.38-1.8.14-3.59.27-5.4.38-1.16.07-2.32.14-3.49.2-2.98.16-5.96.27-8.96.35-1.49.04-2.99.07-4.49.09h-.03c-1.49.02-2.99.03-4.49.03a339.151,339.151,0,0,1-45.45-3.04q-16.575-2.22-32.62-6.02c-.43-.1-.86-.2-1.28-.31-1.08-.25-2.15-.52-3.22-.79-.95-.24-1.89-.49-2.84-.74a335.35735,335.35735,0,0,1-70.6-27.19c-.11-.06-.23-.12-.34-.18-.65-.34-1.29-.67-1.93-1.02q-2.115-1.11-4.21-2.26-11.925-6.55507-23.24-14.02-2.91-1.905-5.76-3.87c-.61-.42-1.21-.84-1.81-1.26-.63-.44-1.26-.88-1.88-1.32q-2.475-1.755-4.92-3.55-10.125-7.44-19.65-15.61a339.74031,339.74031,0,0,1-59.16-65.85Q312.315,628.19,304.71,614.59A336.38981,336.38981,0,0,1,262,450c0-186.67,151.33-338,338-338S938,263.33,938,450Z" transform="translate(-262 -112)" fill="#6c63ff" />
                                            <path d="M654.35,778.63c1.08-.25,2.15-.52,3.22-.79.95-.24,1.89-.49,2.84-.74.05-1.99.12006-4.18.19-6.55.59-18.56,1.98-48.44,5.26-84.44q.27-2.895.54-5.83c1.17-12.2,2.54-25.03,4.18-38.33.05-.44.11-.87.16-1.31,1.33-10.78,2.84-21.85,4.54-33.13q1.78491-11.835,3.86-23.93c.1-.56.2-1.13.3-1.69.4-2.33.81-4.65,1.23-6.99,1.17-6.51,2.42-13.06,3.73-19.61,4.61-23.04,10.1-46.22,16.65-68.77a550.90913,550.90913,0,0,1,24.53-68.61,338.80588,338.80588,0,0,1,26.74-49.83c.15-.23.3-.45.45-.68,13.15-19.81,28.18-36.62,45.34-49.19l-3.56-4.86q-24.66,18.075-45.24,48.1c-.07.1-.13.19-.2.29A327.43692,327.43692,0,0,0,722.19,410a527.39526,527.39526,0,0,0-25.68,69.37q-9.84,33.03-17.65,71.57-2.74494,13.575-5.24,27.82c-.28,1.62-.56,3.24-.84,4.87,0,.02-.01.05-.01.07-.43,2.5-.84,5-1.26,7.53q-1.56006,9.555-2.94,18.96-2.13,14.49-3.85,28.48-.56991,4.62-1.1,9.17-.75,6.42-1.42,12.67-.945,8.7-1.73,17.03l-.15,1.53c-.08.88-.16,1.76-.24,2.63C656.02,725.49,654.75,760.86,654.35,778.63Z" transform="translate(-262 -112)" opacity="0.2" />
                                            <path d="M731.01,749.91c.11-.06.23-.12.34-.18,2.06-1.07,4.1-2.16,6.14-3.28.67-7.98,1.57-16.75,2.75-25.97.25-1.9.5-3.83.78-5.77.13995-1.04.29-2.09.44-3.15,1.18-8.12,2.58-16.5,4.26-24.92,6.83-34.36,18.17-69.48,37-91.16,1.01-1.17,2.04-2.29,3.11005-3.38a67.66245,67.66245,0,0,1,8.61-7.55l-3.56-4.85a77.071,77.071,0,0,0-11.8,10.79q-1.875,2.085-3.66,4.34c-17.33,21.81-28.15,54.1-34.88995,86.07-1.76,8.34-3.24,16.67005-4.5,24.78q-.48,3.18-.92,6.3C733.16,725.72,731.87,738.7,731.01,749.91Z" transform="translate(-262 -112)" opacity="0.2" />
                                            <circle cx="569.73826" cy="175.98167" r="30.08857" opacity="0.2" />
                                            <circle cx="560.0486" cy="434.99083" r="30.08857" opacity="0.2" />
                                            <path d="M712.28551,338.52139c6.38046,35.99732-7.70456,68.59225-7.70456,68.59225s-24.42979-25.76825-30.81025-61.76557,7.70457-68.59225,7.70457-68.59225S705.90506,302.52407,712.28551,338.52139Z" transform="translate(-262 -112)" opacity="0.2" />
                                            <path d="M812.28234,423.97122c-34.33494,12.555-68.83676,4.498-68.83676,4.498s21.16612-28.41279,55.50106-40.96784,68.83675-4.498,68.83675-4.498S846.61728,411.41617,812.28234,423.97122Z" transform="translate(-262 -112)" opacity="0.2" />
                                            <path d="M818.10466,653.333c-24.066,8.80008-48.28314,3.0594-48.28314,3.0594s14.80161-20.00841,38.86762-28.80849,48.28314-3.0594,48.28314-3.0594S842.17067,644.53292,818.10466,653.333Z" transform="translate(-262 -112)" opacity="0.2" />
                                            <path d="M701.96,648.27l1.22.63C703.06006,650.2,702.77,651,701.96,648.27Z" transform="translate(-262 -112)" fill="#2f2e41" />
                                            <path d="M703.57007,648.69c.01.14.02991.29.03992.43l-.43006-.22c.01-.13.02-.27.04-.41C703.32007,646.74,703.19995,644.67,703.57007,648.69Z" transform="translate(-262 -112)" fill="#2f2e41" />
                                            <circle cx="311.68289" cy="324.64092" r="164.20902" fill="#2f2e41" />
                                            <circle cx="325.20044" cy="382.71266" r="99.44441" fill="#d0cde1" />
                                            <path d="M814.27,685.31l-.12.03-23.13,5.55-48.16,11.56-6.57,1.58L663.05,721.6l-6.22,1.5L479.14,765.74a333.63858,333.63858,0,0,1-35.15-15.83c-.11-.06-.23-.12-.34-.18-.65-.34-1.29-.67-1.93-1.02q-2.115-1.11-4.21-2.26-11.925-6.55507-23.24-14.02-2.91-1.905-5.76-3.87c-.61-.42-1.21-.84-1.81-1.26-.63-.44-1.26-.88-1.88-1.32q-2.475-1.755-4.92-3.55c17.26-31.37,58.36-52.22,99.46-63.63,31.02-8.62,37.84-36.95,37.25-62.16a146.9523,146.9523,0,0,0-1.46-17.18,167.47773,167.47773,0,0,0-5.96-26.74l99.45,3.32,10.26,23.64a53.49156,53.49156,0,0,0-.27,7.82c.78,19.39,12.75,31.93,27.52,40.02,1.92,1.05005,3.89,2.03,5.89,2.94,24.22,11.01,52.73,11.76,52.73,11.76a101.52,101.52,0,0,1,26.09.49q3.15.48,6.12,1.15A88.13944,88.13944,0,0,1,789.09,658.23a91.60126,91.60126,0,0,1,10.41,8.63A82.67563,82.67563,0,0,1,814.27,685.31Z" transform="translate(-262 -112)" fill="#d0cde1" />
                                            <path d="M829.19,698.42c-.42.39-.84.77-1.26,1.16a337.81887,337.81887,0,0,1-27.65,22.7q-9.675,7.155-19.86,13.59-2.235,1.425-4.5,2.8-3.93,2.4-7.93,4.69-5.22,3-10.57,5.81c-1.44.77-2.88995,1.51-4.34,2.25-2.12,1.09-4.25,2.14-6.4,3.17-.37.18-.74.36-1.11.53l-4.23-3.51,49.68-60.72,9.99-12.21s3.99,0,13.14,6.66a130.9934,130.9934,0,0,1,14.3,12.34C828.69,697.93,828.94,698.17,829.19,698.42Z" transform="translate(-262 -112)" fill="#d0cde1" />
                                            <path d="M828.49,697.74a11.39223,11.39223,0,0,1-.56,1.84,337.81887,337.81887,0,0,1-27.65,22.7,117.95015,117.95015,0,0,1-25.79,6.13s.75,3.76,1.43,10.26q-3.93,2.4-7.93,4.69-5.22,3-10.57,5.81c-1.44.77-2.88995,1.51-4.34,2.25-2.12,1.09-4.25,2.14-6.4,3.17-.37.18-.74.36-1.11.53-1.4.68-2.82,1.34-4.24,2a334.89638,334.89638,0,0,1-57.46,20.39c-.11.03-.21.05-.32.08-1.29.33-2.59.65-3.89.96-.97.24-1.95.47-2.93.69a2.48782,2.48782,0,0,1-.37.09c-2.01.47-4.02.92-6.05,1.33-1.14.24-2.28.48-3.42.71-.69.15-1.39.28-2.08.41-.87.17-1.73.33-2.6.5-.48.1-.96.18-1.45.26-1.1.2-2.2.4-3.29.59-1.86.32-3.74.63-5.61.91-1.36.21-2.71.41-4.07.6-1.6.23-3.2.44-4.81.64-.44.07-.88.12-1.32.17q-.85491.10492-1.71.21c-1.15.14-2.3.27-3.46.39-.6.07-1.19.13-1.79.19q-1.71.18-3.42.33c-1.47.13995-2.94.26-4.42.38-1.8.14-3.59.27-5.4.38-1.16.07-2.32.14-3.49.2-2.98.16-5.96.27-8.96.35-1.49.04-2.99.07-4.49.09h-.03c-1.49.02-2.99.03-4.49.03a339.151,339.151,0,0,1-45.45-3.04q-16.575-2.22-32.62-6.02c-.43-.1-.86-.2-1.28-.31-1.08-.25-2.15-.52-3.22-.79-.95-.24-1.89-.49-2.84-.74a335.35735,335.35735,0,0,1-70.6-27.19c-.11-.06-.23-.12-.34-.18-.65-.34-1.29-.67-1.93-1.02,54.89-12.79,141.63-32.96,216.9-50.24q3.165-.72,6.29-1.44c27.8-6.38,53.84-12.32,75.87006-17.29q3.42-.765,6.69995-1.5c23.67-5.32,42.05005-9.36,52.02-11.38a81.48836,81.48836,0,0,1,8.14-1.43l20.81,32.25Z" transform="translate(-262 -112)" fill="#2f2e41" />
                                            <circle cx="161.4491" cy="205.85142" r="48.91333" fill="#2f2e41" />
                                            <circle cx="461.91668" cy="191.87618" r="48.91333" fill="#2f2e41" />
                                            <path d="M671.50954,282.91333a48.91227,48.91227,0,0,1,43.67262-48.62417,48.91338,48.91338,0,1,0,0,97.24833A48.91227,48.91227,0,0,1,671.50954,282.91333Z" transform="translate(-262 -112)" fill="#2f2e41" />
                                            <path d="M368.796,357.41647a48.91227,48.91227,0,0,1-2.83554-65.296,48.91337,48.91337,0,1,0,68.06011,69.46264A48.91226,48.91226,0,0,1,368.796,357.41647Z" transform="translate(-262 -112)" fill="#2f2e41" />
                                            <path d="M573.68289,359.77712c-57.88732,0-104.81427,27.37407-104.81427,61.14166,0,15.10906,9.43269,28.91775,25.003,39.58556l20.1779-14.62031-5.48723,22.90446c2.27682,1.05513,4.60162,2.07636,7.02643,3.02019l30.1437-35.16776v43.20369a175.95757,175.95757,0,0,0,27.95047,2.21583c57.88732,0,104.81427-27.37407,104.81427-61.14166S631.57021,359.77712,573.68289,359.77712Z" transform="translate(-262 -112)" fill="#2f2e41" />
                                            <path d="M675.00335,303.87618s-7.59666,34.93809,39.87428,48.91333Z" transform="translate(-262 -112)" fill="#2f2e41" />
                                            <path d="M468.86862,310.23519s17.469,39.06051-34.93809,56.52955Z" transform="translate(-262 -112)" fill="#2f2e41" />
                                            <ellipse cx="489.41344" cy="514.60154" rx="8.28703" ry="19.88888" transform="translate(-382.60837 38.98959) rotate(-15.63946)" fill="#d0cde1" />
                                            <ellipse cx="688.30226" cy="498.02747" rx="19.88888" ry="8.28703" transform="translate(-113.09381 1042.41397) rotate(-86.47577)" fill="#d0cde1" />
                                        </svg>
                                    </button>
                                </div>
                                <!--
                          Profile dropdown panel, show/hide based on dropdown state.

                          Entering: "transition ease-out duration-100"
                            From: "transform opacity-0 scale-95"
                            To: "transform opacity-100 scale-100"
                          Leaving: "transition ease-in duration-75"
                            From: "transform opacity-100 scale-100"
                            To: "transform opacity-0 scale-95"
                        -->

                            </div>
                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden">
                        <!-- Mobile menu button -->
                        <button class="bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                            <span class="sr-only">Open main menu</span>
                            <!--
                        Heroicon name: menu

                        Menu open: "hidden", Menu closed: "block"
                      -->
                            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            <!--
                        Heroicon name: x

                        Menu open: "block", Menu closed: "hidden"
                      -->
                            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="hidden md:hidden">
                <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium">Dashboard</a>

                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>

                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>

                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a>

                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Reports</a>
                </div>
                <div class="pt-4 pb-3 border-t border-gray-700">
                    <div class="flex items-center px-5">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">

                        </div>


        </nav>
        <div class="flex flex-1">
            <div class="h-screen bg-gray-800 p-6 w-64 ">
                <ul>
                    <li>
                        <a href="{{ route('dashboard.index') }}" class="flex items-center px-4 py-2 my-3 rounded hover:bg-gray-900 hover:text-gray-400 bg-gray-900 text-gray-400 font-medium">
                            <svg class="h-4" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M19,20H5V4H7V7H17V4H19M12,2A1,1 0 0,1 13,3A1,1 0 0,1 12,4A1,1 0 0,1 11,3A1,1 0 0,1 12,2M19,2H14.82C14.4,0.84 13.3,0 12,0C10.7,0 9.6,0.84 9.18,2H5A2,2 0 0,0 3,4V20A2,2 0 0,0 5,22H19A2,2 0 0,0 21,20V4A2,2 0 0,0 19,2Z" />
                            </svg>
                            <span class="ml-2">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('produt.create')}}" class="flex items-center px-4 py-2 my-3 rounded hover:bg-gray-900 hover:text-gray-400 font-medium">
                            <svg class="h-4" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M16,15H9V13H16V15M19,11H9V9H19V11M19,7H9V5H19V7M3,5V21H19V23H3A2,2 0 0,1 1,21V5H3M21,1A2,2 0 0,1 23,3V17C23,18.11 22.11,19 21,19H7A2,2 0 0,1 5,17V3C5,1.89 5.89,1 7,1H21M7,3V17H21V3H7Z" />
                            </svg>
                            <span class="ml-2">Product</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route ('produt.index') }}"class="flex items-center px-4 py-2 my-3 rounded hover:bg-gray-900 hover:text-gray-400 font-medium">
                            <svg class="h-4" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M16 0H8C6.9 0 6 .9 6 2V18C6 19.1 6.9 20 8 20H20C21.1 20 22 19.1 22 18V6L16 0M20 18H8V2H15V7H20V18M4 4V22H20V24H4C2.9 24 2 23.1 2 22V4H4Z" />
                            </svg>
                            <span class="ml-2">Exit</span>
                        </a>
                    </li>
                    <li>
                        <a href="" class="flex items-center px-4 py-2 my-3 rounded hover:bg-gray-900 hover:text-gray-400 font-medium">
                            <svg class="h-4" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M16.5 15.5C18.22 15.5 20.25 16.3 20.5 16.78V17.5H12.5V16.78C12.75 16.3 14.78 15.5 16.5 15.5M16.5 14C14.67 14 11 14.92 11 16.75V19H22V16.75C22 14.92 18.33 14 16.5 14M9 13C6.67 13 2 14.17 2 16.5V19H9V17.5H3.5V16.5C3.5 15.87 6.29 14.34 9.82 14.5A5.12 5.12 0 0 1 11.37 13.25A12.28 12.28 0 0 0 9 13M9 6.5A1.5 1.5 0 1 1 7.5 8A1.5 1.5 0 0 1 9 6.5M9 5A3 3 0 1 0 12 8A3 3 0 0 0 9 5M16.5 8.5A1 1 0 1 1 15.5 9.5A1 1 0 0 1 16.5 8.5M16.5 7A2.5 2.5 0 1 0 19 9.5A2.5 2.5 0 0 0 16.5 7Z" />
                            </svg>
                            <span class="ml-2">Entry</span>
                        </a>
                    </li>
                    <li>
                        <a href="" class="flex items-center px-4 py-2 my-3 rounded hover:bg-gray-900 hover:text-gray-400 font-medium">
                            <svg class="h-4" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M12,3.18L19,6.3V11.22C19,12.92 18.5,14.65 17.65,16.17C16,14.94 13.26,14.5 12,14.5C10.74,14.5 8,14.94 6.35,16.17C5.5,14.65 5,12.92 5,11.22V6.3L12,3.18M12,6A3.5,3.5 0 0,0 8.5,9.5A3.5,3.5 0 0,0 12,13A3.5,3.5 0 0,0 15.5,9.5A3.5,3.5 0 0,0 12,6M12,8A1.5,1.5 0 0,1 13.5,9.5A1.5,1.5 0 0,1 12,11A1.5,1.5 0 0,1 10.5,9.5A1.5,1.5 0 0,1 12,8M12,16.5C13.57,16.5 15.64,17.11 16.53,17.84C15.29,19.38 13.7,20.55 12,21C10.3,20.55 8.71,19.38 7.47,17.84C8.37,17.11 10.43,16.5 12,16.5Z" />
                            </svg>
                            <span class="ml-2">Provider</span>
                        </a>
                    </li>
                    <li>
                        <a href="" class="flex items-center px-4 py-2 my-3 rounded hover:bg-gray-900 hover:text-gray-400 font-medium">
                            <svg class="h-4" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M12,12H19C18.47,16.11 15.72,19.78 12,20.92V12H5V6.3L12,3.19M12,1L3,5V11C3,16.55 6.84,21.73 12,23C17.16,21.73 21,16.55 21,11V5L12,1Z" />
                            </svg>
                            <span class="ml-2">Store</span>
                        </a>
                    </li>
                    <li>
                        <a href="" class="flex items-center px-4 py-2 my-3 rounded hover:bg-gray-900 hover:text-gray-400 font-medium">
                            <svg class="h-4" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M12,8A4,4 0 0,1 16,12A4,4 0 0,1 12,16A4,4 0 0,1 8,12A4,4 0 0,1 12,8M12,10A2,2 0 0,0 10,12A2,2 0 0,0 12,14A2,2 0 0,0 14,12A2,2 0 0,0 12,10M10,22C9.75,22 9.54,21.82 9.5,21.58L9.13,18.93C8.5,18.68 7.96,18.34 7.44,17.94L4.95,18.95C4.73,19.03 4.46,18.95 4.34,18.73L2.34,15.27C2.21,15.05 2.27,14.78 2.46,14.63L4.57,12.97L4.5,12L4.57,11L2.46,9.37C2.27,9.22 2.21,8.95 2.34,8.73L4.34,5.27C4.46,5.05 4.73,4.96 4.95,5.05L7.44,6.05C7.96,5.66 8.5,5.32 9.13,5.07L9.5,2.42C9.54,2.18 9.75,2 10,2H14C14.25,2 14.46,2.18 14.5,2.42L14.87,5.07C15.5,5.32 16.04,5.66 16.56,6.05L19.05,5.05C19.27,4.96 19.54,5.05 19.66,5.27L21.66,8.73C21.79,8.95 21.73,9.22 21.54,9.37L19.43,11L19.5,12L19.43,13L21.54,14.63C21.73,14.78 21.79,15.05 21.66,15.27L19.66,18.73C19.54,18.95 19.27,19.04 19.05,18.95L16.56,17.95C16.04,18.34 15.5,18.68 14.87,18.93L14.5,21.58C14.46,21.82 14.25,22 14,22H10M11.25,4L10.88,6.61C9.68,6.86 8.62,7.5 7.85,8.39L5.44,7.35L4.69,8.65L6.8,10.2C6.4,11.37 6.4,12.64 6.8,13.8L4.68,15.36L5.43,16.66L7.86,15.62C8.63,16.5 9.68,17.14 10.87,17.38L11.24,20H12.76L13.13,17.39C14.32,17.14 15.37,16.5 16.14,15.62L18.57,16.66L19.32,15.36L17.2,13.81C17.6,12.64 17.6,11.37 17.2,10.2L19.31,8.65L18.56,7.35L16.15,8.39C15.38,7.5 14.32,6.86 13.12,6.62L12.75,4H11.25Z" />
                            </svg>
                            <span class="ml-2">Sign out </span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
                {{ $slot }}
            </div>
        </div>
    </div>
    </div>

    </div>
    </div>
    <div>
    </div>




    @yield('content')

    @livewireScripts
    <script src="{{asset('assets/js/jquery-3.5.1.min') }}"></script>
</body>
</html>
