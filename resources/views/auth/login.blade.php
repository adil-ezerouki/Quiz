<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
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
            padding: 5px 20px;
            border-radius: 8px;
            width: 325px;
        }

        .oauth {
            flex-wrap: nowrap;
        }

        .oauth img {
            width: 50px;
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
        <div class="signup sm:flex hidden  content-center items-center">
            <div class=' flex flex-col content-center items-center w-full p-6 gap-7'>
                <img class="w-[400px]" src="{{ asset('images/online-test.png') }}" alt="online-test-vector">
                <h1 class="text-white text-[30px] text-center"> Unleash Your Knowledge, <span
                        class="text-[#000]">Embrace the Challenge !</span></h1>
                <a href="#" class=" bg-[#03b3b0] btn py-2 px-4 rounded-lg">Sign up</a>
            </div>
        </div>
        <div class="form p-6 flex flex-col justify-center items-center gap-9">
            <div class="flex flex-col content-center items-center gap-2">
                <img src="{{ asset('images/logo.png') }}" alt="" srcset="" class="w-[200px]">
                <h2 class="text-[30px]">Sign In to Quiz.com</h2>
                <p>Enter your email address and password below</p>
            </div>
            <form action="" method="" class="flex flex-col gap-3">
                <label for="userNameORemail">UserName or Email</label>
                <input type="text" placeholder="email or username" name="userNameORemail" id="userNameORemail">
                {{-- <div>error</div> --}}
                <label for="password">Password</label>
                <input type="password" placeholder="password" name="password" id="password">
                {{-- <div>error</div> --}}
                <button type="submit" class="bg-[#03b3b0] btn py-2 px-4 rounded-lg mt-3">login</button>
            </form>
            <div class="oauth flex flex-col content-center items-center gap-3">
                <p class="">or you can sign in with : </p>
                <div class="flex content-center gap-3">
                    <img src="{{ asset('images/google.png') }}" alt="google icon" srcset="">
                    <span class="self-center">Or</span>
                    <img src="{{ asset('images/facebook.png') }}" alt="facebook icon" srcset="">
                </div>
            </div>
        </div>
    </div>
</body>

</html>
