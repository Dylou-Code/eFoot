@extends('admin.layout')

@section('content')

    <div class="flex justify-between grid grid-cols-3 gap-6 m-10 mb-10">

        <div class="container bg-white shadow-2xl rounded-2xl p-5">
            <h1 class="font-bold text-blue-700">Utilisateurs</h1>
                <h2 class="text-gray-500 font-bold text-2xl tracking-wide">{{ $userCount }}</h2>
            <a href="{{ route('admin.users.index') }} " class="rounded-lg py-2 px-4 text-center text-white bg-blue-400 hover:bg-yellow-500">Tous les utilisateurs</a>
        </div>

        <div class="container bg-white shadow-2xl rounded-2xl p-5">
            <h1 class="font-bold text-blue-700">Competition</h1>
            <h2 class="text-gray-500 font-bold text-2xl tracking-wide">{{ $competitionCount }}</h2>
            <a href="{{ route('admin.competitions.index') }} " class="rounded-lg py-2 px-4 text-center text-white bg-blue-400 hover:bg-yellow-500">Toutes les compétitions</a>
        </div>

        <div class="container bg-white shadow-2xl rounded-2xl p-5">
            <h1 class="font-bold text-blue-700">Teams</h1>
            <h2 class="text-gray-500 font-bold text-2xl tracking-wide">{{ $teamCount }}</h2>
            <a href="{{ route('admin.teams.index') }} " class="rounded-lg py-2 px-4 text-center text-white bg-blue-400 hover:bg-yellow-500">Tous les matchs</a>
        </div>

    </div>

@endsection
