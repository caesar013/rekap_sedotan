@extends('layouts.app')
@section('title', 'Rekap Per Tahun')

@section('content')
<section class="section">
    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h3>Total Per Year</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Tahun</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($totalYearly as $year => $total)
                        <tr>
                            <td><a href="{{ route('annually', $year) }}">{{ $year }}</a></td>
                            <td> @money($total) </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection