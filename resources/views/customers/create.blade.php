<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h1>Add Customer</h1>
        <form action="{{ route('customers.store') }}" method="POST">
            @csrf
            <div class="form-group half">
                <label for="type">Address</label>
                <select name="address" id="type" required>
                    <option value="">Select</option>
                    <option value="1">Ghatia</option>
                    <option value="2">Nagrakata</option>
                </select>
            </div>
            <div class="form-group half">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="form-group half">
                <label for="mobile">Mobile</label>
                <input type="text" name="mobile" id="address" required>
            </div>
            <div class="form-group full">
                <label for="business-duration">Amount Paid</label>
                <div style="display: flex; gap: 10px;">
                    <input type="number" name="amount_paid" placeholder="" min="0">
                </div>
                <label for="business-duration">Number of Jars Taken</label>
                <div style="display: flex; gap: 10px;">
                    <input type="number" name="jar_taken" placeholder="" min="0">
                </div>
                <label for="business-duration">Number of Jars Return</label>
                <div style="display: flex; gap: 10px;">
                    <input type="number" name="jar_return" placeholder="" min="0">
                </div>
            </div>
            <div class="form-group full">
                <button type="submit">Create</button>
            </div>
        </form>
    </div>
</body>
</html>
