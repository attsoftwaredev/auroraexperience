@foreach($datas as $data)
<tr id="product-bulk-delete">
  <td><input type="checkbox" class="bulk-item" value="{{$data->id}}"></td>
    <td>
        {{ $data->user_email }}
    </td>
    <td>
        {{ $data->name }}
    </td>
    <td>
        {{ $data->amount }}
    </td>
    <td>
        {{ $data->payment_method }}
    </td>
    <td>
        {{ $data->transaction_type }}
    </td>
</tr>
@endforeach
