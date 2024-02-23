<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="{{ asset('css/utilities.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user/utilities.css') }}">
    {{ $style ?? '' }}

    <link rel="shortcut icon" href="{{ asset('img/logo-3.ico') }}" />
    <title>ECOBLOOM</title>

    <script src="{{ asset('js/user/utilities.js') }}" defer></script>


    <style>
        a[href="{{ url()->current() }}"] {
            border-bottom: 3px solid var(--site_col_1);
        }

        .user_details {
            padding: 30px;
            border-radius: 5px;
        }

        .profile-button {
            background: green;
            color: white;
            border: none;
            padding: 10px;
            transition: transform 0.3s ease;
        }

        .profile-save-button {
            background: green;
            color: white;
            border: none;
            padding: 10px;
            transition: transform 0.3s ease;
        }

        .profile-cancel-button {
            background: red;
            color: white;
            border: none;
            padding: 10px;
            transition: transform 0.3s ease;
        }

        .profile-button:hover {
            transform: scale(0.9);
            cursor: pointer;
        }

        .profile-save-button:hover {
            transform: scale(0.9);
            cursor: pointer;
        }

        .profile-cancel-button:hover {
            transform: scale(0.9);
            cursor: pointer;
        }


        .input_text {
            border: 2px solid #ccc;
            padding: 10px;
            font-size: 16px;
            width: 200px;
            outline: none;
            border: green 1px solid;
            /* Removes the default focus outline */
            transition: transform 0.3s ease;
            /* Adding transition for smooth zoom effect */
            background-color: white;
            /* Set background color to white */
        }

        .input_text:hover {
            transform: scale(1.1);
            /* Zoom out effect */
        }



        .main {

            padding: 30px;
        }
    </style>
</head>

<body class="m-0">
    @include('components.header')

    <section style="margin-top: 1.5rem;" class="_container">
        <aside class="user_details">
            <div class="profile_details">
                {{-- <img class="d-b" src="{{ asset('storage/avatar/admin.jpg') }}" alt="user"> --}}
                <div class="cloak">
                    <h2 class="m-0">{{ auth()->user()->full_name }}</h2>
                    <p class="m-0">{{ auth()->user()->email }}</p>
                </div>
            </div>

            @if (auth()->user()->admin)
                <a style="color: blue; margin-top:1em" class="d-b"
                    href="{{ route('admin.dashboard') }}">Dashboard</a>
            @else
                <button class="profile-button" onclick="toggleForm()" class="cloak">Edit profile</button>
            @endif

            <!-- form -->
            <form class="cloak hide" action="{{ route('user.profile') }}" method="post">
                @csrf
                Name <br>
                <input class="input_text" style="background:white; border: solid 1px green;" type="text"
                    name="" id=""><br>
                Intro <br>
                <textarea class="input_text" style="background:white; border: solid 1px green;"></textarea>

                <input class="profile-save-button" type="submit" value="Save">
                <input class="profile-cancel-button" onclick="toggleForm()" type="button" value="Cancel">
            </form>
            <!-- form -->
        </aside>
        <main class="main">
            <div class="top_nav">
                <ul class="flex_align">
                    <li>
                        <a class="flex_align" href="{{ route('user.orders.index') }}">
                            <span class="material-icons">shopping_cart</span>
                            <div>Orders</div>
                        </a>
                    </li>
                    <li>
                        <a class="flex_align" href="{{ route('user.ship_info') }}">
                            <span class="material-icons">credit_card</span>
                            <div>Address/Payments</div>
                        </a>
                    </li>
                    <li>
                        <a class="flex_align" href="{{ route('user.setting') }}">
                            <span class="material-icons">settings</span>
                            <div>Setting</div>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- main content -->
            <div style="margin-bottom: 1rem">

                {{ $slot }}

            </div>
        </main>
    </section>
</body>

</html>
