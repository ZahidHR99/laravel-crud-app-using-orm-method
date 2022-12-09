<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel CRUD</title>

        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
        />
        <!-- Google Fonts -->
        <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
        />
        <!-- MDB -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css"
        rel="stylesheet"
        />
    </head>
    <body>


    <div class="container mt-3">

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mb-3" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
            Add New Data
        </button>

        @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session()->get('success') }}
            </div>
        @endif

        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($student as $key=>$row)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->email }}</td>
                    <td>{{ $row->phone }}</td>
                    <td>
                        <a href="">
                            <button type="button" class="btn btn-primary btn-sm btn-rounded">Show</button>
                        </a>

                        <a href="">
                            <button type="button" class="btn btn-success btn-sm btn-rounded">Edit</button>
                        </a>
                        
                        <form action="" method="post">
                            @csrf 
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger btn-sm btn-rounded">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>



        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('student.store') }}" method="post">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add New Data</h5>
                            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-outline mb-3">
                                <input type="text" id="form12" name="name" value="{{ old('name') }}" class="form-control" required/>
                                <label class="form-label" for="form12">Your Name</label>
                                @error('name')
                                    <strong>{{ $message }}</strong>    
                                @enderror
                            </div>
                            <div class="form-outline mb-3">
                                <input type="email" id="form12" name="email" value="{{ old('email') }}" class="form-control" required/>
                                <label class="form-label" for="form12">Your Email</label>
                                @error('email')
                                    <strong>{{ $message }}</strong>    
                                @enderror
                            </div>
                            <div class="form-outline mb-3">
                                <input type="number" id="form12" name="phone" value="{{ old('phone') }}" class="form-control" required/>
                                <label class="form-label" for="form12">Your Phone</label>
                                @error('phone')
                                    <strong>{{ $message }}</strong>    
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>



<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"
></script>
        
    </body>
</html>
