<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Form </title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h3 class="text-center p-2 pt-4 mt-4 bg-success text-white">Insert Form</h3>
        <form action="{{ route("add-route") }}" method="POST">
        @csrf

            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">

            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Description</label>
                <input type="text" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Description">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Barcode</label>
                <input type="text" name="barcode" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Description">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Status</label>
                <input type="text" name="status" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Description">
            </div>

            <div class="form-group">
                <select name="status" id="">
                    <option value="1">Active</option>
                    <option value="2">Inactive</option>
                </select>
            </div>


            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>


            <button type="submit" name="submit" class="btn btn-primary">Submit Database</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
