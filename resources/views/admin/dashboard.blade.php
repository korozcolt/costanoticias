@extends('dashboard')
@section('title-dashboard','Dashboard - Analytics')
@section('content-dashboard')
    <x-graph :data="$chart_data" />
    <x-table :columns="['Date', 'Visitors']">
        @forelse ($visitors as $day)
        <x-table-row :row="[date('d.m.Y', strtotime($day->date)), $day->total]" />
        @empty
        <x-table-row :row="['-', 'No data available']" />
        @endforelse
    </x-table>
@endsection