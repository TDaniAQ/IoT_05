@extends('layouts.app')
@section('content')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<script src="{{ asset('js/app.js') }}" defer></script>
</head>
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="admin-heading">List of Factories</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="message"></div>
                    <table class="content-table">
                        <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                        </thead>
                        <tbody>
                            @forelse ($factories as $factory)
                                <tr>
                                    <td class="id">{{ $factory->id }}</td>
                                    <td>{{ $factory->name }}</td>
                                    <td>{{ $factory->desc }}</td>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8">No Factories in database</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $factories->links('vendor/pagination/bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection
