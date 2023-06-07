<x-app-layout>
  <x-slot name="header">
    <h2 class="front-semibold text-xl text-gray-800 leading-tight">
      カード検索
    </h2>
  </x-slot>
    <div class="flex item-center">
      <form action="{{ route('card_search') }}" method="GET">
        @csrf
        <input type="text" name="name" placeholder="カード名">
        <input type="text" name="category" placeholder="カテゴリー">
        <x-primary-button>
          検索
        </x-primary-button>
      </form>
      @if (Auth::check() && auth()->user()->role == 'admin') 
        <a href="{{ route('create') }}" class="ml-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
          新規作成
        </a>
      @endif
    </div>
    
</x-app-layout>