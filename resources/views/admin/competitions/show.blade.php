@extends('admin.layout')

@section('content')

    <h2>Nombre équipe</h2>
    <h2>Classement de A-Z</h2>
{{--@foreach($competition as $competitions)
    <h2>Nom championnat : {{$competition->name}}</h2>
@endforeach--}}



    <form action="{{ route('admin.competitions.index') }}" method="post">
        @csrf
        <select name="direction">
            <option value="asc">Ordre croissant</option>
            <option value="desc">Ordre décroissant</option>
        </select>
        <button class="bg-grey-light bg-blue-600 text-white font-bold py-2 px-4 rounded inline-flex items-center" type="submit">Filtrer</button>
    </form>

    <div class="flex flex-col">
        <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full">
                        <thead class="bg-white border-b">
                        <tr>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                #
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Equipe
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                truc
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Handle
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($competitions->teams as $team)
                            <tr class="bg-gray-100 border-b">

                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $team->competition_position }}</td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{ $team->name }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{ $team->name }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    @mdo
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
