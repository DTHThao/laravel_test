<table border="1">
    <thead>
        <tr>
            <th>STT</th>
            <th>Username</th>
            <th>Address</th>
            <th>Email</th>
            <th colspan="2">Tools</th>

        </tr>
    </thead>
    <tbody>
        <?php  $stt=1; foreach ($user as $row){ ?>
            <tr>
                <td>{{ $stt }}</td>
                <td>{{$row->username}}</td>
                <td>{{$row->address}}</td>
                <td>{{$row->email}}</td>
                <td>
                    <a href="/admin/edit_user/{{$row->id}}">Edit</a>
                </td>
                <td>
                    <form method="post" action="/admin/delete_user/{{$row->id}}">
                        @method('DELETE')
                        @csrf
                        <button type="submit" onclick="ConfirmDelete()">Delete</button>
                    </form>
                </td>
            </tr>
            <?php $stt++; }?>
        </tbody>
    </table>
<script>
        function ConfirmDelete()
        {
          confirm("Are you sure you want to delete?");
      }
</script>