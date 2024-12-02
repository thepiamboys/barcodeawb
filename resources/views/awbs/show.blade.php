<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show AWB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border: none;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        }
        .card-header {
            background-color: #007bff;
            color: #fff;
        }
        .btn-custom {
            background-color: #007bff;
            color: #fff;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="card p-4">
        <h1 class="h4">Detail AWB</h1>
        <div class="row">
            <div class="col-md-6">
                <p><strong>Airline:</strong> {{ $awb->airline }}</p>
                <p><strong>AWB:</strong> {{ $awb->awb }}</p>
                <div>{!! $barcodeHTMLawbbc !!}</div>
                <p><strong>AWBBC:</strong> {{ $awb->awbbc }}</p>
                <p><strong>Destination:</strong> {{ $awb->destination }}</p>
                <div>{!! $barcodeHTMLhawb !!}</div>
                <p><strong>Origin:</strong> {{ $awb->origin }}</p>
                <p><strong>Total:</strong> {{ $awb->total }}</p>
            </div>
        </div>
        <a href="{{ route('awbs.print', $awb->id) }}" class="btn btn-primary" target="_blank">Print AWB</a> <!-- Tombol Print -->
        <a href="{{ route('awbs.index') }}" class="btn btn-custom mt-3">Back to List</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
