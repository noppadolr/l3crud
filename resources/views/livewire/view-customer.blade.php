<div class="offset-3 col-6 mt-5">
    <div class="card">
        <div class="card-header">
          View Customer
        </div>
        <div class="card-body">
          <h5 class="card-title">Customer Detial {{ $customer->id }}</h5>
          <p class="card-text">{{ $customer->name }}</p>
          <p class="card-text">{{ $customer->email }}</p>
          <p class="card-text">{{ $customer->phone }}</p>
          <a wire:navigate href="/customers" class="btn btn-primary mt-3">Back</a>
        </div>
      </div>
</div>
