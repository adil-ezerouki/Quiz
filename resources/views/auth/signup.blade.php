<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --primary-color: #03b3b0;
            --secondary-color: #ef592f;
            --third-color: #bfbfbf;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
        }

        .signup {
            /* background-color: var(--secondary-color); */
            background: linear-gradient(to top, #ef592f, #03b3b069);
            width: 50%;
        }

        .form {
            width: 50%;
        }

        .form form label {}

        .form form input {
            border: 1px solid #bfbfbf;
            padding: 7px 20px;
            border-radius: 8px;
            width: 100%;
        }

        input:focus {
            outline: none;
        }

        .oauth {
            flex-wrap: nowrap;
        }

        .oauth img {
            width: 50px;
        }

        form i {
            position: absolute;
            top: 373px;
            right: 200px;
            font-size: 18px;
        }

        .error {
            color: red;
            animation: FadeIn s;
        }

        @keyframes FadeIn {
            from {
                opacity: 0
            }

            ;

            to {
                opacity: 1
            }
        }

        @media only screen and (max-width: 640px) {
            .form {
                width: 100%;
            }
        }

        .errors {

            animation: appear 0.5s ease-out;
            background-color: rgba(0, 0, 0, 0.493)
        }

        @keyframes disappear {
            0% {
                opacity: 1;
                transform: scale(1)
            }

            100% {
                opacity: 0;
                transform: scale(0.8)
            }
        }

        @keyframes appear {
            0% {
                opacity: 0;
                transform: scale(0.8)
            }

            100% {
                opacity: 1;
                transform: scale(1)

            }
        }
    </style>
</head>

<body>
    <div class="h-full w-full flex">
        <div class="form p-6 flex flex-col justify-center items-center gap-6">
            <div class="flex flex-col content-center items-center gap-2">
                <img src="{{ asset('images/logo.png') }}" alt="" srcset="" class="w-[200px]">
                <h2 class="text-[30px]">Sign Up to Quiz.com</h2>
            </div>
            <form action="{{ route('loginProcessing') }}" method="post" class="flex flex-col items-center gap-3">
                @csrf

                {{-- Full name --}}
                <div class="flex gap-3">
                    <input type="text" placeholder="First Name" name="email" id="userNameORemail">

                    <input type="text" placeholder="First Name" name="email" id="userNameORemail">

                </div>

                {{-- email --}}

                <input type="email" placeholder="Adress Email" name="email" id="email">
                <i class="fa-solid fa-eye"></i>



                {{-- userName --}}

                <input type="text" placeholder="Username" name="userName" id="userName">
                <i class="fa-solid fa-eye"></i>




                {{-- password --}}

                <div class="flex gap-3">

                    <div>

                        <input type="password" placeholder="password" name="password" id="password">
                        <i class="fa-solid fa-eye"></i>



                    </div>

                    {{-- confirm password --}}

                    <div>

                        <input type="password" placeholder="confirm password" name="password" id="password">
                        <i class="fa-solid fa-eye"></i>





                    </div>
                </div>

                <button type="submit" class="bg-[#03b3b0] btn py-2 px-4 rounded-lg mt-3 w-36">sign up</button>
            </form>
            <div class="oauth flex flex-col content-center items-center gap-3">
                <p class="">or you can sign up with : </p>
                <div class="flex content-center gap-3">
                    <a href="#"><img src="{{ asset('images/google.png') }}" alt="google icon"></a>
                    <span class="self-center">Or</span>
                    <a href="#"><img src="{{ asset('images/facebook.png') }}" alt="facebook icon"></a>
                </div>
            </div>
        </div>
        <div class="signup sm:flex hidden  justify-center items-center">
            <div class=' flex flex-col content-center items-center w-full p-6 gap-9'>
                <img class="w-[400px]" src="{{ asset('images/online-test.png') }}" alt="online-test-vector">
                <h1 class="text-white text-[30px] text-center"> Unleash Your Knowledge, <span
                        class="text-[#000]">Embrace the Challenge !</span></h1>
                <a href="{{ route('loginView') }}" class=" bg-[#03b3b0] btn py-2 px-4 rounded-lg">Sign in</a>
            </div>
        </div>
    </div>
    {{-- @if ($errors->any()) --}}
        <div class="errors h-[100vh] w-full flex justify-center items-center absolute top-0">
            <div class=" bg-[#ED5A2F] flex flex-col rounded">
                <h1>Please</h1>
                {{-- <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach --}}

                    <ul>
                    <li>The user name field is required.</li>
                    <li> The password field is required.</li>
                </ul>


                {{-- </ul> --}}

                <button id="okBTN">Ok</button>
            </div>
        </div>
    {{-- @endif --}}
    <script src="{{ asset('js/signup.js') }}"></script>
</body>

</html>
