@extends("log.layout")

@section("model", "Access your notmart account")

@section("content")

<section class="sign__up">


    <form action="{{ route('logUser') }}" method="POST">

        @csrf

        <div class="logo">

            <i class="fas fa-fire"></i> <span>notmart</span>

        </div>
        <div class="facebook apply ">
            <i class="fab fa-facebook"></i> <span>Log-in with Facebook</span>
        </div>
        <div class="apply input__container ">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="email or user name" name="userLogin" maxlength="100" required>
        </div>

        <div class="apply input__container">
            <i class="fas fa-key"></i>
            <input type="password" placeholder="password" name="userPassword" maxlength="50" required>
        </div>

        <div class="apply button__container">
            <button type="submit">done</button>
        </div>

        <div class="account">
            <div class="forgot">
                <a href="#">I've forgotten my password</a>
            </div>
            <span>Don't have an account yet? <a href="{{ route('signup') }}">Register</a></span>
        </div>
        <div class="apply">
            <span class="copy">

                &copy; copyright 2022
            </span>
        </div>

    </form>

    <div class="image__container">
        <img src=" {{url('images/space.jpg')}} " alt="">
    </div>

</section>

@endsection