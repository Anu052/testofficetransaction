<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Office Transactions</title>

</head>
<body>
    <h1>Office Transactions</h1>
    <a href="{{ route('transactions.create') }}">+ Add Transaction</a>
    <table border="1">
        <thead>
            <tr>
                <th>Date</th>
                <th>Description</th>
                <th>Credit</th>
                <th>Debit</th>
                <th>Running Balance</th>
            </tr>
        </thead>
        <tbody>
            @php $runningBalance=0; @endphp

            @foreach($transactions as $transaction)
            <tr>
                <td>{{ $transaction->date }}</td>
                <td>{{ $transaction->description }}</td>
                <td>{{ $transaction->type === 'credit'? number_format($transaction->amount,2) : '-' }}</td>
                <td>{{ $transaction->type === 'debit'? number_format($transaction->amount,2) : '-' }}</td>
                <td>{{ number_format($transaction->running_balance,2) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>