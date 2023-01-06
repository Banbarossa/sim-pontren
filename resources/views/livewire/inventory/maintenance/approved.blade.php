<div>
    <form wire:submit.prevent="update">
        <div>
           @error('catatan')
              <small class="text-danger">{{ $message }}</small>
           @endError
           <h5 class="mb-2">Catatan</h5>
           <textarea wire:model="catatan" class="form-control @error('catatan')  is-invalid @endError" rows="8"></textarea>                       
        </div>
        <div class="text-end mt-4">
           <button type="submit" class="btn btn-success px-5">Approve</button>
           {{-- <button type="submit" wire:model="cancel"value=4 class="btn btn-warning px-5">Cancel</button> --}}
        </div> 
     </form> 

</div>
