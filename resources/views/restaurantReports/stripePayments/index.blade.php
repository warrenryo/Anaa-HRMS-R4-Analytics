<x-app-layout>
    <div class="panel">
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Customer Name</th>
                        <th>Customer Email</th>
                        <th>Payment Method</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Receipt URL</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($stripe_data['data'] as $data)
                        <tr>
                            <td>{{ $data['billing_details']['name'] }}</td>
                            <td>{{ $data['billing_details']['email'] }}</td>
                            <td>{{ $data['payment_method_details']['card']['brand'] }}</td>
                            <td><i class="fa-solid fa-peso-sign"></i>
                                {{ number_format($data['amount'] / 100, 2, '.', ',') }}</td>
                            <td>
                                @if ($data['paid'] == 'true')
                                    <span class="badge bg-success">Paid</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{$data['receipt_url']}}" target="_blank" class="btn btn-primary">View Receipt</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
