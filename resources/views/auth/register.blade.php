<x-guest-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name:')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Jay Patel" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- idnumber -->
        <div>
            <x-input-label for="idnumber" :value="__('ID Number:')" />
            <x-text-input id="idnumber" class="block mt-1 w-full" type="text" name="idnumber" :value="old('idnumber')" required autofocus autocomplete="idnumber" placeholder="12345678"/>
            <x-input-error :messages="$errors->get('idnumber')" class="mt-2" />
        </div>

        <!-- badge number -->
        <div>
            <x-input-label for="badgenumber" :value="__('Badge Number:')" />
            <x-text-input id="badgenumber" class="block mt-1 w-full" type="text" name="badgenumber" :value="old('badgenumber')" required autofocus autocomplete="badgenumber" placeholder="12345678"/>
            <x-input-error :messages="$errors->get('badgenumber')" class="mt-2" />
            </div>

<!-- phonenumber -->
<div>
    <x-input-label for="phonenumber" :value="__('Phone Number:')" />
    <div class="flex items-center">
        <span class="text-gray-500">+254</span>
        <x-text-input id="phonenumber" class="block mt-1 ml-2 w-full" type="text" name="phonenumber" :value="old('phonenumber')" required autofocus autocomplete="phonenumber" placeholder="734411195"/>
    </div>
    <x-input-error :messages="$errors->get('phonenumber')" class="mt-2" />
</div>




        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email:')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="email@example.com"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Password:')" />
            <div class="relative">
                <x-text-input id="password" class="block mt-1 w-full pr-10"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
                <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5 cursor-pointer"
                    id="password-toggle">
                    <i class="fas fa-eye-slash text-gray-500" id="eye-icon"></i>
                </div>
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- password_confirmation -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password:')" />
            <div class="relative">
                <x-text-input id="password_confirmation" class="block mt-1 w-full pr-10"
                            type="password"
                            name="password_confirmation"
                            required autocomplete="current-password_confirmation" />
                <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5 cursor-pointer"
                    id="password-toggle-confirm">
                    <i class="fas fa-eye-slash text-gray-500" id="eye-icon-confirm"></i>
                </div>
            </div>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

            <script>
                const passwordToggle = document.getElementById('password-toggle');
                const passwordInput = document.getElementById('password');
                const eyeIcon = document.getElementById('eye-icon');

                const passwordToggleConfirm = document.getElementById('password-toggle-confirm');
                const passwordInputConfirm = document.getElementById('password_confirmation');
                const eyeIconConfirm = document.getElementById('eye-icon-confirm');
            
                passwordToggle.addEventListener('click', function () {
                    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                    passwordInput.setAttribute('type', type);

                    // Toggle eye icon
                    if (type === 'password') {
                        eyeIcon.classList.remove('fa-eye');
                        eyeIcon.classList.add('fa-eye-slash');
                    } else {
                        eyeIcon.classList.remove('fa-eye-slash');
                        eyeIcon.classList.add('fa-eye');
                    }

                    // Synchronize password confirmation field
                    passwordInputConfirm.setAttribute('type', type);
                    if (type === 'password') {
                        eyeIconConfirm.classList.remove('fa-eye');
                        eyeIconConfirm.classList.add('fa-eye-slash');
                    } else {
                        eyeIconConfirm.classList.remove('fa-eye-slash');
                        eyeIconConfirm.classList.add('fa-eye');
                    }
                });

                // Synchronize password confirmation field on load
                const initialType = passwordInput.getAttribute('type');
                passwordInputConfirm.setAttribute('type', initialType);
                if (initialType === 'password') {
                    eyeIconConfirm.classList.remove('fa-eye');
                    eyeIconConfirm.classList.add('fa-eye-slash');
                } else {
                    eyeIconConfirm.classList.remove('fa-eye-slash');
                    eyeIconConfirm.classList.add('fa-eye');
                }
            </script>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
