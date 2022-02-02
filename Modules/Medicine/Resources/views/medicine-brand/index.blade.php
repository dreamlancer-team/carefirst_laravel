@extends('medicine::master')

@push('main')
<x-content.content>
    <div class="card">
        <x-card.header title="Medicine Brand">
            <form action="{{ route('brand.store') }}" method="post">
                @csrf
                <x-modal.modal title="Medicine Brand">
                    <x-form.input label="Name" name="name"></x-form.input>
                </x-modal.modal>
            </form>
        </x-card.header>
        <x-card.body>
            <x-table.table :headers="['#', 'Name', 'Medicine Count' ,'Action']">
                @foreach ($medicine_brands as $brand)
                <tr>
                    <td>{{ $loop -> index + 1 }}</td>
                    <td>{{ $brand -> name }}</td>
                    <td>{{ $brand -> medicines_count }}</td>
                    <td class="d-flex gap-4">
                        <form action="{{ route('brand.show', $brand -> id) }}" method="post">
                            @csrf
                            {{ method_field('PUT') }}
                            <x-modal.modal btnName="Edit" title="Medicine Update" id="{{ $brand -> id }}">
                                <x-form.input label="Name" name="name" value="{{ $brand -> name }}"></x-form.input>
                            </x-modal.modal>
                        </form> 
                        <div class="btn btn-danger btn-sm"  onclick="event.preventDefault(); document.getElementById('delete-brand-{{ $brand -> id }}').submit();">Delete</div>
                        <form id="delete-brand-{{ $brand->id }}" method="post"
                            action="{{ route('brand.destroy', $brand -> id) }}"
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
