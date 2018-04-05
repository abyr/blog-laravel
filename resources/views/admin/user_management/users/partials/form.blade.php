@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<label for="">Name</label>
<input type="text" class="form-control" name="name" placeholder="Name" value="@if(old('name')){{old('name')}}@else{{ $user->name or "" }}@endif" required />

<label for="">Email</label>
<input type="text" class="form-control" name="email" placeholder="Email" value="@if(old('email')){{old('email')}}@else{{ $user->email or "" }}@endif" required />

<label for="">Password</label>
<input type="text" class="form-control" name="password" placeholder="Password" />

<label for="">Repeat password</label>
<input type="text" class="form-control" name="password_confirmation" />

<hr />

<input class="btn btn-primary" type="submit" value="Save" />
