 <?php $name = "Show User" ?>

@extends ('../../db-layout')


@section ('content')

<div class="row">
    <div class="col-md-4">
        <div class="card-avatar">
        </div>

        <div class="card card-profile">

            <div class="card-body">

                <p class="card-description">
                    <strong>User ID: </strong>
                    {{ $user->id }}
                </p>

                <p class="card-description">
                    <strong>UserName: </strong>
                    {{ $user->name }}
                </p>

                <p class="card-description">
                    <strong>User Email: </strong>
                    {{ $user->email }}
                </p>
            </div>
        </div>

    </div>
</div>
<!-- End take -->
<form style="display:inline-block;" action="{{ route('users.destroy',$user->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button class="btn btn-primary">Delete</button>
</form>

</div>
</div>
</div>
</div>
</div>
@endsection 