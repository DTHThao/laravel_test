	<form  method="post" action="{{route('update_user', $user->id)}}">
    @csrf		
	 		<input type="hidden" name="id" value="{{ $user->id }}">
            <div>
                <div>UserName:</div>
                <input type="text" name="username" value="{{$user->username}}" >
            </div>

             <div>
                <div>Address:</div>
                <input type="text" name="address" value="{{$user->address}}">
            </div>

            <div>
                <div>Email:</div>
                <input type="email" name="email" value="{{$user->email}}">
            </div>
            <input type="submit" name = "update" value="Update" style="margin-top: 10px;">
    </form>