<form method="post" action="/admin/user/store">
    @method('PATCH')
    @csrf
    <p>
        <label for="title">Username</label><br>
        <input type="text" name="username" value="">
    </p>

    <p>
        <label for="email">Address</label><br>
        <input type="text" name="address" value="">
    </p>
    <p>
        <label for="email">Email</label><br>
        <input type="text" name="email" value="">
    </p>
    <p>
        <button type="submit">Submit</button>
    </p>
    <a href="/admin/list_user">List User</a>
</form>