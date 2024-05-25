<x-layout>
    <x-slot name="title">
        Register
    </x-slot>

    <div class="row justify-content-center align-items-center" style="height: 100vh">
        <div class="col-md-5">
            <form action="{{route('post_register')}}" method="POST" class="card card-body">
                @csrf
                <div class="mb-4">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}">
                    @error("name")
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{old('eamil')}}">
                    @error("email")
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control" value="{{old('phone')}}">
                    @error("phone")
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
                        If you have already account <a href="{{route('login')}}" class="text-decoration-none">Login
                            Here.</a>
                    </div>
                    <button type="submit" class="btn btn-primary rounded-1">Register</button>
                </div>
            </form>
        </div>
    </div>

</x-layout>