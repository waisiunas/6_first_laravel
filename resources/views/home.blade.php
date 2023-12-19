Home page

{{-- {{ dd($student_names) }} --}}
{{-- @dd($student_names) --}}
{{-- @dump($names) --}}

@if (count($names) > 0)
    <ul>
        @foreach ($names as $name)
            <li>{{ $name }}</li>
        @endforeach
    </ul>
@else
    <div>No record found!</div>
@endif

{{-- <a href="{{ url('about') }}">About Us</a> --}}
<a href="{{ route('about') }}">About Us</a>

{{-- {{ 'Hi from Laravel Blade' }} --}}
