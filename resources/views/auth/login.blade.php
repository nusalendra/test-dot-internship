<x-guest-layout>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow-lg p-4" style="width: 100%; max-width: 400px;">
            <div class="card-body">
                <!-- Session Status -->
                <x-auth-session-status class="mb-3" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-3" :errors="$errors" />

                <h4 class="text-center mb-4">Login</h4>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="mb-3">
                        <x-label for="email" :value="__('Email')" />
                        <input id="email" type="email" class="form-control" name="email" :value="old('email')" required autofocus>
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <x-label for="password" :value="__('Password')" />
                        <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
                    </div>

                    <!-- Login Button -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-block">
                            {{ __('Log in') }}
                        </button>
                    </div>
                </form>

                <!-- Register link (optional) -->
                <div class="text-center mt-3">
                    <p class="text-muted small">Don't have an account? <a href="{{ route('register') }}" class="text-primary">Sign up</a></p>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
