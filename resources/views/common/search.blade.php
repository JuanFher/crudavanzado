<div class="row justify-content-between mb-4 mt-3">
    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="input-group ">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                        <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
            </span>
        </div>
        <input type="text" wire:model="search" class="form-control" placeholder="Buscar.." aria-label="notification" aria-describedby="basic-addon1">
    </div>
</div>
    <div class="col-md-2 col-lg-2 col-sm-12 mt-2 mb-2 text-right mr-2">
        <button type="button" wire:click="doAction(2)" class="btn btn-dark">
        <i class="la la-file la-lg"></i>
        </button>
    </div>
</div>