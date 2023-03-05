<x-template>
    <div class="container my-5">
        <h2 class="text-uppercase mb-4 text-center">Create a new account</h2>
        <form class="col-md-6 row g-2 mx-auto" action="/user/store" method="post">
            @csrf
            <div class="mb-2 pb-2">
                <div class="form-outline">
                    <label class="form-label" for="name">Full Name</label>
                    <input class="form-control form-control" id="name" name="name" type="text" value="{{ old('name') }}" placeholder="Enter Full Name" required />
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
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
                    <label class="form-label">Phone Number</label>
                    <input class="form-control form-control" name="phone" type="tel" value="{{ old('phone') }}" placeholder="Enter Phone Number" required />
                    @error('phone')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-6 mb-2 pb-2">
                <div class="form-outline">
                    <label class="form-label">Password</label>
                    <input class="form-control form-control" name="password" type="password" placeholder="Enter Password" required />
                    @error('password')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-6 mb-2">
                <div class="form-outline">
                    <label class="form-label required" for="cPassword">Confirm Password</label>
                    <input class="form-control form-control" id="cPassword" name="password_confirmation" type="password" required />
                    @error('password_confirmation')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="mb-2">
                <input class="btn btn-custom-primary col-12" type="submit" value="Register" />
            </div>
            <p class="text-center">Have an account? <a class="link-primary" href="/login">Login</a></p>
        </form>
    </div>
</x-template>
