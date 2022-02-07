@extends('medicine::master')

@push('main')
<x-content.content>
    <div class="card">
        <x-card.header title="Medicine Type">
            <form action="{{ route('type.store') }}" method="post">
                @csrf
                <x-modal.modal title="Medicine Type">
                    <x-form.input label="Name" name="name"></x-form.input>
                </x-modal.modal>
            </form>
        </x-card.header>
        <x-card.body>
            <x-table.table :headers="['#', 'Name', 'Medicine Count' ,'Action']">
                @foreach ($medicine_types as $type)
                <tr>
                    <td>{{ $loop -> index + 1 }}</td>
                    <td>{{ $type -> name }}</td>
                    <td>{{ $type -> medicines_count }}</td>
                    <td class="d-flex gap-4">
                        <form action="{{ route('type.update', $type -> id) }}" method="post">
                            @csrf
                            {{ method_field('PUT') }}
                            <x-modal.modal btnName="Edit" title="Medicine Update" id="{{ $type -> id }}">
                                <x-form.input label="Name" name="name" value="{{ $type -> name }}"></x-form.input>
                            </x-modal.modal>
                        </form> 
                        <div class="btn btn-danger btn-sm"  onclick="event.preventDefault(); document.getElementById('delete-type-{{ $type -> id }}').submit();">Delete</div>
                        <form id="delete-type-{{ $type->id }}" method="post"
                            action="{{ route('type.destroy', $type -> id) }}"
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
