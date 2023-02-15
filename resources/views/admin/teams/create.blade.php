@extends('admin.layout')
@section('content')
    <div class="w-full px-8 md:px-32 lg:px-24">



        <form class="bg-white rounded-md shadow-2xl p-5" action="{{ route( 'admin.teams.store') }}" method="Post" enctype="multipart/form-data">
            @csrf

            <h1 class="text-gray-800 font-bold text-2xl mb-1">Créer une équipe</h1>

            <label for="name">Nom</label>
            <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl">
                <input id="name" class=" pl-2 w-full outline-none border-none" type="text" name="name" placeholder="Nom" />
            </div>

            <label for="image">Image</label>
            <div class="flex items-center border-2 mb-12 py-2 px-3 rounded-2xl ">
                <input class="pl-2 w-full outline-none border-none" type="file" name="image"  />
            </div>


            {{--<label for="competition">Compétition(s) : </label>

            <select name="competition" id="competition">
                @foreach($competitions as $competition)
                    <option value=" {{ $competition->id }}"> {{ $competition->name }}</option>
                @endforeach
            </select>--}}



            {{--<fieldset>
                <legend>Compétition(s)</legend>
                @foreach($competitions as $competition)
                <div>
                    <input type="checkbox" id="coding" name="interest" value="{{ $competition->id }}"  />
                    <label for="coding">{{ $competition->name }}</label>
                </div>
                @endforeach
            </fieldset>--}}
            @foreach($competitions as $competition)
                <input type="checkbox" id="competitions" name="competitions[]" value="{{ $competition->id }}"  />
                <label for="coding">{{ $competition->name }}</label>
            @endforeach

            <br>

            <label for="name">Classement</label>
            <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl">
                <input id="position" class=" pl-2 w-full outline-none border-none" type="number" name="competition_position" placeholder="Position" />
            </div>


            <button type="submit" class="block w-96 bg-indigo-600 mt-5 py-2 rounded-2xl hover:bg-indigo-700 hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2">Créer l'equipe</button>
            {{-- <div class="flex justify-between mt-4">
                 <span class="text-sm ml-2 hover:text-blue-500 cursor-pointer hover:-translate-y-1 duration-500 transition-all">Forgot Password ?</span>

                 <a href="#" class="text-sm ml-2 hover:text-blue-500 cursor-pointer hover:-translate-y-1 duration-500 transition-all">Don't have an account yet?</a>
             </div>--}}

            {{--<input class="pl-2 w-full outline-none border-none" type="password" name="password" id="password"--}}

        </form>
    </div>
@endsection

