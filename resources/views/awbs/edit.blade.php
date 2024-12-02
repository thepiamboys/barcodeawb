<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit AWB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Edit AWB</h1>
    <form action="{{ route('awbs.update', $awb->id) }}" method="POST" class="mt-4">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="airline" class="form-label">Airline</label>
            <input type="text" name="airline" class="form-control" value="{{ $awb->airline }}" required>
        </div>

        <div class="mb-3">
            <label for="awb" class="form-label">AWB</label>
            <input type="text" name="awb" class="form-control" value="{{ $awb->awb }}" required>
        </div>

        <div class="mb-3">
            <label for="awbbc" class="form-label">AWBBC</label>
            <input type="text" name="awbbc" class="form-control" value="{{ $awb->awbbc }}">
        </div>

        <div class="mb-3">
            <label for="hawb" class="form-label">HAWB</label>
            <input type="text" name="hawb" class="form-control" value="{{ $awb->hawb }}">
        </div>

        <div class="mb-3">
            <label for="destination" class="form-label">Destination</label>
            <input type="text" name="destination" class="form-control" value="{{ $awb->destination }}" required>
        </div>

        <div class="mb-3">
            <label for="origin" class="form-label">Origin</label>
            <input type="text" name="origin" class="form-control" value="{{ $awb->origin }}" required>
        </div>

        <div class="mb-3">
            <label for="total" class="form-label">Total</label>
            <input type="number" step="0.01" name="total" class="form-control" value="{{ $awb->total }}" required>
        </div>

        <button type="submit" class="btn btn-warning">Update</button>
        <a href="{{ route('awbs.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
