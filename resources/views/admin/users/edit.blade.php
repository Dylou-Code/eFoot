@extends('admin.layout')
@section('content')

<div class="w-full px-8 md:px-32 lg:px-24">

    <form class="bg-white rounded-md shadow-2xl p-5" action="{{ route('admin.users.update', $user) }}" method="Post">
        @csrf
        @method('PUT')
        <h1 class="text-gray-800 font-bold text-2xl mb-1">Modifier</h1>
        <p class="text-sm font-normal text-gray-600 mb-8">Welcome Back</p>
        <label for="name">name</label>
        <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl">
            <input id="name" class=" pl-2 w-full outline-none border-none" type="text" name="name" value="{{$user->name}}" />
        </div>
        <label for="email">Email</label>
        <div class="flex items-center border-2 mb-12 py-2 px-3 rounded-2xl ">
            <input class="pl-2 w-full outline-none border-none" type="email" name="email" value="{{$user->email}}" />
        </div>

        <label for="roles">Role : </label>

       {{-- <select name="role" id="role">
            @foreach($roles as $role)
                <option value={{ $role->id }}> {{ $role->name }}</option>
            @endforeach
        </select>--}}

        @foreach ($roles as $role)
            <input type="checkbox" name="roles[]" id="roles_{{ $role->id }}" value="{{ $role->id }}" {{ in_array($role->id, old('roles', $user->roles()->pluck('id')->toArray())) ? 'checked' : '' }}>
            <label for="team_{{ $role->id }}">{{ $role->name }}</label><br>
        @endforeach
        <button type="submit" class="block w-96 bg-indigo-600 mt-5 py-2 rounded-2xl hover:bg-indigo-700 hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2">Enregistrer les Modifications</button>
       {{-- <div class="flex justify-between mt-4">
            <span class="text-sm ml-2 hover:text-blue-500 cursor-pointer hover:-translate-y-1 duration-500 transition-all">Forgot Password ?</span>

            <a href="#" class="text-sm ml-2 hover:text-blue-500 cursor-pointer hover:-translate-y-1 duration-500 transition-all">Don't have an account yet?</a>
        </div>--}}

            {{--<input class="pl-2 w-full outline-none border-none" type="password" name="password" id="password"--}}

    </form>
</div>
@endsection
