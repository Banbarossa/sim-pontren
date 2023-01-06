<div class="">
    <div class="card-header d-flex justify-content-between mb-3 py-3">
        <div class="col-4 col-md-6 col-lg-8">
            <div class="col-4">
                <select name="perpage" wire:model="perpage" id="perpage" class="form-select">
                    <option value="10">10 Per Page</option>
                    <option value="25">25 Per Page</option>
                    <option value="50">50 Per Page</option>
                </select>
            </div>

        </div>
        <div class="col-8 col-md-6 col-lg-4">
            <input type="text" placeholder="Search" wire:model="search" class="form-control">
        </div>
    </div>
</div>