<x-layout>
    <x-slot name="title">
        Login
    </x-slot>

    <div class="row justify-content-center align-items-center" style="height: 100vh">
        <div class="col-md-5">
            <form action="{{route('post_login')}}" method="POST" class="card card-body">
                @csrf
                <div class="mb-4">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{old('email')}}">
                    @error("email")
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                    @error("password")
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        If you have not account <a href="{{route('register')}}" class="text-decoration-none">Register
                            Here.</a>
                    </div>
                    <button type="submit" class="btn btn-primary rounded-1">Login</button>
                </div>
            </form>
        </div>
    </div>

</x-layout>