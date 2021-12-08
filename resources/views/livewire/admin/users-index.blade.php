<div>
    <div class="card">
        <!--
        <div class="card-header">
            <input wire:model="search" class="form-control" type="text" placeholder="Search User or Email">
        </div>
        -->
        @if ($users->count())
            <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col" style="text-align: center">ID</th>
                        <th scope="col" style="text-align: center">Name</th>
                        <th scope="col" style="text-align: center">Email</th>
                        <th scope="col" style="text-align: center">Role</th>
                        <th scope="col" style="text-align: center">Actions</th>
                        </tr>
                    </thead>
                    @foreach($users as $user)
                    <tbody>
                        <tr>
                        <td style="text-align: center">{{ $user->id }}</td>
                        <td style="text-align: center">{{ $user->name }}</td>
                        <td style="text-align: center">{{ $user->email }}</td>
                        <td style="text-align: center">Role</td>
                        <td style="text-align: center">
                            <!-- Button trigger modal -->
                            <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-success" style="margin: 5px"><i class="fas fa-edit"></i></a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg>
                            </button>
                        </td>
                        </tr>
                    </tbody>
                    @endforeach
                    </table>
            </div>
            <div class="card-footer">
                {{ $users->links() }}
            </div>
        @else
            <div class="card-body">
                <p>Empty</p>
            </div>
        @endif
    </div>
</div>

<!-- Modal Delete-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete Post</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this User?
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <!-- Button trigger modal -->
            <form action="{{ route('admin.users.destroy',$user) }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">
                    Delete
                </button>
            </form>
            </div>
        </div>
    </div>
</div>
