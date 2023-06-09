<x-app-layout>
  <x-slot name="header">
    <h2 class="front-semibold text-xl text-gray-800 leading-tight">
      カード個別表示
    </h2>
  </x-slot>

  <div class="max-w-7xl max-auto px-6">
      <div class="mt-8">
        <div class="bg-white w-full rounded-2xl">
          <div class="mt-4 p-4">
            <h1 class="text-lg font-semibold">
              カードNo
            </h1>
            <p>
              {{ $card_content->card_no }}
            </p>
          </div>
        </div>
      </div>
      <div class="mt-8">
        <div class="bg-white w-full rounded-2xl">
          <div class="mt-4 p-4">
            <h1 class="text-lg font-semibold">
              カード名
            </h1>
            <p>
              {{ $card_content->name }}
            </p>
          </div>
        </div>
      </div>
      <div class="mt-8">
        <div class="bg-white w-full rounded-2xl">
          <div class="mt-4 p-4">
            <h1 class="text-lg font-semibold">
              カテゴリー
            </h1>
            <p>
              {{ $card_content->category }}
            </p>
          </div>
        </div>
      </div>
      <div class="mt-8">
        <div class="bg-white w-full rounded-2xl">
          <div class="mt-4 p-4">
            <h1 class="text-lg font-semibold">
              HP
            </h1>
            <p>
              {{ $card_content->hp }}
            </p>
          </div>
        </div>
      </div>
      <div class="mt-8">
        <div class="bg-white w-full rounded-2xl">
          <div class="mt-4 p-4">
            <h1 class="text-lg font-semibold">
              弱点
            </h1>
            <p>
              {{ $card_content->weakness }}
            </p>
          </div>
        </div>
      </div>
      <div class="mt-8">
        <div class="bg-white w-full rounded-2xl">
          <div class="mt-4 p-4">
            <h1 class="text-lg font-semibold">
              抵抗力
            </h1>
            <p>
              {{ $card_content->resistance }}
            </p>
          </div>
        </div>
      </div>
      <div class="mt-8">
        <div class="bg-white w-full rounded-2xl">
          <div class="mt-4 p-4">
            <h1 class="text-lg font-semibold">
              逃げるエネルギー
            </h1>
            <p>
              {{ $card_content->escape_energy }}
            </p>
          </div>
        </div>
      </div>
      <div class="mt-8">
        <div class="bg-white w-full rounded-2xl">
          <div class="mt-4 p-4">
            <h1 class="text-lg font-semibold">
              効果
            </h1>
            <p>
              {{ $card_content->effect }}
            </p>
          </div>
        </div>
      </div>

      @if (Auth::check() && auth()->user()->role == 'admin') 
        <div class="mt-4 text-right">
          <a href="{{route('card_contents.edit', $card_content)}}">
            <x-primary-button>
              編集
            </x-primary-button>
          </a>
        </div>
      @endif

  </div>
</x-app-layout>