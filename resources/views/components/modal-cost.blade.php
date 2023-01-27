<!-- Modal -->
<div class="modal fade" id="modalAddCost{{ $city->slug }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="cityLabel">New Cost</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            </button>
        </div>
        <form method="POST" action="{{ route('cost.store')}}">
            @csrf
        <div class="modal-body">

            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="name">
            </div>
            <div class="form-group">
                <input type="number" min="1" step="any" class="form-control" name="price" placeholder="0,00">
            </div>
            <div class="form-group">
                <label class="form-label">Tab</label>
                <select name="cost_tab_id" class="form-select mb-3 shadow-none">
                    <option selected="">Select</option>
                    @foreach ($costtabs as $tab)
                    <option value="{{ $tab->id }}">{{ $tab->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="type" placeholder="Type">
            </div>

            <input type="hidden" name="destination_id" value="{{ $destination->id }}" />
            <input type="hidden" name="city_id" value="{{ $city->id }}" />
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="submit" value="Submit">Save</button>
        </div>
        </form>
    </div>
    </div>
</div>
