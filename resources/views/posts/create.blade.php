@extends('layouts.app')

@section('contenido')
    <div class="w-full max-w-2xl bg-white rounded-xl shadow-lg p-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-8 text-center">Create a New Post</h1>
        <form class="space-y-6">
            <div class="space-y-2">
                <label class="block text-sm font-medium text-gray-700">Upload Image</label>
                <div class="flex items-center justify-center w-full">
                    <label class="flex flex-col w-full h-48 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer hover:bg-gray-50 transition-colors">
                        <div class="flex flex-col items-center justify-center pt-7">
                            <img src="https://images.unsplash.com/photo-1512699355324-f07e3106dae5?w=500" alt="Upload icon" class="w-12 h-12 mb-3">
                            <p class="text-sm text-gray-600">Click to upload or drag and drop</p>
                            <p class="text-xs text-gray-500 mt-1">PNG, JPG, GIF up to 10MB</p>
                        </div>
                        <input type="file" class="hidden" accept="image/*" aria-required="true">
                    </label>
                </div>
            </div>

            <div class="space-y-2">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input 
                type="text" 
                id="title" 
                name="title" 
                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors "
                placeholder="Enter the title of your post" 
                aria-required="true"
                value="{{ old('title') }}">
                
                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

            </div>

            <div class="space-y-2">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea 
                id="description" 
                name="description" 
                rows="4" 
                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors "
                placeholder="Describe your post..." 
                aria-required="true"> {{ old('description') }}</textarea>
                
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-end space-x-4">
                <button type="button" class="px-6 py-3 text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 transition-colors">Cancel</button>
                <button type="submit" class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">Create Post</button>
            </div>
        </form>
    </div>
@endsection