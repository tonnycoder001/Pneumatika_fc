@extends('layouts.index')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 gap-4 px-4 py-8 text-black">
    <template x-for="player in players" :key="player.name">
      <div class="flex flex-col bg-gray-100 rounded-lg shadow-md overflow-hidden">
        <img class="h-48 w-full object-cover" :src="player.photoUrl" alt="Player Photo">
        <div class="flex flex-col p-4">
          <h3 class="text-xl font-bold text-gray-800"></h3>
          <p class="text-gray-600 text-sm mb-2">
            <span class="font-medium text-black">Position:</span>
            <span class="mx-2">|</span>
            <span class="font-medium">Jersey #:</span>
          </p>
          <template x-if="player.age">
            <p class="text-gray-600 text-sm mb-2">
              <span class="font-medium">Age:</span>
            </p>
          </template>
          <template x-if="player.bio">
            <p class="text-gray-600 text-sm mb-2"></p>
          </template>
          <div class="flex space-x-2 mt-auto">
            <template x-if="player.socialMedia.twitter">
              <a :href="player.socialMedia.twitter" target="_blank" class="text-blue-500 hover:text-blue-700">
                <i class="fab fa-twitter"></i>
              </a>
            </template>
            <template x-if="player.socialMedia.instagram">
              <a :href="player.socialMedia.instagram" target="_blank" class="text-red-500 hover:text-red-700">
                <i class="fab fa-instagram"></i>
              </a>
            </template>
            </div>
        </div>
      </div>
    </template>
  </div>
  @endsection
