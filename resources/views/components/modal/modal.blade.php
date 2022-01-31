<div class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_{{ $id }}">{{ $btnName }}</div>
            <div class="modal fade" tabindex="-1" id="kt_modal_{{ $id }}">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">{{ $title }}</h5>
                        </div>
            
                        <div class="modal-body">
                            {{ $slot }}
                        </div>
            
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">{{ $id ? 'Update' : 'Save' }}</button>
                        </div>
                    </div>
                </div>
            </div>