<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('js/login-signup/animation.css') }}">
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
            width: 325px;
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

        @media only screen and (max-width: 640px) {
            .form {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="h-full w-full flex">
        <div class="signup sm:flex hidden  justify-center items-center">
            <div class=' flex flex-col content-center items-center w-full p-6 gap-9'>
                <img class="w-[400px]" src="{{ asset('images/online-test.png') }}" alt="online-test-vector">
                <h1 class="text-white text-[30px] text-center"> Unleash Your Knowledge, <span
                        class="text-[#000]">Embrace the Challenge !</span></h1>
                <a href="{{ route('signupView') }}" class=" bg-[#03b3b0] btn py-2 px-4 rounded-lg">Sign up</a>
            </div>
        </div>
        <div class="form p-6 flex flex-col justify-center items-center gap-6">
            <div class="flex flex-col content-center items-center gap-2">
                <img src="{{ asset('images/logo.png') }}" alt="" srcset="" class="w-[200px]">
                <h2 class="text-[30px]">Sign In to Quiz.com</h2>
                <p>Enter your email address and password below</p>
            </div>
            <form action="{{ route('loginProcessing') }}" method="post" class="flex flex-col gap-3">
                @csrf
                <input type="text" placeholder="email or username" name="email" id="userNameORemail">
                <div>
                    <input type="password" placeholder="password" name="password" id="password">
                    <i class="fa-solid fa-eye"></i>
                </div>
                <button type="submit" class="bg-[#03b3b0] btn py-2 px-4 rounded-lg mt-3">login</button>
            </form>
            <div class="oauth flex flex-col content-center items-center gap-3">
                <p class="">or you can sign in with : </p>
                <div class="flex content-center gap-3">
                    <a href="#"><img src="{{ asset('images/google.png') }}" alt="google icon"></a>
                    <span class="self-center">Or</span>
                    <a href="#"><img src="{{ asset('images/facebook.png') }}" alt="facebook icon"></a>
                </div>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="errors h-[100vh] w-full flex justify-center items-center absolute top-0">
            <div class="popup-errors flex flex-col rounded-lg bg-white w-[300px]">
                <div
                    class="emoji bg-[#ED5A2F] flex flex-col gap-3 justify-center items-center p-4 text-white rounded-t-lg ">
                    <i class="fa-regular fa-face-frown text-8xl"></i>
                    <p class="text-2xl">Ooops !</p>
                </div>

                <div class="p-4 pb-0">

                    <ul class="list-disc ml-4">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                </div>
                <div class="flex justify-center items-center p-4 text-white ">
                    <button class="bg-[#ED5A2F] rounded-full w-[90px] py-2 px-4 hover:scale-110 transition-all"
                        id="okBTN">ok</button>
                </div>

            </div>
        </div>
    @endif
    <script src="{{ asset('js/login-signup/index.js') }}"></script>
</body>

</html>
