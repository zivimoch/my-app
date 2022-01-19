<x-app-layout>
    <div class="row">
        <form action="{{route('register')}}" method="POST">
            @if(session()->has('success'))
            <div class="alert alert-success">{{session()->get('success')}}</div>
            @endif
            @csrf
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input class="form-control" name="email" value="{{old('email','')}}">
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input class="form-control" name="username" value="{{old('username','')}}">
                @error('username')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input class="form-control" name="name" value="{{old('name','')}}">
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input class="form-control" name="password">
                @error('password')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</x-app-layout>
