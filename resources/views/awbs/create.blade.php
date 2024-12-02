<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create AWB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border: none;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="card p-4">
        <h1 class="h4">Create AWB</h1>
        <form action="{{ route('awbs.store') }}" method="POST" class="mt-4">
            @csrf
            <div class="mb-3">
                <label for="airline" class="form-label">Airline</label>
                <input type="text" name="airline" class="form-control" placeholder="Enter airline" required>
            </div>

            <div class="mb-3">
                <label for="awb" class="form-label">AWB</label>
                <input type="text" name="awb" class="form-control" placeholder="Enter AWB" required>
            </div>

            <div class="mb-3">
                <label for="awbbc" class="form-label">AWBBC</label>
                <input type="text" name="awbbc" class="form-control" placeholder="Enter AWBBC">
            </div>

            <div class="mb-3">
                <label for="hawb" class="form-label">HAWB</label>
                <input type="text" name="hawb" class="form-control" placeholder="Enter HAWB">
            </div>

            <div class="mb-3">
                <label for="destination" class="form-label">Destination</label>
                <input type="text" name="destination" class="form-control" placeholder="Enter destination" required>
            </div>

            <div class="mb-3">
                <label for="origin" class="form-label">Origin</label>
                <input type="text" name="origin" class="form-control" placeholder="Enter origin" required>
            </div>

            <div class="mb-3">
                <label for="total" class="form-label">Total</label>
                <input type="number" step="0.01" name="total" class="form-control" placeholder="Enter total" required>
            </div>

            <button type="submit" class="btn btn-success">Create</button>
            <a href="{{ route('awbs.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
