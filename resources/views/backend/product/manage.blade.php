<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Table</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Ensuring table data color is black */

    </style>
</head>
<body>
    <div class="container mt-5",>
        <h3  class=" text-center p-2 pt-4 mt-4 bg-success text-white" >All Products Managed Here</h3>
        <table class="table table-striped table-bordered table-hover">
            <thead class="thead-light"
            >
                {{-- table heade --}}
                <tr>
                    <th scope="col">#Sl</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Barcode</th>
                    <th scope="col">Status</th>
                    <th scope="col" colspan="2">Action</th>
                </tr>

                {{-- table heade End --}}


            </thead>
            <tbody>


                {{-- loop variable --}}
                <?php $sl=1;  ?>

                {{-- foreach loop --}}
                @foreach ($products as $data)
                <tr>
                    <td>{{ $sl }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->description }}</td>
                    <td>{{ $data->barcode }}</td>
                    <td>
                        {{-- if condition --}}

                        @if ($data->status==1)
                            Active
                        @else
                            Inactive
                    @endif
                    </td>

                    {{-- <td> <a href="#" >Edit</a></td> --}}
                    <td><a class="btn btn-primary" href="{{ route('edit',$data->id) }}" role="button">Edite</a></td>
                    <td><a class="btn btn-primary"  href="{{ route('productDelete',$data->id)}}" role="button">Delete</a></td>
                    {{-- loop  --}}
                    <?php $sl++; ?>
                </tr>

                @endforeach

                {{-- foreach end --}}
            </tbody>
        </table>

        <a class="btn btn-primary" href="#" role="button">Back Add Product</a>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
