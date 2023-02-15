@extends('admin.layout')
@section('content')

    <div class="w-full px-8 md:px-32 lg:px-24">

        <form class="bg-white rounded-md shadow-2xl p-5" action="{{ route( 'admin.competitions.update', $team) }}" method="Post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h1 class="text-gray-800 font-bold text-2xl mb-1">Modifier</h1>

            <label for="name">Nom</label>
            <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl">
                <input id="name" class=" pl-2 w-full outline-none border-none" type="text" name="name" value="{{$team->name}}" />
            </div>

            <label for="competitions">Championnat(s) :</label>

            @foreach ($competitions as $competition)
                <input type="checkbox" name="competitions[]" id="competitions_{{ $competition->id }}" value="{{ $competition->id }}" {{ in_array($competition->id, old('competitions', $team->competitions()->pluck('id')->toArray())) ? 'checked' : '' }}>
                <label for="team_{{ $competition->id }}">{{ $competition->name }}</label><br>
            @endforeach

            <br>





            <label for="email">Image</label>
            <br>


            {{--<div class="flex items-center border-2 mb-12 py-2 px-3 rounded-2xl ">
               --}}{{-- <input class="pl-2 w-full outline-none border-none" type="email" name="email" value="{{ asset('storage/' . $competition->image) }}" />--}}{{--
                <img src="{{ asset('storage/' . $competition->image) }}">
            </div>--}}

            <img class="relative inline-block h-28 w-20 object-cover object-center" alt="Image placeholder" src="{{ asset('storage/' . $competition->image) }}">
            <div class="flex items-center border-2 mb-12 py-2 px-3 rounded-2xl ">
                <input class="pl-2 w-full outline-none border-none" type="file" name="image"  />
            </div>
            <label for="name">Classement</label>
            <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl">
                <input id="position" class=" pl-2 w-full outline-none border-none" type="number" name="competition_position" value="{{$competition->competition_position}}"/>
            </div>
            <button type="submit" class="block w-96 bg-indigo-600 mt-5 py-2 rounded-2xl hover:bg-indigo-700 hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2">Enregistrer les Modifications</button>
            {{-- <div class="flex justify-between mt-4">
                 <span class="text-sm ml-2 hover:text-blue-500 cursor-pointer hover:-translate-y-1 duration-500 transition-all">Forgot Password ?</span>

                 <a href="#" class="text-sm ml-2 hover:text-blue-500 cursor-pointer hover:-translate-y-1 duration-500 transition-all">Don't have an account yet?</a>
             </div>--}}

            {{--<input class="pl-2 w-full outline-none border-none" type="password" name="password" id="password"--}}

        </form>
    </div>
@endsection
