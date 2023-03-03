<x-template>
    <div class="container my-5">
        <h2 class="text-uppercase mb-4 text-center">Login to your account</h2>
        <form class="col-md-6 mx-auto row g-2" action="/user/auth" method="post">
            @csrf
            <div class="mb-2 pb-2">
                <div class="form-outline">
                    <label class="form-label">Email</label>
                    <input class="form-control form-control" name="email" type="email" value="{{ old('email') }}" placeholder="Enter Email" required />
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="mb-2 pb-2">
                <div class="form-outline">
                    <label class="form-label">Password</label>
                    <input class="form-control form-control" name="password" type="password" value="{{ old('password') }}" placeholder="Enter Password" required />
                    @error('password')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="mb-2">
                <input class="btn btn-custom-primary col-12" type="submit" value="Log In" />
            </div>
            <p class="text-center">Don't have an account? <a class="link-primary" href="/register">Register</a></p>

        </form>
    </div>
</x-template>
