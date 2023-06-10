<x-app-layout>
  <div class="ml-4 mt-4 mb-4">
    <x-slot name="header">
      <h2 class="front-semibold text-xl text-gray-800 leading-tight">
        カード一覧
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
  </div>

  <div class="mx-auto">
    <div class="ml-4">
      <table class="min-w-full border border-gray-300">
        <thead>
          <tr class="bg-gray-200">
            <th class="py-2 px-4 border-b">カードNo</th>
            <th class="py-2 px-4 border-b">カード名</th>
            <th class="py-2 px-4 border-b">カテゴリー</th>
            <th class="py-2 px-4 border-b">HP</th>
            <th class="py-2 px-4 border-b">弱点</th>
            <th class="py-2 px-4 border-b">抵抗力</th>
            <th class="py-2 px-4 border-b">逃げるエネルギー</th>
            <th class="py-2 px-4 border-b">効果</th>
          </tr>
        </thead>
        <tbody>
          @if(session('message'))
            <div class="text-red-600 font-bold">
              {{session('message')}}
            </div>
          @endif
          @foreach($card_contents as $card_content)
          <tr>
            <td class="py-2 px-4 border-b text-center">{{$card_content->card_no}}</td>
            <td class="py-2 px-4 border-b text-center">
              <a href="{{ route('card_contents.show', ['card_contents_id' => $card_content->card_contents_id]) }}" class="text-blue-600">
                {{$card_content->name}}
              </a>
            </td>
            <td class="py-2 px-4 border-b text-center">{{$card_content->category}}</td>
            <td class="py-2 px-4 border-b text-center">{{$card_content->hp}}</td>
            <td class="py-2 px-4 border-b text-center">{{$card_content->weakness}}</td>
            <td class="py-2 px-4 border-b text-center">{{$card_content->resistance}}</td>
            <td class="py-2 px-4 border-b text-center">{{$card_content->escape_energy}}</td>
            <td class="py-2 px-4 border-b text-center">{{$card_content->effect}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="mb-4 px-4">
        {{ $card_contents->links() }}
      </div>
    </div>
</div>

</x-app-layout>