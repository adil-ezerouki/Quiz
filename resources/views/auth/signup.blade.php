<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
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

        .form form input {
            border: 1px solid #bfbfbf;
            padding: 7px 40px 7px 20px;
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
            width: 30px;
        }


        @media only screen and (max-width: 900px) {
            .form {
                width: 100%;
            }

            .signup {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class=" w-full h-full flex md:items-stretch items-center">
        <div class="form p-6 flex flex-col items-center  gap-6">
            <div class="flex flex-col content-center items-center gap-2">
                <img src="{{ asset('images/logo.png') }}" alt="" srcset="" class="w-[200px]">
                <h2 class="text-[30px]">Sign Up to Quiz.com</h2>
                <p>you can sign up with :</p>
            </div>
            <div class="oauth flex flex-col content-center items-center gap-3 w-full">
                <div class="flex items-center justify-center gap-3 w-full">
                    <a href="#"
                        class="bg-[#3A5897] md:w-[240px] w-full text-white flex items-center justify-center px-4 py-2 rounded-lg gap-4"><img
                            src="{{ asset('images/facebook.png') }}" alt="google icon"> Facebook</a>
                    <a href="#"
                        class=" md:w-[240px] w-full  shadow-inner bg-[#dddddd] flex items-center justify-center px-4 py-2 rounded-lg gap-4"><img
                            src="{{ asset('images/google.png') }}" alt="facebook icon">Google</a>
                </div>
                <p class="">or with : </p>
            </div>
            <form action="{{ route('signupProcessing') }}" method="post" class="flex flex-col items-center gap-3">
                @csrf

                {{-- Full name --}}
                <div class="flex gap-3">
                    <input type="text" placeholder="First Name" name="firstName"
                        @error('firstName') style="border: solid 1px red" @enderror>

                    <input type="text" placeholder="First Name" name="lastName"
                        @error('lastName') style="border: solid 1px red" @enderror>

                </div>

                {{-- email --}}

                <input type="email" placeholder="Adress Email" name="email" id="email"
                    @error('email') style="border: solid 1px red" @enderror>



                {{-- userName --}}

                <div class="flex gap-3 w-full">

                    <input type="text" placeholder="Username" name="userName" id="userName"
                        @error('userName') style="border: solid 1px red" @enderror>
                    <input type="date" placeholder="Birth Date" name="birthDay"
                        @error('birthDay') style="border: solid 1px red" @enderror>

                </div>




                {{-- password --}}

                <div class="flex gap-3">

                    <div class="relative">

                        <input type="password" class="password pass" placeholder="password" name="password"
                            @error('password') style="border: solid 1px red" @enderror>
                        <i
                            class="register-icon fa-solid fa-eye absolute lg:left-[210px] left-[130px] top-3 active:scale-110 transition-all duration-50"></i>



                    </div>

                    {{-- confirm password --}}

                    <div class="relative">

                        <input type="password" class="password Cpass" placeholder="confirm password" name="password"
                            @error('password') style="border: solid 1px red" @enderror>
                        <i
                            class="register-icon fa-solid fa-eye absolute lg:left-[210px] left-[130px] top-3 active:scale-110 transition-all duration-50"></i>





                    </div>
                </div>

                <button type="submit" class="bg-[#03b3b0] btn py-2 px-4 rounded-lg mt-3 w-full">register</button>
            </form>
        </div>
        <div class="signup  justify-center items-center">
            <div class=' flex flex-col content-center items-center w-full p-6 gap-9'>
                <img class="w-[400px]" src="{{ asset('images/online-test.png') }}" alt="online-test-vector">
                <h1 class="text-white text-[30px] text-center"> Unleash Your Knowledge, <span
                        class="text-[#000]">Embrace the Challenge !</span></h1>
                <a href="{{ route('loginView') }}" class=" bg-[#03b3b0] btn py-2 px-4 rounded-lg">login</a>
            </div>
        </div>
    </div>
    @if ($errors->any())

        <x-alert-error>
            <ul class="list-disc ml-4">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </x-alert-error>


    @endif

    <script src="{{ asset('js/login-signup/index.js') }}"></script>
    <script src="{{ asset('js/errAlert/errAlert.js') }}"></script>
</body>

</html>
