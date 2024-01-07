<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('js/login-signup/animation.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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

        .form form input:not(input[type='checkbox']) {
            border: 1px solid #bfbfbf;
            padding: 7px 40px 7px 20px ;
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
            width: 30px;
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
                <a href="{{ route('signupView') }}" class=" bg-[#03b3b0] btn py-2 px-4 rounded-lg">register</a>
            </div>
        </div>

        <div class="form p-6 flex flex-col justify-center items-center gap-6">
            <div class="flex flex-col content-center items-center gap-2">
                <img src="{{ asset('images/logo.png') }}" alt="" srcset="" class="w-[200px]">
                <h2 class="text-[30px]">Sign In to Quiz.com</h2>
                <p>you can sign in with :</p>
            </div>

            <div class="oauth flex flex-col content-center items-center gap-3">
                <div class="flex items-center content-center gap-3 ">
                    <a href="#"
                        class="bg-[#3A5897] w-[155px] text-white flex items-center justify-center px-4 py-2 rounded-lg gap-4"><img
                            src="{{ asset('images/facebook.png') }}" alt="google icon"> Facebook</a>
                    <a href="#"
                        class=" w-[155px]  shadow-inner bg-[#dddddd] flex items-center justify-center px-4 py-2 rounded-lg gap-4"><img
                            src="{{ asset('images/google.png') }}" alt="facebook icon">Google</a>
                </div>
                <p class="">or with : </p>
            </div>

            <form action="{{ route('loginProcessing') }}" method="post" class="flex flex-col gap-3">
                @csrf
                <input type="email" placeholder="email or username" name="email" class="credetials" id="userNameORemail"
                    @error('email') style="border: solid 1px red" @enderror
                    @error('userName') style="border: solid 1px red" @enderror>
                <div class="relative">
                    <input type="password"  class="password credetials" placeholder="password"  name="password" id="password"
                        @error('password') style="border: solid 1px red" @enderror>
                    <i
                        class="login-icon fa-solid  fa-eye absolute right-[17px] top-3 active:scale-110 transition-all duration-50"></i>
                </div>

                <div class="flex gap-3 items-center">
                    <input class="" type="checkbox" name="" id="rememberMe">
                    <span>remember me</span>
                </div>
                <button type="submit" class="bg-[#03b3b0] btn py-2 px-4 rounded-lg mt-3">login</button>
            </form>
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

    @if (session('login_msg'))
    <div class="errors h-[100vh] w-full flex justify-center items-center absolute top-0">
        <div class="popup-errors flex flex-col rounded-lg bg-white w-[300px]">
            <div
                class="emoji bg-[#ED5A2F] flex flex-col gap-3 justify-center items-center p-4 text-white rounded-t-lg ">
                <i class="fa-regular fa-face-frown text-8xl"></i>
                <p class="text-2xl">Ooops !</p>
            </div>

            <div class="p-4 pb-0">

                <P class="text-center">
                    {{ session('login_msg') }}
                </P>

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
