<form action="{{ route('paydunya.pay') }}" method="POST">
    @csrf
    <input type="number" name="montant" placeholder="Montant" required>
    <input type="text" name="pays" placeholder="Pays" required>
    <input type="text" name="service_debit" placeholder="Service débité" required>
    <input type="text" name="service_credit" placeholder="Service crédité" required>
    <button type="submit">Transférer</button>
</form>
