@extends('layout.default')

@section('content')

<div class="row pt-3">
 <div class="col-12">
  <h1 class="h3">
   Items
  </h1>
 </div>
</div>

@foreach($items as $item)
<div class="row pt-3">
 <div class="col-12">
  <div class="p2 border rounded">
   {{ $item['label'] }}
  </div>
 </div>
</div>
@endforeach

@endsection