<div class="card offset-3 col-6 mt-5">
    <h5 class="card-header">Add new Customer</h5>
    <div class="card-body">
        <h5 class="card-title"></h5>

        <form wire:submit.prevent = "save">

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input wire:model='name' type="text" class="form-control @error('name')
                    is-invalid
                @enderror" id="name" >
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input wire:model='email' type="email" class="form-control @error('email')
                is-invalid
            @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input wire:model='phone' type="text" class="form-control @error('phone')
                is-invalid
            @enderror" id="phone">
                @error('phone')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>
            <button wire:navigate href="/customers" class="btn btn-secondary btn-sm">Back</button>
            <button type="submit" class="btn btn-primary btn-sm">
                <div wire:loading class="spinner-border spinner-border-sm"></div>
                Submit
            </button>
        </form>

    </div>
</div>
