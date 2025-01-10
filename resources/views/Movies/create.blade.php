@extends('Layouts.index')

@section('content')
<section class="container my-24 mx-auto">
  <form action="{{ route('movie.store') }}" method="POST"
    class="max-w-4xl mx-auto bg-blue-50 rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 p-5">
    @csrf
    <!-- Tambahkan CSRF Token untuk keamanan -->

    <!-- Title -->
    <div class="relative z-0 w-full mb-5 group">
      <input type="text" name="title" id="title" value="{{ old('title') }}"
        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
        placeholder=" " required />
      <label for="title"
        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Title</label>
      @error('title')
      <!-- Tampilkan error validasi -->
      <span class="text-red-500 text-sm">{{ $message }}</span>
      @enderror
    </div>

    <div class="grid md:grid-cols-2 md:gap-6">
      <!-- Genre -->
      <div class="relative z-0 w-full mb-5 group">
        <select name="genre" id="genre"
          class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
          required>
          <option value="" disabled {{ old('genre') ? '' : 'selected' }}>Pilih genre</option>
          @foreach($genre as $genre)
          <option value="{{ $genre->id }}" {{ old('genre') == $genre->id ? 'selected' : '' }}>
            {{ $genre->name }}
          </option>
          @endforeach
        </select>
        <label for="genre"
          class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 peer-focus:dark:text-blue-500">Genre</label>
        @error('genre')
        <!-- Tampilkan error validasi -->
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
      </div>

      <!-- Year -->
      <div class="relative z-0 w-full mb-5 group">
        <input type="number" name="year" id="year" value="{{ old('year') }}" min="0"
          class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
          placeholder=" " required />
        <label for="year"
          class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 peer-focus:dark:text-blue-500">Year</label>
        @error('year')
        <!-- Tampilkan error validasi -->
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
      </div>
    </div>

    <!-- Synopsis -->
    <div class="relative z-0 w-full mb-5 group">
      <textarea name="synopsis" id="synopsis" rows="4"
        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
        placeholder=" " required>{{ old('synopsis') }}</textarea>
      <label for="synopsis"
        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 peer-focus:dark:text-blue-500">Synopsis</label>
      @error('synopsis')
      <!-- Tampilkan error validasi -->
      <span class="text-red-500 text-sm">{{ $message }}</span>
      @enderror
    </div>

    <!-- Submit Button -->
    <button type="submit"
      class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
  </form>
</section>
@endsection
