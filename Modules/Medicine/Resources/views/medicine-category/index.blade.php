@extends('medicine::master')

@push('main')
<x-content.content>
    <div class="card">
        <x-card.header title="Medicine">
            <div class="btn btn-light-primary btn-sm">New</div>
        </x-card.header>
        <x-card.body>
            <x-table.table :headers="['#', 'Name', 'Medicine Count' , 'Status' ,'Action']">
                @foreach ($medicine_categories as $category)
                <tr>
                    <td>{{ $loop -> index + 1 }}</td>
                    <td>{{ $category -> name }}</td>
                    <td>{{ $category -> medicines_count }}</td>
                    <td>
                        <x-toggle.toggle status='{{ $category -> status }}'></x-toggle.toggle>
                    </td>
                    <td></td>
                </tr>
                @endforeach
            </x-table.table>
        </x-card.body>
    </div>
</x-content.content>
@endpush
