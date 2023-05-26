<x-app-layout>
  <x-slot name="header">
    <h2 class="front-semibold text-xl text-gray-800 leading-tight">
      カード一覧表示
    </h2>
  </x-slot>

  <div class="mx-auto px-6">
    <table class="table-auto border-spacing-1">
      <thead>
        <tr>
          <th>カードNo</th>
          <th>カード名</th>
          <th>カテゴリー</th>
          <th>HP</th>
          <th>弱点</th>
          <th>抵抗力</th>
          <th>逃げるエネルギー</th>
          <th>効果</th>
        </tr>
      </thead>
      @foreach($card_contents as $card_content)
      <tbody>
        <tr>
          <td>{{$card_content->card_no}}</td>
          <td>{{$card_content->name}}</td>
          <td>{{$card_content->category}}</td>
          <td>{{$card_content->hp}}</td>
          <td>{{$card_content->weakness}}</td>
          <td>{{$card_content->resistance}}</td>
          <td>{{$card_content->escape_energy}}</td>
          <td>{{$card_content->effect}}</td>
        </tr>
      </tbody>
      @endforeach
    </table>
  </div>
</x-app-layout>