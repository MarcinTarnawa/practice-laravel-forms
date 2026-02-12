<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <form action="/expenses" method="post" class="row g-3">
        @csrf
        <div class="col-md-4">
            <input type="date" name="date" class="form-control" placeholder="Data" required>
        </div>
        <div class="col-md-6">
            <input type="number" name="amount" class="form-control" placeholder="Kwota" required>
        </div>
        <div class="col-md-6">
            <input type="text" name="description" class="form-control" placeholder="Opis wydatków" required>
        </div>
        <div class="col-md-6">
            <select name="category" id="category" class="form-control" required>
                <option value="" disabled selected>Wybierz kategorię</option>
                <option value="expense">Wydatki</option>
                <option value="income">Przychody</option>
            </select>
        </div>

        <div class="col-md-2">
            <button type="submit" class="btn btn-success w-100">
                Zapisz
            </button>
        </div>
        <div> <a href="/expenses">Back</a></div>
        @if($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <p class="mb-0">{{ $error }}</p>
            @endforeach
        </div>
        @endif
    </form>
</body>

</html>