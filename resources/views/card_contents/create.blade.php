<x-app-layout>
  <x-slot name="header">
    <h2 class="front-semibold text-xl text-gray-800 leading-tight">
      ポケカ
    </h2>
  </x-slot>

  <div class="max-w-7xl max-auto px-6">
    @if (session('message'))
      <div class="text-red-600 font-bold">
        {{session('message')}}  
      </div>
    @endif
    <form method="post" action="{{ route('card_contents.store')}}">
    @csrf
      <div class="mt-8">
        <div class="w-full flex flex-col">
          <label for="card_no" class="font-semibold mt-4">カードNo</label>
          <x-input-error :messages="$errors->get('card_no')" class="mt-2" />
          <input type="text" name="card_no" class="w-auto py-2 border border-gray-300 rounded-md" id="card_no" value="{{old('card_no')}}">
        </div>
      </div>
      <div class="mt-8">
        <div class="w-full flex flex-col">
          <label for="name" class="font-semibold mt-4">カード名</label>
          <x-input-error :messages="$errors->get('name')" class="mt-2" />
          <input type="text" name="name" class="w-auto py-2 border border-gray-300 rounded-md" id="name" value="{{old('name')}}">
        </div>
      </div>
      <div class="mt-8">
        <div class="w-full flex flex-col">
          <label for="category" class="font-semibold mt-4">カテゴリー</label>
          <x-input-error :messages="$errors->get('category')" class="mt-2" />
          <input type="text" name="category" class="w-auto py-2 border border-gray-300 rounded-md" id="category" value="{{old('categpry')}}">
        </div>
      </div>
      <div class="mt-8">
        <div class="w-full flex flex-col">
          <label for="hp" class="font-semibold mt-4">HP</label>
          <x-input-error :messages="$errors->get('hp')" class="mt-2" />
          <input type="text" name="hp" class="w-auto py-2 border border-gray-300 rounded-md" id="hp" value="{{old('hp')}}">
        </div>
      </div>
      <div class="mt-8">
        <div class="w-full flex flex-col">
          <label for="weakness" class="font-semibold mt-4">弱点</label>
          <x-input-error :messages="$errors->get('weakness')" class="mt-2" />
          <input type="text" name="weakness" class="w-auto py-2 border border-gray-300 rounded-md" id="weakness" value="{{old('weakness')}}">
        </div>
      </div>
      <div class="mt-8">
        <div class="w-full flex flex-col">
          <label for="resistance" class="font-semibold mt-4">抵抗力</label>
          <x-input-error :messages="$errors->get('resistance')" class="mt-2" />
          <input type="text" name="resistance" class="w-auto py-2 border border-gray-300 rounded-md" id="resistance" value="{{old('resistance')}}">
        </div>
      </div>
      <div class="mt-8">
        <div class="w-full flex flex-col">
          <label for="escape_energy" class="font-semibold mt-4">逃げるエネルギー</label>
          <x-input-error :messages="$errors->get('escape_energy')" class="mt-2" />
          <input type="text" name="escape_energy" class="w-auto py-2 border border-gray-300 rounded-md" id="escape_energy" value="{{old('escape_energy')}}">
        </div>
      </div>
      <div class="mt-8">
        <div class="w-full flex flex-col">
          <label for="effect" class="font-semibold mt-4">効果</label>
          <x-input-error :messages="$errors->get('effect')" class="mt-2" />
          <input type="text" name="effect" class="w-auto py-2 border border-gray-300 rounded-md" id="effect" value="{{old('effect')}}">
        </div>
      </div>

      <x-primary-button class="mt-4">
        登録する
      </x-primary-button>
    </form>
  </div>
</x-app-layout>