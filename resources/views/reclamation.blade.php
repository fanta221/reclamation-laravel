<h2>Envoyer une réclamation 💛</h2>
<form action="{{ route('reclamation.store') }}" method="POST">
    @csrf

    <input type="text" name="etudiant_nom" placeholder="Votre nom"><br><br>
    <input type="text" name="matiere" placeholder="Matière"><br><br>
    <textarea name="message" placeholder="Votre réclamation"></textarea><br><br>

    <button type="submit">Envoyer</button>
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

</form>