<div>
    @livewire('post.create-post-modal')
    @livewire('post.edit-post-modal')

    @extends('layout.dashboard')
    @section('stats')
    <div class="card">
    <div class="card-header">
        <h4 class="card-title"> Simple Table</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class=" text-primary">
              <th>
                Title
              </th>
              <th>
                quantity
              </th>
              <th>
                Link
              </th>
              <th>
                weight
              </th>
              <th >
                image
              </th>
              <th >
                code
              </th>
              <th>
             Submit price
              </th>
            </thead>
            @foreach($products as $product)
            @if($product->status == 'in_progress' && $product->user_id == Auth::user()->id )
    
            <tbody>
              <tr>
                <td>
                    <li>{{ $product->title }}</li>
    
                </td>
                <td>
                    <li>{{ $product->quantity }}</li>
                </td>
                <td>
                    <li>{{ $product->link }}</li>
                </td>
                <td>
                    <li>{{ $product->weight }}</li>
                </td>
                <td >
                    <li>{{ $product->image }}</li>
                </td>
                <td>
                    <li>{{ $product->code }}</li>
                </td>
                <td>
                    <form action="{{ route('price.editing',$product->id) }}" method="POST">
                        @csrf
                        <input type="number" name="price">
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                <form action="{{ route('status.rejection',$product->id) }}" method="POST">  <div class="card-footer">
                    @csrf
                    <button type="submit" class="btn btn-primary">Reject</button>
                </div></form>
                </td>
    
              </tr>
              @endif
              @endforeach
    
            </tbody>
          </table>
        </div>
      </div>
    </div>
      @endsection
</div>
