<x-app-layout>
    
@push('content')
<div class="card">
    <div class="card-body">
        <table id="kt_datatable_example_1" class="table table-row-bordered gy-5">
            <thead>
                <tr class="fw-bold fs-6 text-muted">
                    <th>#</th>
                    <th>Name</th>
                    <th>Medicine Count</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($medicine_categories as $category)
                <tr>
                    <td>{{ $loop -> index + 1 }}</td>
                    <td>{{ $category -> name }}</td>
                    <td>{{ $category -> medicines_count }}</td>
                    <td>
                        <div class="badge badge-light-{{ $category -> status ? 'primary' : 'danger'}}">
                            {{ $category -> status ? 'Active' : 'Inactive'}}
                        </div>
                    </td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endpush

</x-app-layout>
