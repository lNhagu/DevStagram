@extends('layouts.app')

@section('titulo')
Dashboard
@endsection

@section('contenido')
<div class="grid grid-cols-3 gap-4">
    <div class="col-span-2 bg-white p-5 shadow">
        <h2 class="font-bold text-2xl mb-3">Hi, {{ auth()->user()->username}}, estas son tus publicaciones</h2>
        <div class="grid grid-cols-3 gap-4">
            <div class="bg-gray-200 p-5">
                <h3 class="font-bold text-xl">Publicación 1</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
            </div>
            <div class="bg-gray-200 p-5">
                <h3 class="font-bold text-xl">Publicación 2</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
            </div>
            <div class="bg-gray-200 p-5">
                <h3 class="font-bold text-xl">Publicación 3</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
            </div>
        </div>
    </div>
    <div class="bg-white p-5 shadow">
        <h2 class="font-bold text-2xl mb-3">Actividad reciente</h2>
        <ul>
            <li class="mb-3">
                <span class="font-bold">Juan</span> ha comentado en la publicación <span class="font-bold">Publicación 1</span>
            </li>
            <li class="mb-3">
                <span class="font-bold">Pedro</span> ha dado like en la publicación <span class="font-bold">Publicación 2</span>
            </li>
            <li class="mb-3">
                <span class="font-bold">Maria</span> ha comentado en la publicación <span class="font-bold">Publicación 3</span>
            </li>
        </ul>
    </div>
@endsection