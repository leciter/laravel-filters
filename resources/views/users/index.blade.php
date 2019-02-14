<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Laravel</title>

        <!-- Fonts -->
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="../../public/css/app.css">
    </head>
    <script></script>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                <br>
                    <form action="/users">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="name" 
                                value="{{ request()->name }}">
                        </div>
                        <!-- <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" {{ request()->email }}>
                        </div> -->
                        <div class="form-group">
                            <input type="text" class="form-control" id="birthday" name="birthday" placeholder="birthday" 
                                value="{{ request()->birthday }}">
                        </div>
                        <div class="form-group form-radio">
                            <label class="form-label" for="is_active">Active:</label>
                            
                                <input type="radio" class="form-radio-input" id="all_actives" name="is_active" value="0" 
                                    {{ request()->is_active == 0 ? 'checked' : '' }}>
                                    <label class="form-check-label" for="is_not_active">Any</label>
                            
                                <input type="radio" class="form-radio-input" id="is_active" name="is_active" value="1" 
                                    {{ request()->is_active == 1 ? 'checked' : '' }}>
                                    <label class="form-radio-label" for="is_active">Yes</label>
                            
                                <input type="radio" class="form-radio-input" id="is_not_active" name="is_active" value="2" 
                                    {{ request()->is_active == 2 ? 'checked' : '' }}>
                                    <label class="form-check-label" for="is_not_active">No</label>
                        </div>
                        <div class="form-group form-select">
                            <label class="form-label" for="is_gender">Gender: </label>
                                <select name="gender">
                                    <option class="form-select" id="gender1" value="0" 
                                        {{ request()->gender == 0 ? 'selected' : '' }}>All</option>
                                    <option class="form-select" id="gender1" value="1" 
                                        {{ request()->gender == 1 ? 'selected' : '' }}>Man</option>
                                    <option class="form-select" id="gender2"  value="2" 
                                        {{ request()->gender == 2 ? 'selected' : '' }}>Women</option>
                                </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Apply</button>
                    </form>
                </div>
                <div class="col-sm">
                <!-- col2 -->
                </div>
                <div class="col-sm">
                <!-- col3 -->
                </div>
                <div class="col-sm">
                <!-- col4 -->
                </div>
            </div>
        </div>
        <div class="container">
            <h3 class="found" 
            onmouseover="this.style.backgroundColor='#eeeeee'; this.style.color='green';" onmouseout="this.style.backgroundColor='#dddddd'; this.style.color='#4f4f4f';">Found: {{ count($users) }}
            </h3>
            <div style="column-count:3; column-gap: 10px; ">
                @foreach($users as $user)
                    <ul class="record"
                    onmouseover="this.style.backgroundColor='#eeeeee'; this.style.color='red';" onmouseout="this.style.backgroundColor='#dddddd'; this.style.color='#4f4f4f';">
                        <li>{{ $user->name }}
                            {{ ($user->gender-1) ? ', women' : ', man' }}
                            {{ ', ' . $user->info->birthday }}</li>
                        <li>{{ $user->email }}{{ $user->is_active ? ', active' : '' }}</li>
                    </ul>
                @endforeach
            </div>
        </div>
    </body>
</html>
