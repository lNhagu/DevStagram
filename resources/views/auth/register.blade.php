@extends('layouts.app')

@section('titulo') 
Sign up in DevStagram 
@endsection

@section('contenido')

    <div class="min-h-screen flex items-center justify-center">
        <div class="flex w-full max-w-6xl shadow-2xl rounded-2xl overflow-hidden bg-white">
            <div class="hidden lg:block lg:w-1/2 relative">
                <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3" alt="Social Network" class="w-full h-full object-cover" onerror="this.src='https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3'">
                <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/60">
                    <div class="absolute bottom-10 left-10 text-white">
                        <h2 class="text-3xl font-bold">Connect with friends</h2>
                        <p class="mt-2">Join our growing community today</p>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 px-8 py-12 lg:px-12">
                <div class="text-center mb-8">
                    <h1 class="text-3xl font-bold text-gray-800">Create Account</h1>
                    <p class="text-gray-600 mt-2">Start your journey with us</p>
                </div>
                <form action="/register" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2" for="name">
                            Name
                        </label>
                        <div class="relative">
                            <span class="absolute left-3 top-3 text-gray-400">
                                <i class="fas fa-user"></i>
                            </span>
                            <input 
                                type="text" 
                                id="name" 
                                name="name" 
                                class="pl-10 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors" 
                                placeholder="John Doe" 
                                value="{{ old('name') }}" {{-- sirve para que si hay un error en el formulario, el valor que se ingresó previamente no se pierda --}}
                                >
                            
                            @error('name')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                            
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2" for="username">
                            Username
                        </label>
                        <div class="relative">
                            <span class="absolute left-3 top-3 text-gray-400">
                                <i class="fas fa-user"></i>
                            </span>
                            <input 
                                type="text"
                                id="username"
                                name="username"
                                class="pl-10 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors" placeholder="Your Username" 
                                value="{{ old('username') }}" {{-- sirve para que si hay un error en el formulario, el valor que se ingresó previamente no se pierda --}}
                                >
                            
                            @error('username')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2" for="email">
                            Email Address
                        </label>
                        <div class="relative">
                            <span class="absolute left-3 top-3 text-gray-400">
                                <i class="fas fa-envelope"></i>
                            </span>
                            <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            placeholder="you@example.com" 
                            class="pl-10 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors" 
                            value="{{ old('email') }}"
                            >
                        
                            @error('email')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2" for="password">
                            Password
                        </label>
                        <div class="relative">
                            <span class="absolute left-3 top-3 text-gray-400">
                                <i class="fas fa-lock"></i>
                            </span>
                            <input 
                                type="password" 
                                id="password" 
                                name="password" 
                                placeholder="••••••••" 
                                class="pl-10 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors" 
                                >
                        
                            @error('password')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2" for="confirm-password">
                            Confirm Password
                        </label>
                        <div class="relative">
                            <span class="absolute left-3 top-3 text-gray-400">
                                <i class="fas fa-lock"></i>
                            </span>
                            <input 
                            type="password" 
                            id="password_confirmation" 
                            name="password_confirmation" 
                            class="pl-10 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors" 
                            placeholder="••••••••" 
                            >
                        
                        
                        </div>
                    </div>

                    <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors">
                        Create Account
                    </button>
                    
                    <p class="text-center text-gray-600">
                        Already have an account?
                        <a href="/login" class="text-blue-600 hover:text-blue-700 font-medium">Sign in</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
@endsection
