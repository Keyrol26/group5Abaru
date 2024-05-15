@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <a href="{{ route('students.index') }}" class="nav-link" style="color: black">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-person-badge" viewBox="0 0 16 16">
                        <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                        <path
                            d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492z" />
                    </svg>
                    List of Students
                </a>
            </h3>
            <div class="card-tools">
                <button type="button" class="btn bg-info btn-sm"
                    data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                
            </div>
        </div><!-- /.card-header -->
        <div class="card-body">
            <div class="tab-content p-0">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        {{-- <div class="pull-left">
                        <h2>List of Students</h2>
                    </div> --}}
                        <div class="pull-left">
                            <a class="btn btn-success" href="{{ route('students.create') }}"> Add New Student</a>
                        </div>
                        <br>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($students as $s)
                        <tr>
                            <td>{{ $s->id }}</td>
                            <td>{{ $s->name }}</td>
                            <td>{{ $s->email }}</td>
                            <td>
                                <form action="{{ route('students.destroy', $s->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('students.show', $s->id) }}">Show</a>
                                    <a class="btn btn-primary" href="{{ route('students.edit', $s->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div><!-- /.card-body -->
    </div>
@endsection
