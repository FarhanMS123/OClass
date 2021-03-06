<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | OClass Official Learning Website</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Roboto', sans-serif;">
    <section class="w-screen md:h-screen login-section py-8 flex flex-col md:flex-row" style="background: linear-gradient(180deg, #A4CEFF 0%, #BFDBFF 100%);">
        <div class="w-full md:w-1/2 flex justify-center items-center px-10 lg:px-16">
            <div class="flex flex-col justify-center items-center">
                <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl">Please fill out the form</h1>
                <p class="text-lg sm:text-xl md:text-2xl lg:text-3xl xl:text-4xl">Already have an account?</p>
                <a class="h-12 w-32 md:w-36 lg:w-40 my-4 text-md lg:text-xl xl:text-2xl flex justify-center items-center" href="#" style="background: #FFDFA4;">Login</a>
            </div>
        </div>
        <hr class="h-2 mx-10 my-4 flex md:hidden" style="background-color: #6085B2;">
        <div class="w-full md:w-1/2 px-10 lg:px-16">
            <form class="flex flex-col" action="{{route('register')}}" method="POST" enctype="application/x-www-form-urlencoded" name="registerForm" id="registerForm">
                @csrf
                <label class="text-md lg:text-xl xl:text-2xl" for="fullname">Full Name</label>
                <input required class="mt-2 mb-4 px-4 py-2" type="text" name="name" id="fullname" placeholder="Full Name">
                <label class="text-md lg:text-xl xl:text-2xl" for="username">BNCC ID</label>
                <input required class="mt-2 mb-4 px-4 py-2" type="text" name="bncc_id" id="username" placeholder="BNCC ID">
                <label class="text-md lg:text-xl xl:text-2xl" for="email">Email</label>
                <input required class="mt-2 mb-4 px-4 py-2" type="email" name="email" id="email" placeholder="Email">
                <label class="text-md lg:text-xl xl:text-2xl" for="password">Password</label>
                <input required class="mt-2 mb-4 px-4 py-2" type="password" name="password" id="password" placeholder="Password">
                <label class="text-md lg:text-xl xl:text-2xl" for="confirmpassword">Confirm Password</label>
                <input required class="mt-2 mb-4 px-4 py-2" type="password" name="password_confirmation" id="confirmPassword" placeholder="Confirm Password">
                <label class="text-md lg:text-xl xl:text-2xl" for="classes">Choose a class</label>
                <select required class="mt-2 mb-4 px-4 py-2" name="room_id" id="classes">
                    <option value="0" selected disabled>Choose a class</option>
                    @foreach ($rooms as $room)
                    <option value="{{$room->id}}">{{$room->name}}</option>
                    @endforeach
                </select>
                <button class="h-12 w-40 my-4 text-2xl self-center" type="submit" style="background: #FFDFA4;">SUBMIT</button>
            </form>
        </div>
    </section>
    <script>
        const form = document.getElementById("registerForm");
        form.addEventListener("submit", registerForm);

        function registerForm(){
            const registerForm = document.forms.registerForm;
            const name = registerForm.fullname.value;
            const email = registerForm.email.value;
            const password = registerForm.password.value;
            const confirmPassword = registerForm.confirmPassword.value;
            const chooseClass = registerForm.classes.value;

            if (name === ""){
                alert("Name must be filled out");
                return false;
            }

            if (email === ""){
                alert("Email must be filled out");
                return false;
            }
            if (email.search("@") === -1) {
                alert("Email must include '@' symbol");
                return false;
            } else {
                const pos = email.search("@");
                let i;
                for (i = pos + 1; i < email.length; i++) {
                    if(email.charAt(i) == "@") {
                        alert("Email must have only one '@' symbol");
                        return false;
                    }
                }
                if(email.charAt(pos + 1) == "." || email.charAt(email.length - 1) == ".") {
                    alert("Symbol '.' is at the wrong position");
                    return false;
                }
                if(email.search("@") === 0 || email.search("@") === email.length - 1) {
                    alert("Symbol '@' is at the wrong position");
                    return false;
                }
            }

            if(password !== confirmPassword){
                alert("Password and Confirm Password not match");
                return false;
            }

            if(chooseClass === 0){
                alert("Please choose your class!");
                return false;
            }
        }
    </script>
</body>
</html>
