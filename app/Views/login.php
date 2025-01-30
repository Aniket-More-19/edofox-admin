<?= $this->extend('main') ?>

<?= $this->section('content') ?>

<section class="login-page-container">

    <!-- This image only for desktop screens -->
    <div class="img-container">
        <img src="<?php echo base_url('images/login/desktop-img.png') ?>" alt="">
    </div>

    <div class="login-parent-container ">
        <div class="login-container">
            <!-- Logo Section -->
            <div class="logo-wrapper d-flex align-items-center justify-content-center mb-4">
                <img src="<?php echo base_url('images/login/edofox-logo.png') ?>" class="logo-img me-2" alt="Edofox Logo">
                <div class="brand-container">
                    <h1 class="brand-name mb-0">EDOFOX</h1>
                    <p class="admin-text text-center mb-0">ADMIN</p>
                </div>
            </div>

            <!-- Login Illustration -->
            <div class="text-center mb-4">
                <img src="<?php echo base_url('images/login/login-img.jpg') ?>" alt="Login Illustration" class="login-illustration">
            </div>

            <!-- Login Form -->
            <form class="login-form">
                <div class="form-group floating-input mb-4">
                    <div class="input-group input-group-lg">
                        <!-- <span class="input-group-text border-end-0">
                            <i class="fas fa-user"></i>
                        </span> -->
                        <div class="form-floating flex-grow-1">
                            <input type="text" class="form-control border-start-0" id="username" placeholder="Username" required>
                            <label for="username">Username</label>
                        </div>
                    </div>
                </div>

                <div class="form-group floating-input mb-4">
                    <div class="input-group input-group-lg">
                        <!-- <span class="input-group-text border-end-0">
                            <i class="fas fa-lock"></i>
                        </span> -->
                        <div class="form-floating flex-grow-1">
                            <input type="password" class="form-control border-start-0" id="password" placeholder="Password" required>
                            <label for="password">Password</label>
                        </div>
                    </div>
                </div>

                <div class="d-grid gap-3 mb-4">
                    <button type="submit" class="btn btn-primary btn-lg login-btn">
                        <span class="btn-text">Login</span>
                        <i class="fas fa-arrow-right ms-2"></i>
                    </button>
                    <button type="button" class="btn btn-outline-secondary btn-lg reset-btn">
                        <i class="fas fa-undo-alt me-2"></i>
                        <span class="btn-text">Reset</span>
                    </button>
                </div>

                <!-- Social Login Section -->
                <div class="social-login">
                    <div class="divider">
                        <span class="divider-text">or login with</span>
                    </div>
                    <div class="d-flex justify-content-center gap-3 mt-4">
                        <button type="button" class="btn btn-social btn-google flex-grow-1">
                            <img src="<?php echo base_url('images/login/google-logo.png') ?>" alt="Google" class="me-2">
                            <span>Google</span>
                        </button>
                        <button type="button" class="btn btn-social btn-facebook flex-grow-1">
                            <!-- <i class="fab fa-facebook-f me-2"></i> -->
                            <img src=" <?php echo base_url('images/login/facebook-logo.png') ?>" alt="Google" class="me-2">
                            <span>Facebook</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</section>

<?= $this->endSection() ?>