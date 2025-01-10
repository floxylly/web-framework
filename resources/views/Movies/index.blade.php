@extends('Layouts.index')

@section('content')
@if (session('success'))
  <div id="alert-3"
    class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 mx-20" role="alert">
    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
      viewBox="0 0 20 20">
      <path
        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
    </svg>
    <span class="sr-only">Info</span>
    <div class="ms-3 text-sm font-medium">
      {{ session('success') }}
    </div>
    <button type="button"
      class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
      data-dismiss-target="#alert-3" aria-label="Close">
      <span class="sr-only">Close</span>
      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
      </svg>
    </button>
  </div>
@endif
<section class="container my-24 mx-auto">
  <div class="flex justify-between px-20">
    <!-- Button section (already given) -->
  </div>

  <div class="grid grid-cols-2 md:grid-cols-3 gap-4 px-20">
    @forelse ($movie as $movie)
    <div class="relative">
      <a href="#">
        <img class="h-auto max-w-full rounded-lg" src="{{ $movie->poster }}" alt="{{ $movie->title }}">
      </a>
      <div class="absolute top-0 flex justify-between w-full">
        <p class="bg-white px-3 py-2 rounded-br-lg text-lg">{{ $movie->created_at->translatedFormat('d F Y') }}</p>
        <p class="bg-white px-3 py-2 rounded-bl-lg text-lg">{{ $movie->genre->name }}</p>
      </div>
      <div class="py-2">
        <h5 class="text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">{{ $movie->title }}</h5>
        <p class="font-normal text-gray-700 dark:text-gray-400">{{ Str::limit($movie->synopsis, 120) }}</p>
      </div>
      
      <!-- Button to Edit Movie -->
      <div class="flex w-full justify-end mt-5">
        <a href="{{ route('movies.edit', $movie->id) }}" 
           class="text-yellow-400 hover:text-white border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">
          Edit
        </a>
      </div>
    </div>

    <!-- Simpan di bawah button edit -->
    <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Are you sure you want to delete this book?')" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">Delete</button>
    </form>
    @empty
    <!-- No movies found section (already given) -->
    @endforelse
  </div>
</section>
@endsection
