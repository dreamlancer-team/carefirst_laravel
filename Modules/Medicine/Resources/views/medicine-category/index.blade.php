@extends('medicine::master')

@push('main')
<x-content.content>
    <div class="card">
        <x-card.header title="Medicine Category">
            <form action="{{ route('category.store') }}" method="post">
                @csrf
                <x-modal.modal title="Medicine Category">
                    <x-form.input label="Name" name="name"></x-form.input>
                </x-modal.modal>
            </form>
        </x-card.header>
        <x-card.body>
            <x-table.table :headers="['#', 'Name', 'Medicine Count' ,'Action']">
                @foreach ($medicine_categories as $category)
                <tr>
                    <td>{{ $loop -> index + 1 }}</td>
                    <td>{{ $category -> name }}</td>
                    <td>{{ $category -> medicines_count }}</td>
                    <td class="d-flex gap-4">
                        <form action="{{ route('category.update', $category -> id) }}" method="post">
                            @csrf
                            {{ method_field('PUT') }}
                            <x-modal.modal btnName="Edit" title="Medicine Update" id="{{ $category -> id }}">
                                <x-form.input label="Name" name="name" value="{{ $category -> name }}"></x-form.input>
                            </x-modal.modal>
                        </form> 
                        <div class="btn btn-danger btn-sm"  onclick="event.preventDefault(); document.getElementById('delete-category-{{ $category -> id }}').submit();">Delete</div>
                        <form id="delete-category-{{ $category->id }}" method="post"
                            action="{{ route('category.destroy', $category -> id) }}"
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
