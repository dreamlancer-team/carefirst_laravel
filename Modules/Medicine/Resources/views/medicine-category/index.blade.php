<x-app-layout>

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

</x-app-layout>
