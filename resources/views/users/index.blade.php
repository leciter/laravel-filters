<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        <div class="container">
            <div style="column-count:3; column-gap: 40px;">
                @foreach($users as $user)
                    <ul style="border-radius: 5px; border: 2px solid; border-color: #d9d9d9; font-family: tahoma; color: #4f4f4f; display: block; background: #dddddd; margin: 5px; padding: 5px 30px; word-wrap: break-word; text-shadow: -1px 0 #cccccc, 0 1px #cccccc, 1px 0 #cccccc, 0 -1px #cccccc;" onmouseover="this.style.backgroundColor='#aaaaaa';" onmouseout="this.style.backgroundColor='#dddddd';">
                        <li>{{ $user->name }}{{ $user->is_active ? ', active' : '' }}{{ ($user->gender-1) ? ', man' : ', women' }}</li>
                        <li>{{ $user->email }}</li>
                    </ul>
                @endforeach
            </div>
        </div>
    </body>
</html>
