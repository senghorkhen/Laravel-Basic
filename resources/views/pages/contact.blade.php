@extends('layouts.app')

@section('lv-content')
<div class="jumbotron mt-5">
<h1>{{$title}}</h1>
    {{-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus sint sit perferendis repellendus soluta in, facilis aliquid eligendi saepe voluptas voluptate fuga iusto omnis, tenetur atque reprehenderit rem officia voluptatibus!</p> --}}
    @if(count($infos) > 0)
      <ul class="list-group">
        @foreach ($infos as $key => $item)
      <li class="list-group-item">{{$key}} : {{$item}}</li>
        @endforeach
      </ul>
    @endif
</div>
@endsection