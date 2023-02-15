
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>eFoot</title>
</head>
    <body>
    <div class="flex">
        <div class="w-1/5 bg-white-300 h-screen">
            <div class="flex flex-col w-64 h-screen px-4 py-8 bg-white border-r dark:bg-gray-800 dark:border-gray-600">
                <h2 class="text-3xl font-semibold text-gray-800 dark:text-white">eFoot</h2>

                <hr class="my-6 border-gray-200 dark:border-gray-600" />

                <div class="flex flex-col justify-between flex-1 mt-6">
                    <nav>
                        <div class="flex items-center px-4 py-2 text-gray-700 bg-gray-200 rounded-md dark:bg-gray-700 dark:text-gray-200" href="#">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 11H5M19 11C20.1046 11 21 11.8954 21 13V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V13C3 11.8954 3.89543 11 5 11M19 11V9C19 7.89543 18.1046 7 17 7M5 11V9C5 7.89543 5.89543 7 7 7M7 7V5C7 3.89543 7.89543 3 9 3H15C16.1046 3 17 3.89543 17 5V7M7 7H17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                            <a  href="{{ route( 'index') }}" class="mx-4 font-medium">Dashboard</a>
                        </div>

                        <div class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                            <a  href="{{ route( 'admin.users.index') }}" class="mx-4 font-medium">Utilisateurs</a>

                        </div>

                        {{--DROPDOWN
                           <div class="relative">
                            <button class="flex items-center w-full px-3 py-2 text-sm font-medium text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-lg hover:text-gray-500 focus:outline-none focus:shadow-outline">
                                Dropdown
                                <svg class="w-4 h-4 ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                            <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg">
                                <div class="rounded-md bg-white shadow-xs">
                                    <div class="py-1">
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Option 1</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Option 2</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Option 3</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        --}}

                        <div class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 5V7M15 11V13M15 17V19M5 5C3.89543 5 3 5.89543 3 7V10C4.10457 10 5 10.8954 5 12C5 13.1046 4.10457 14 3 14V17C3 18.1046 3.89543 19 5 19H19C20.1046 19 21 18.1046 21 17V14C19.8954 14 19 13.1046 19 12C19 10.8954 19.8954 10 21 10V7C21 5.89543 20.1046 5 19 5H5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                            <a  href="{{ route( 'admin.competitions.index') }}" class="mx-4 font-medium">Competition</a>
                        </div>

                        <div class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700" href="#">


                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                            </svg>


                            <a  href="{{ route( 'admin.teams.index') }}" class="mx-4 font-medium">Equipe</a>
                        </div>

                        <div class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 5V7M15 11V13M15 17V19M5 5C3.89543 5 3 5.89543 3 7V10C4.10457 10 5 10.8954 5 12C5 13.1046 4.10457 14 3 14V17C3 18.1046 3.89543 19 5 19H19C20.1046 19 21 18.1046 21 17V14C19.8954 14 19 13.1046 19 12C19 10.8954 19.8954 10 21 10V7C21 5.89543 20.1046 5 19 5H5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                            <span class="mx-4 font-medium">Match</span>
                        </div>

                        <hr class="my-6 border-gray-200 dark:border-gray-600" />

                        <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>


                            <span class="mx-4 font-medium">Match en cours</span>
                        </a>
                    </nav>

                    <div class="flex items-center px-4 -mx-2">

                        @if (Auth::check())
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();"
                               class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded">
                                {{ __('logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @else
                            <a href="{{ route('login') }}"
                               class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">
                                {{ __('login') }}
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="w-4/5 m-5">
            <div class="mx-auto p-10 bg-white w-full">
                <!-- Your CRUD elements go here -->
                <main>
                    <div class="container">
                        @yield('content')
                    </div>
                </main>
            </div>
        </div>
    </div>
  {{--  <div class="flex w-full">
        <aside class="h-screen sticky top">--}}

           {{-- <nav class=" rounded-md w-72 h-screen flex-col justify-between">
                <div class=" bg-white h-full">
                    <div class="flex  justify-center py-10 shadow-sm pr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 text-indigo-600" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                        </svg>
                        <div class="pl-2">

                            <p class="text-2xl font-bold text-indigo-600">EFOOT</h1>
                                <span class="text-xs block text-gray-800">DASHBOARD</span>
                        </div>
                    </div>
                    <div class="pl-10">
                        <ul class="space-y-8 pt-10">
                            <li class="flex space-x-4 items-center hover:text-indigo-600 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                                </svg>
                                <a href="">Competitions</a>
                            </li>
                            <li class="flex space-x-4 items-center hover:text-indigo-600 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                                <a href="">Equipes</a>
                            </li>
                            <li class="flex space-x-4 items-center hover:text-indigo-600 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                                </svg>
                                <a href="">Matchs</a>
                            </li>
                            <li class="flex space-x-4 items-center hover:text-indigo-600 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                                <a href="{{ route('admin.users.index') }}">Utilisateurs</a>
                            </li>
                            <!-- <li class="flex space-x-4 items-center hover:text-indigo-600 cursor-pointer">
                                 <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                      stroke="currentColor">
                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                           d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                                 </svg>
                                 <a href="">Schedules</a>
                             </li>
                             <li class="flex space-x-4 items-center hover:text-indigo-600 cursor-pointer">
                                 <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                      stroke="currentColor">
                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                           d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                 </svg>
                                 <a href="">Payouts</a>
                             </li>-->
                            <li class="flex space-x-4 items-center hover:text-indigo-600 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                </svg>
                                <a href="">Profil</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="bg-white flex items-center space-x-4 pl-10 pb-10 hover:text-indigo-600 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    <a href="/loguot">Deconnexion</a>
                </div>
            </nav>--}}

      {{--  </aside>


    </div>--}}




    </body>
</html>
