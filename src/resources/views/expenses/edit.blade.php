<form action="/expenses/{{ $expense->id }}" method="POST">
    @csrf
    @method('PATCH')
    
    <input type="text" name="description" value="{{ $expense->description }}" required>
    <input type="number" step="0.01" name="amount" value="{{ $expense->amount }}" required>
    <input type="date" name="date" value="{{ $expense->date }}" required>
    <select name="category" id="category" class="form-control" required>
        <option value="" disabled selected>Wybierz kategorię</option>
        <option value="expense">Wydatki</option>
        <option value="income">Przychody</option>
    </select>
    <button type="submit" class="btn btn-success">Zapisz zmiany</button>
    <a href="/expenses">Anuluj</a>
</form>
