<x-layout>
    <h1 class="title">Request a password reset email</h1>

    <div class="mx-auto max-w-screen-sm card">
        {{-- Session Message  --}}
        @if(session('status'))
            <x-flashMsg msg="{{ session('status') }}" />
        @endif

        <form action="{{ route('password.request') }}" method="post">
            @csrf

            {{-- Email --}}
            <div class="mb-4">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" value="{{ old('email') }}" class="input @error('email') ring-red-500 @enderror">
                @error('email')
                <p class="error">{{ $message }}</p>
                @enderror
            </div>

            {{-- Submit Button  --}}
            <button type="submit" class="btn">Submit</button>

        </form>
    </div>
</x-layout>
