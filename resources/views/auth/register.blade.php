<x-layout>

    <h1 class="title">Register a new account</h1>

    <div class="mx-auto max-w-screen-sm card">

        <form action="{{ route('register') }}" method="post" x-data="formSubmit" @submit.prevent="submit">
            @csrf

            {{-- Username --}}
            <div class="mb-4">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" value="{{ old('username') }}" class="input @error('username') ring-red-500 @enderror">
                @error('username')
                   <p class="error">{{ $message }}</p>
                @enderror
            </div>

            {{-- Email --}}
            <div class="mb-4">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" value="{{ old('email') }}" class="input @error('email') ring-red-500 @enderror">
                @error('email')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            {{-- Password --}}
            <div class="mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="input @error('password') ring-red-500 @enderror">
                @error('password')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            {{-- Confirm Password --}}
            <div class="mb-8">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="input @error('password') ring-red-500 @enderror">
            </div>

            <div class="mb-4">
                <input type="checkbox" name="subscribe" id="subscribe">
                <label for="subscribe">Subscribe to our newletter</label>
            </div>

            {{-- Submit Button  --}}
            <button x-ref="btn" type="submit" class="btn">Register</button>

        </form>

    </div>

</x-layout>
