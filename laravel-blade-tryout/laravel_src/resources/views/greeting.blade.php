<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

    </head>
    <body class="antialiased">
        <div>Hello, {{ $name }}</div>
        <div>Hello, {!! $name !!}.</div>
        <div>The current UNIX timestamp is {{ time() }}.</div>

        <div>
            <h1>Laravel</h1>
            Hello, @{{ name }}.
        </div>

            @if ($records === 1)
                'I have one record!'
            @elseif ($records > 1)
                'I have multiple records!'
            @else
                "I don't have any records!"
            @endif


        <div>
            @unless (Auth::check())
                You are not signed in.
            @endunless
        </div>

        <div>
            @isset($records)
                // $records is defined and is not null...
            @endisset

            @empty($records)
                // $records is "empty"...
            @endempty
        </div>


        <div>
            @auth
                // The user is authenticated...
            @endauth

            @guest
                // The user is not authenticated...
            @endguest
        </div>

        <div>
            {{--

            @auth('admin')
                // The user is authenticated...
            @endauth

            @guest('admin')
                // The user is not authenticated...
            @endguest
            --}}
        </div>

        <div>
            @production
                // Production specific content...
            @endproduction

            @env('staging')
                // The application is running in "staging"...
            @endenv

            @env(['staging', 'production'])
                // The application is running in "staging" or "production"...
            @endenv
        </div>

        <div>
            @hasSection('navigation')
                <div class="pull-right">
                    @yield('navigation')
                </div>

                <div class="clearfix"></div>
            @endif

            @sectionMissing('navigation')
                <div class="pull-right">
                    {{-- @include('default-navigation') --}}
                    no navigation
                </div>
            @endif
        </div>

        <div>
            @switch($i)
                @case(1)
                    First case...
                    @break

                @case(2)
                    Second case...
                    @break

                @default
                    Default case...
            @endswitch
        </div>

        <div>
            @for ($i = 0; $i < 10; $i++)
                The current value is {{ $i }}
            @endfor


            <p>This is user {{ var_dump($users) }}</p>

            @foreach ($users as $user)
                <p>This is user {{ var_dump($user->id) }}</p>
            @endforeach


                @forelse ($users as $user)
                    <li>{{ $user->name }}</li>
                @empty
                    <p>No users</p>
                @endforelse

            {{--
                @while (true)
                    <p>I'm looping forever.</p>
                @endwhile
            --}}
        </div>

        <div>
            @foreach ($users as $user)
                @if ($user->type == 1)
                    @continue
                @endif

                <li>{{ $user->name }}</li>

                @if ($user->number == 5)
                    @break
                @endif
            @endforeach
        </div>

        <div>
            @php
                $isActive = true;
                $hasError = true;
            @endphp

            <span @class(['font-bold' => $isActive ])>apple</span>

            <span style="">helloworld</span>

        </div>

        <div>
            @include('common', ['status' => 'complete'])
        </div>

        <script>
            var app = <?php echo json_encode([1,2,3,4,5]); ?>;
        </script>
    </body>
</html>
