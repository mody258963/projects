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
          <th class="text-right">
            image
          </th>
        </thead>
        @foreach($product as $products)
        @if($products->status == 'in_progress')

        <tbody>
          <tr>
            <td>1
                      <li>{{ $products->title }}</li>

            </td>
            <td>
                <li>{{ $products->quantity }}</li>
            </td>
            <td>
                <li>{{ $products->link }}</li>
            </td>
            <td>
                <li>{{ $products->weight }}</li>
            </td>
            <td class="text-right">
                <li>{{ $products->image }}</li>
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
