@extends('layouts.app')

@section('titulo')
Dashboard
@endsection

@section('contenido')
    {{-- <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 md:flex">
            <div class="md:w-8/12 lg:w-6/12 px-5">
                <img src="{{asset('img/usuario.svg')}}" alt="imagen_usuario">
            </div>
            <div class="w-full md:w-8/12 lg:w-6/12 px-5 md:flex md:flex-auto md:justify-center">
                <p class="text-gray-700 text-2xl w-full">{{$user->username}}</p>
            </div>

            <!-- Stats -->
            <div class="flex justify-around mt-6 border-t border-gray-200 pt-4">
                <div class="text-center">
                    <span class="text-xl font-bold">50</span>
                    <p class="text-gray-500">Posts</p>
                </div>
                <div class="text-center">
                    <span class="text-xl font-bold">1.2k</span>
                    <p class="text-gray-500">Followers</p>
                </div>
                <div class="text-center">
                    <span class="text-xl font-bold">300</span>
                    <p class="text-gray-500">Following</p>
                </div>
            </div>
        </div>

    </div> --}}

    <div class="max-w-4xl mx-auto p-4 bg-white shadow-md rounded-lg">
        <!-- Header -->
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <img 
                    src="{{asset('img/usuario.svg')}}" 
                    alt="Profile Picture" 
                    class="w-24 h-24 rounded-full border border-gray-300"
                >
                <div class="ml-6">
                    <h1 class="text-2xl font-semibold">{{$user->username}}</h1>
                    <p class="text-gray-500">User bio or description goes here.</p>
                </div>
            </div>
            <button class="py-2 px-4 bg-blue-500 text-white rounded-lg shadow hover:bg-blue-600">Follow</button>
        </div>

        <!-- Stats -->
        <div class="flex justify-around mt-6 border-t border-gray-200 pt-4">
            <div class="text-center">
                <span class="text-xl font-bold">0</span>
                <p class="text-gray-500">Posts</p>
            </div>
            <div class="text-center">
                <span class="text-xl font-bold">0</span>
                <p class="text-gray-500">Followers</p>
            </div>
            <div class="text-center">
                <span class="text-xl font-bold">0</span>
                <p class="text-gray-500">Following</p>
            </div>
        </div>

        <!-- Gallery -->
        <div class="grid grid-cols-3 gap-2 mt-6">
            <img src="https://via.placeholder.com/150" alt="Post 1" class="w-full h-32 object-cover rounded-lg">
            <img src="https://via.placeholder.com/150" alt="Post 2" class="w-full h-32 object-cover rounded-lg">
            <img src="https://via.placeholder.com/150" alt="Post 3" class="w-full h-32 object-cover rounded-lg">
            <img src="https://via.placeholder.com/150" alt="Post 4" class="w-full h-32 object-cover rounded-lg">
            <img src="https://via.placeholder.com/150" alt="Post 5" class="w-full h-32 object-cover rounded-lg">
            <img src="https://via.placeholder.com/150" alt="Post 6" class="w-full h-32 object-cover rounded-lg">
        </div>
    </div>
@endsection