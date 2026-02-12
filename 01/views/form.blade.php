<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="/form" method="post" class="row g-3">
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
            <div class="col-md-2">
                <button type="submit" class="btn btn-success w-100">
                    <i class="bi bi-plus-lg"></i> Zapisz
                </button>
            </div>
        </form>
</body>
</html>