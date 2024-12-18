<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Transactions</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container{
            width: 100%;
            max-width: 500px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
        }
        .transaction-form{
            text-align: center;
            margin-bottom: 20px;
            color:#333;
            font-size: 1.5em;
        }
        label{
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
            text-align: left;
            margin: 20px;
        }
        input,select{
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1em;
            transition: border 0.3s ease;
        }
        .btn-save{
            background-color: #6c757d;
            color: #fff;
            padding: 10px;
            border: none;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="transaction-form">

    <h1>New Transaction</h1>
    <form action="{{ route('transactions.store') }}" method="post">
        @csrf
        <label for="date">Date</label>
        <input type="date" id="date" name="date" required><br>
        <label for="description">Description</label>
        <input type="text" id="description" name="description" required><br>
        <label for="type">Transaction Type</label>
        <select name="type" id="type" required>
            <option value="credit">Credit</option>
            <option value="debit">Debit</option>
        </select><br>
        <label for="amount">Amount:</label>
        <input type="number" step="0.01" id="amount" name="amount" required><br>
        <button type="submit" class="btn-save">Save</button>
    </form>
                
</div>
</div>
</body>
</html>