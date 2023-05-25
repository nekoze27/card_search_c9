<x-app-layout>
  <x-slot name="header">
    <h2 class="front-semibold text-xl text-gray-800 leading-tight">
      ポケカ
    </h2>
  </x-slot>

  <div class="mt-8">
    <form>
      <div class="mt-8">
        <div class="w-full flex flex-col">
          <label for="title" class="font-semibold mt-4">カードNo</label>
          <input type="text" name="title" class="w-auto py-2 border border-gray-300 rounded-md" id="title">
        </div>
      </div>
      <div class="mt-8">
        <div class="w-full flex flex-col">
          <label for="title" class="font-semibold mt-4">カード名</label>
          <input type="text" name="title" class="w-auto py-2 border border-gray-300 rounded-md" id="title">
        </div>
      </div>
      <div class="mt-8">
        <div class="w-full flex flex-col">
          <label for="title" class="font-semibold mt-4">カテゴリー</label>
          <input type="text" name="title" class="w-auto py-2 border border-gray-300 rounded-md" id="title">
        </div>
      </div>
      <div class="mt-8">
        <div class="w-full flex flex-col">
          <label for="title" class="font-semibold mt-4">HP</label>
          <input type="text" name="title" class="w-auto py-2 border border-gray-300 rounded-md" id="title">
        </div>
      </div>
      <div class="mt-8">
        <div class="w-full flex flex-col">
          <label for="title" class="font-semibold mt-4">弱点</label>
          <input type="text" name="title" class="w-auto py-2 border border-gray-300 rounded-md" id="title">
        </div>
      </div>
      <div class="mt-8">
        <div class="w-full flex flex-col">
          <label for="title" class="font-semibold mt-4">抵抗力</label>
          <input type="text" name="title" class="w-auto py-2 border border-gray-300 rounded-md" id="title">
        </div>
      </div>
      <div class="mt-8">
        <div class="w-full flex flex-col">
          <label for="title" class="font-semibold mt-4">逃げるエネルギー</label>
          <input type="text" name="title" class="w-auto py-2 border border-gray-300 rounded-md" id="title">
        </div>
      </div>
      <div class="mt-8">
        <div class="w-full flex flex-col">
          <label for="title" class="font-semibold mt-4">効果</label>
          <input type="text" name="title" class="w-auto py-2 border border-gray-300 rounded-md" id="title">
        </div>
      </div>
      
      <x-primary-button class="mt-4">
        登録する
      </x-primary-button>
    </form>
  </div>
</x-app-layout>