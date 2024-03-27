<form method="POST" action="{{ route('save.form') }}">
    @csrf
    <label for="answer_field">Sagot:</label>
    <input type="text" id="answer_field" name="answer_field" required>
    <!-- dagdagan mo ng iba pang mga field dito depende sa iyong form -->
    <button type="submit">Ipadala</button>
</form>