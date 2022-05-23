@extends('layouts.app')
@section('content')
<script src="{{ asset('js/app.js') }}" defer></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="admin-heading">List of equipment types</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="message"></div>
                    <table class="content-table">
                        <thead>
                            <th>ID</th>
                            <th>Eq. ID</th>
                            <th>Description</th>
                        </thead>
                        <tbody>
                            @forelse ($types as $type)
                                <tr>
                                    <td class="id">{{ $type->id }}</td>
                                    <td>{{ $type->equipmentid }}</td>
                                    <td>{{ $type->desc }}</td>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8">No Equipment Type in database</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $types->links('vendor/pagination/bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection
