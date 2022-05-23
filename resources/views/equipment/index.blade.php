@extends('layouts.app')
@section('content')
<script src="{{ asset('js/app.js') }}" defer></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="admin-heading">List of Equipment</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="message"></div>
                    <table class="content-table">
                        <thead>
                            <th>ID</th>
                            <th>Type</th>
                            <th>Facotry ID</th>
                            <th>Sensor ID</th>
                        </thead>
                        <tbody>
                            @forelse ($equipments as $equipment)
                                <tr>
                                    <td class="id">{{ $equipment->id }}</td>
                                    <td>{{ $equipment->type }}</td>
                                    <td>{{ $equipment->factoryid }}</td>
                                    <td>{{ $equipment->sensorid }}</td>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8">No Equipment in database</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $equipments->links('vendor/pagination/bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection
