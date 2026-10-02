<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AWB List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border: none;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            transition: all 0.3s ease;
        }
        .card:hover {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }
        table tbody tr:hover {
            background-color: #f1f1f1;
            cursor: pointer;
        }
        .btn-custom {
            background-color: #007bff;
            color: #fff;
            transition: background-color 0.3s ease;
        }
        .btn-custom:hover {
            background-color: #0056b3;
            color: #fff;
        }
        footer {
            text-align: center;
            padding: 2rem 0;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="card p-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="h3">Daftar AWB</h1>
            <a href="{{ route('awbs.create') }}" class="btn btn-custom">Create New AWB</a>
        </div>

        <table class="table table-striped table-hover table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Airline</th>
                    <th>AWB</th>
                    <th>AWBBC</th>
                    <th>HAWB</th>
                    <th>Destination</th>
                    <th>Origin</th>
                    <th>Total</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($awbs as $awb)
                <tr>
                    <td>{{ $awb->airline }}</td>
                    <td>{{ $awb->awb }}</td>
                    <td>{{ $awb->awbbc }}</td>
                    <td>{{ $awb->hawb }}</td>
                    <td>{{ $awb->destination }}</td>
                    <td>{{ $awb->origin }}</td>
                    <td>{{ $awb->total }}</td>
                    <td>
                        <a href="{{ route('awbs.show', $awb->id) }}" class="btn btn-info btn-sm">Show</a>
                        <a href="{{ route('awbs.edit', $awb->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route('awbs.print', $awb->id) }}" class="btn btn-primary" target="_blank">Print AWB</a> <!-- Tombol Print -->
                        <form action="{{ route('awbs.destroy', $awb->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <footer class="mt-5">
        <p>&copy; {{ date('Y') }} AWB Management - All Rights Reserved</p>
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
