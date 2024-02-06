<h1>Welcome to test project</h1>

<a href={{ route('about') }}>Go to About</a>
<br>
<br>
{{ 5 + 3 }}
<br>
<br>

{{ 'First Line' }}

<br>
<br>

{!! '<h3>2nd Line</h3>' !!}
<br>
{{-- {!! "<script>alert('Welcome')</script>" !!} --}}
<br>

@php
    $sizes = ['Extra Small', 'Small', 'Medium', 'Large', 'Extra Large'];
    $user = 'Mr Colon Three';
@endphp

{{ $user }}
<br>
{{-- Loop variables for foreach --}}
@foreach ($sizes as $size)
    @if ($loop->even)
        <li style="color: blue;">{{ $size }}</li>
    @elseif ($loop->odd)
        <li style="color: brown">{{ $size }}</li>
    @endif
    {{-- <li>{{ $loop->iteration }}. {{ $size }}</li> --}}
@endforeach
