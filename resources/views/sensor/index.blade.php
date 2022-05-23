@extends('layouts.app')
@section('content')
<script src="{{ asset('js/app.js') }}" defer></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="admin-heading">List of Sensors</h2>
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
                            <th>KwH</th>
                            <th>Value</th>
                            <th>Running</th>
                        </thead>
                        <tbody>
                            @forelse ($sensors as $sensor)
                                <tr>
                                    <td class="id">{{ $sensor->id }}</td>
                                    <td>{{ $sensor->name }}</td>
                                    <td>{{ $sensor->desc }}</td>
                                    <td>{{ $sensor->KwH }}</td>
                                    <td>{{ $sensor->value }}</td>
                                    <td>{{ $sensor->running }}</td>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8">No Sensor in database</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $sensors->links('vendor/pagination/bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection
