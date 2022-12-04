<x-bootstrap></x-bootstrap>

<head>
    <title>Register</title>
    <x-head></x-head>
</head>

<body>
    <articule>
        <!-- Section: Design Block -->
        <section class="text-center">
            <!-- Background image -->
            <div class="p-5 bg-image" style="background-color: #9A616D; height: 200px;"></div>
            <!-- Background image -->

            <div class="card mx-4 mx-md-5 shadow-5-strong" style="
            margin-top: -100px;
            background: hsla(0, 0%, 100%, 0.8);
            backdrop-filter: blur(30px);
            ">
                <div class="card-body py-5 px-md-5">

                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6">
                            <h2 class="fw-bold mb-5">Sign up now</h2>
                            <form method="post" action="{{ url('/register') }}">
                                
                                <!--Token (llave de seguridad)-->
								@csrf

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="form3Example1" class="form-control" name="name" required />
                                            <label class="form-label" for="form3Example1">First name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="form3Example2" class="form-control" name="lastname" required />
                                            <label class="form-label" for="form3Example2">Last name</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="email" id="form3Example3" class="form-control" name="email" required />
                                    <label class="form-label" for="form3Example3">Email address</label>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input type="password" id="form3Example4" class="form-control" name="password" required />
                                    <label class="form-label" for="form3Example4">Password</label>
                                </div>
                                <!-- Submit button -->
                                <button type="submit" class="btn btn-dark btn-lg btn-block">
                                    Sign up
                                </button>
                                <!-- Back button -->
                                <button type="button" onclick="location.href='<?= url('/') ?>'" class="btn btn-dark btn-lg btn-block">
                                    Back
                                </button>
                            </form>

                            <p></p>
							<p></p>

                            <!--Mensaje de guardado por medio de sesion-->
                            <h2 class="titulo">{{ session('status') }}</h2>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </articule>
</body>

<footer>
    <x-footer></x-footer>
</footer>