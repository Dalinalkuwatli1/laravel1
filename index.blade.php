@extends('dashboard.layout.master')

@section('title_page', 'orders')
@section('content')

<br>
<br>
<br>
<br>

    <div class="container mt-4">
        <!-- Card to add category -->
        <div class="card shadow-lg p-4">
            <div class="d-flex justify-content-between align-items-center">
                <h3>Orders List</h3>
            </div>

            <!-- Table to display orders data -->
            <div class="table-responsive mt-3">
                <table class="table table-striped table-bordered text-center">
                    <thead class="table table-primary">
                        <tr>
                            <th scope="col">user_id</th>
                            <th scope="col">total_price</th>
                            <th scope="col">payment_status</th>
                            <th scope="col">shipping_date</th>
                            <th scope="col">address</th>
                            <th scope="col">status</th>
                            <th scope="col">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $show)
                            <tr>
                                <td>{{ $show->user_id }}</td>
                                <td>{{ $show->total_price }}</td>
                                <td>{{ $show->payment_status }}</td>
                                <td>{{ $show->shipping_date }}</td>
                                <td>{{ $show->address }}</td>
                                <td>
                                    <span class="badge bg-{{ $show->status == 'Active' ? 'success' : 'danger' }}">
                                        {{ $show->status }}
                                    </span>
                                </td>
                                <td>
                                    <a href="{{ route('orders.show', $show->id) }}" class="btn btn-info btn-sm">View</a>
                                    <form action="{{ route('orders.destroy', $show->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
