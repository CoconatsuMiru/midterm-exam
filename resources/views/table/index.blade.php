@extends('layouts.app')

@section('title', 'Descriptions')

@section('content')

    <table class="table table-bordered text-center">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Features</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($features as $feauture)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $feauture->feature_name }}</td>
                    <td>{{ $feauture->description }}</td>
                    <td>
                        <button class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i> Add</button>
                        <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-3">
        {!! $features->links() !!}
    </div>

@endsection