{{-- memanggil layout dari folder layouts --}}
@extends('layouts.app')

{{-- mengisi bagian title yg sudah ditandai di layout, dengan kalimat 'Home Page' --}}
{{-- tidak perlu @endsection karena hanya 1 argumen yaitu 'Home Page' --}}
@section('title', 'Home Page')

{{-- mengisi bagian content dengan Hello World --}}
{{-- perlu @endsection karena isinya banyak (lebih dari 1 elemen) --}}
@section('content')
<h1>Hello world!</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores eum sunt labore omnis commodi, quasi laboriosam ut hic qui quis, velit quo, dolor consequuntur nobis minus animi. Minima, laudantium illum?</p>
@endsection