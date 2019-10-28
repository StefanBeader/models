@extends('layouts.backend')

@section('main')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Models</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="{{ URL::to('/models/create') }}" class="btn btn-primary mb-4">Add Model</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($models as $model)
                        <tr>
                            <td>{{ $model->getName() }}</td>
                            <td>{{ $model->email }}</td>
                            <td>{!! \App\Enums\MannequinStatus::renderStatus($model->status) !!}</td>
                            <td>
                                <a href="{{ URL::to('/models/' . $model->id) }}">View</a>
                                <a href="{{ URL::to('/models/' . $model->id . '/edit') }}">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                {{ $models->links() }}
            </div>
        </div>
    </div>

@endsection
