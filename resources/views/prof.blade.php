<h2>Liste des réclamations</h2>

<table border="1">
    <tr>
        <th>Nom</th>
        <th>Matière</th>
        <th>Message</th>
        <th>Statut</th>
    </tr>

    @foreach($reclamations as $rec)
    <tr>
        <td>{{ $rec->etudiant_nom }}</td>
        <td>{{ $rec->matiere }}</td>
        <td>{{ $rec->message }}</td>
        <td>{{ $rec->statut }}</td>
        <td>
           <a href="/reclamation/valider/{{ $rec->id }}">✅ Valider</a>
           <a href="/reclamation/rejeter/{{ $rec->id }}">❌ Rejeter</a>
        </td>
    </tr>
    @endforeach
    <td style="color:
    {{$rec->statut == 'validé' ? 'green' : ($rec->statut == 'rejeté' ? 'red' : 'orange')}}">
        {{$rec->statut}}
    </td>
</table>