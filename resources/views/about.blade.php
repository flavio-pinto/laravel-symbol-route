@extends('layouts.main')

@section('title')
    About
@endsection

@section('content')
    <ul class="lista-merce">
        @foreach($cosa_vendiamo as $item)
        <li>
            @if($loop->first)
                {{$item . '- Certificazioni di qualità ISO 666'}};
            @elseif($loop->last)
                {{$item . '- Qualità pessima'}};
            @else {{$item}};
            @endif
        </li>
        @endforeach

        <div class="lorem-container">
            @php
            $counter = 0;
            @endphp
            @for ($i = 0; $i < 15; $i++)
                @php
                    $counter++;
                @endphp
                <p><strong>{{$counter}} -</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi magni corrupti aspernatur aliquam delectus amet aut sint sed sit sequi asperiores odit, beatae quas culpa perferendis harum! Placeat, nam nostrum?</p>
            @endfor
        </div>
    </ul>
@endsection