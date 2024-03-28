<div>
    <br>
    <br>
    <br>
    <button wire:navigate href="/customers/create" class="btn btn-success btn-sm mb-2">Create</button>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>

            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>

            <th>Action</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($customers as $key =>$customer )
          <tr>
            <td scope="row">{{ $key+1 }}</td>

            <td>{{ $customer->name }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->phone }}</td>
            <td>{{ $customer->id }}</td>
            <td>
                <button wire:navigate href="/customer/view/{{ $customer->id }}" class="btn btn-primary btn-sm">View</button>
                <button class="btn btn-secondary btn-sm">Edit</button>
                <button class="btn btn-danger btn-sm">Delete</button>
            </td>
          </tr>

          @endforeach
        </tbody>
      </table>
</div>
