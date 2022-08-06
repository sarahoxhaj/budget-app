<script src="https://cdn.tailwindcss.com"></script>
{{--Jquery validator = validimi client side --}}
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<style>
    .center {
        border-radius: 25px;
        margin: auto;
        margin-top: 60px;
        background-color: #f1f5f9;
    }

    .error {
        color: red;
    }
</style>


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

        <div class="center p-6 h-4/5 w-2/4" style="text-align: center">
            <b>
                <p class="text-2xl">Log In</p>
            </b>
            <div class="grid grid-cols-2 " style="margin-top: 30px;">
                <div>Using social media accounts
                    <br>
                    <br>
                    <a href="{{ route('google.login') }}" class="tn-google text-white bg-red-500 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-red-500 font-medium rounded-lg text-sm px-8 py-2.5 text-center inline-flex items-center dark:focus:ring-red-500 mr-2 mb-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                            <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                        </svg> &nbsp; Sign in with Google</a>
                    <br>
                    <br>
                    <button type="button" class="text-white bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 mr-2 mb-2">
                        <svg class="mr-2 -ml-1 w-4 h-4" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                            <path fill="currentColor" d="M279.1 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.4 0 225.4 0c-73.22 0-121.1 44.38-121.1 124.7v70.62H22.89V288h81.39v224h100.2V288z"></path>
                        </svg>
                        Sign in with Facebook
                    </button>
                    <br>
                    <br>

                </div>
                <div>Budget Manager account
                    <br>
                    <br>
                    <div class="w-full max-w-xs">
                        <form class="rounded px-8  pb-8 mb-4" action="{{route('login-user')}}" method="POST">

                            @if(Session::has('success'))
                            <div class="w-64 h-9 p-2 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-red-200 " role="alert">
                                {{Session::get('success')}}
                            </div>
                            @endif

                            @if(Session::has('msg'))
                            <div class="w-64 h-9 p-2 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                                {{Session::get('msg')}}
                            </div>
                            @endif

                            @csrf
                            <div class="mb-4">
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="text" placeholder="Email" value="{{old('email')}}">
                                <span class="text-danger">@error('email'){{$message}}@enderror</span>
                            </div>

                            <div class="mb-4">
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="Password">
                                <span class="text-danger">@error('password'){{$message}}@enderror</span>
                            </div>

                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 pt-1 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                                Sign In
                            </button> &nbsp; &nbsp; &nbsp;
                            <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
                                Forgot Password?
                            </a>
                            <br>
                            <br>
                            <p> Don’t have an account?<a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="registration"> &nbsp; Register</a></p>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>