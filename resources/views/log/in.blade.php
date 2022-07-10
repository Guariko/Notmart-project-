@extends("log.layout")

@section("model", "Sign Up")

@section("content")

<section class="sign__up">


    <form action=" {{route('registerUser')}} " method="POST">

        @csrf

        <div class="logo">

            <i class="fas fa-fire"></i> <span>notmart</span>

        </div>
        <div class="facebook apply ">
            <i class="fab fa-facebook"></i> <span>sign up with facebook</span>
        </div>
        <div class="apply input__container ">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="full name" name="userName" maxlength="100" required>
        </div>
        <div class="apply input__container">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="email" name="userEmail" maxlength="100" required>
        </div>
        <div class="apply input__container">
            <i class="fas fa-key"></i>
            <input type="password" placeholder="password" name="userPassword" maxlength="50" required>
        </div>

        <div class="apply button__container">
            <button type="submit">done</button>
        </div>

        <div class="account">
            <span>Already have an account? <a href="{{ route('login') }}">log-in</a></span>
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