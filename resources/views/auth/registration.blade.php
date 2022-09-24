<script src="https://cdn.tailwindcss.com"></script>

<!-- client side -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<style>
    .center {
        border-radius: 25px;
        margin: auto;
        margin-top: 60px;
        background-color: #f1f5f9;
    }
</style>

<style>
    .error {
        color: red;
    }
</style>
<title>Registration</title>

<header>
    <div class="w-full h-2/3" style="background-color: #009933">
        <br>
        <br>
        <br>
        <br>
        <img src="https://img.icons8.com/doodle/344/coins--v1.png" width="120" height="120" style="vertical-align:middle; margin:0px 650px">
        <b>
            <p class="text-4xl font-serif" style="text-align: center; color: white;">Bugdet Manager</p>
        </b>

        <div class="center p-6 h-3/4 w-2/4" style="text-align: center">
            <b>
                <p class="text-2xl">Registration</p>
            </b>
            <div class="grid grid-cols-2 " style="margin-top: 30px;">
                <div>Using social media accounts
                    <br>
                    <br>

                    <a href="{{ url('auth/google') }}" class="tn-google text-white bg-red-500 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-red-500 font-medium rounded-lg text-sm px-8 py-2.5 text-center inline-flex items-center dark:focus:ring-red-500 mr-2 mb-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                            <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                        </svg> &nbsp; Sign in with Google</a>

                    <br>
                    <br>
                    <a href="/auth/github/redirect" class="w-fit text-white bg-[#24292F] hover:bg-[#24292F]/90 focus:ring-4 focus:outline-none focus:ring-[#24292F]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-500 dark:hover:bg-[#050708]/30 mr-2 mb-2">
                        <svg class="mr-2 -ml-1 w-4 h-4" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="github" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                            <path fill="currentColor" d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path>
                        </svg>
                        Sign in with Github
                    </a>
                    <br>
                    <br>

                </div>
                <div>Budget Manager account
                    <br>
                    <br>
                    <div class="w-full max-w-xs">
                        <form class="rounded px-8  pb-8 mb-4" action="{{route('register-user')}}" method="POST" name="register" id="register">
                            @if(Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}} </div>
                            @endif
                            @if(Session::has('fail'))
                            <div class="alert alert-danger">{{Session::get('fail')}} </div>
                            @endif

                            @csrf
                            <div class="mb-4">
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="text" placeholder="Email" value="{{old('email')}}">
                                <span class="text-danger">@error('email'){{$message}}@enderror</span>
                            </div>
                            <div class="mb-6">
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="Password">
                                <span class="text-danger">@error('password'){{$message}}@enderror</span>
                            </div>
                            <div class="flex items-center justify-between ">
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 pt-1 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                                    Register
                                </button>
                            </div>
                            <br>
                            <p>Already have an account?<a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="/"> &nbsp; Sign in</a></p>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>

<script>
    if ($("#register").length > 0) {
        $("#register").validate({
            rules: {
                email: {
                    required: true,
                    email: true,
                },
                password: {
                    required: true,
                    minlength: 5,
                    maxlength: 12,
                },
            },
            messages: {
                password: {
                    required: "Please enter a password",
                    minlength: "Password must be at least 5 characters long",
                    maxlength: "Password must be less than 12 characters long",
                },
                email: {
                    required: "Please enter an email",
                    email: "Not a valid email."
                },
            },
        })
    }
</script>