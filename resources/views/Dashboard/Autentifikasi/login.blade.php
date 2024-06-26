<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - SB Admin</title>
    <link href="{{ asset('sbadmin') }}/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header text-center">
                                    <i class="fas fa-user-circle fa-5x mt-4 mb-2" style="color: #000000;"></i>
                                 
                                    <h3 class="text-center font-weight-light ">Login</h3>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('aksilogin') }}" method="POST">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="fas fa-at" style="color: #aeaed2;"></i>
                                                </span>
                                                <input class="form-control" id="inputEmail" type="email" name="email" placeholder="name@example.com" required />
                                            </div>
                                         
                                        </div>
                                        
                                        <div class="form-floating mb-3">
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="fas fa-lock" style="color:#aeaed2;"></i>
                                                </span>
                                                <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Password" required />
                                                <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                            </div>
                                            {{-- <label for="inputPassword">Password</label> --}}
                                        </div>
                                        
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" id="inputRememberPassword" type="checkbox" name="remember" value="1" />
                                            <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                        </div>
                                        
                                        <div class="form-check mb-3 text-center">   
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                      
                                    </form>
                                </div>
                                
                                <script>
                                    document.addEventListener('DOMContentLoaded', function () {
                                        const togglePassword = document.querySelector('#togglePassword');
                                        const passwordInput = document.querySelector('#inputPassword');
                                
                                        togglePassword.addEventListener('click', function () {
                                            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                                            passwordInput.setAttribute('type', type);
                                            this.querySelector('i').classList.toggle('fa-eye');
                                            this.querySelector('i').classList.toggle('fa-eye-slash');
                                        });
                                    });
                                </script>
                                
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('sbadmin') }}/js/scripts.js"></script>
</body>

</html>
