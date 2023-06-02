<x-app-layout>
  <x-slot name="header">
    <h2 class="front-semibold text-xl text-gray-800 leading-tight">
      カード検索
    </h2>
  </x-slot>
    <form action="{{ route('card_search') }}" method="GET">
      @csrf
      <input type="text" name="name" placeholder="カード名">
      <input type="text" name="category" placeholder="カテゴリー">
      <x-primary-button>
        検索
      </x-primary-button>
    </form>
</x-app-layout>