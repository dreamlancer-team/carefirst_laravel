@extends('medicine::master')

@push('main')
<x-content.content>
    <div class="card">
        <x-card.header title="Medicine">
            <form action="{{ route('medicine.store') }}" method="post">
                @csrf
                <x-modal.modal title="Medicine">
                    <x-form.input label="Name" name="name"></x-form.input>
                    <x-form.option label="Brand" name="brand" :items="$brands"></x-form.option>
                    <x-form.option label="Category" name="category" :items="$categories"></x-form.option>
                    <x-form.option label="Type" name="type" :items="$types"></x-form.option>
                </x-modal.modal>
            </form>
        </x-card.header>
        <x-card.body>
            <x-table.table :headers="['#', 'Name', 'Brand', 'Category', 'Type', 'Action']">
                @foreach ($medicines as $medicine)
                <tr>
                    <td>{{ $loop -> index + 1 }}</td>
                    <td>{{ $medicine -> name }}</td>
                    <td>{{ $medicine -> medicine_brand -> name }}</td>
                    <td>{{ $medicine -> medicine_category -> name }}</td>
                    <td>{{ $medicine -> medicine_type -> name  }}</td>
                    <td class="d-flex gap-4">
                        <form action="{{ route('medicine.update', $medicine -> id) }}" method="post">
                            @csrf
                            {{ method_field('PUT') }}
                            <x-modal.modal btnName="Edit" title="Medicine Update" id="{{ $medicine -> id }}">
                                <x-form.input label="Name" name="name" value="{{ $medicine -> name }}"></x-form.input>
                            </x-modal.modal>
                        </form> 
                        <div class="btn btn-danger btn-sm"  onclick="event.preventDefault(); document.getElementById('delete-medicine-{{ $medicine -> id }}').submit();">Delete</div>
                        <form id="delete-medicine-{{ $medicine->id }}" method="post"
                            action="{{ route('medicine.destroy', $medicine -> id) }}"
                            style="display: none">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                        </form>
                    </td>
                </tr>
                @endforeach
            </x-table.table>
        </x-card.body>
    </div>
</x-content.content>
@endpush
