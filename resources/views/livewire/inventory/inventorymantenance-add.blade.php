<div >
    <hr>
    <form action="" wire:submit.prevent="store">
        <div class="mt-5 mb-3">
            <label for="deskripsi" class="mb-2"><strong>Deskripsi Kerusakan</strong></label>
            <textarea name="deskripsi" class="form-control" wire:model="deskripsi" id="deskripsi" cols="30" rows="10"></textarea>
        </div>
        <div>
            <button type="submit" class="btn btn-secondary">Submit</button>
        </div>
    </form>
</div>
