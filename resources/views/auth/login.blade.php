<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | OClass Official Learning Website</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>

<body style="font-family: 'Roboto', sans-serif;">
    <form action="{{route('login')}}" method="POST" enctype="application/x-www-form-urlencoded">
        <section class="w-screen h-screen login-section px-8 sm:px-16 md:px-28 lg:px-36 xl:px-48 py-16" style="background: linear-gradient(180deg, #A4CEFF 0%, #BFDBFF 100%);">
            <div class="container flex flex-col">
                <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl  xl:text-7xl text-center">Welcome to</h2>
                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl  xl:text-8xl text-center">OClass</h1>
                @csrf
                <div class="input-box flex flex-col">
                    <label class="text-lg sm:text-xl md:text-2xl xl:text-3xl" for="username">Email or BNCC ID</label>
                    <input class="mt-2 mb-4 bg-white px-2 py-4" type="text" name="email" id="username">
                    <label class="text-lg sm:text-xl md:text-2xl xl:text-3xl" for="password">Password</label>
                    <input class="mt-2 mb-4 bg-white px-2 py-4" type="password" name="password" id="password">
                </div>
                <button type="submit" class="w-32 sm:w-40 h-16 sm:h-20 my-4 text-lg sm:text-xl md:text-2xl xl:text-3xl self-center" style="background: #FFDFA4;">Login</button>
                <p class="text-lg sm:text-xl md:text-2xl xl:text-3xl text-center">Don't have an account?</p>
                <a class="text-lg sm:text-xl md:text-2xl xl:text-3xl self-center font-bold" href="{{route('register')}}">Click Here</a>
            </div>
        </section>
    </form>
</body>

</html>
