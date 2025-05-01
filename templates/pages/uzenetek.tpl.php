<h2>Beérkezett üzenetek</h2>

<?php if (isset($uzenetek) && count($uzenetek) > 0): ?>
  <table>
    <thead>
      <tr>
        <th>Időpont</th>
        <th>Név</th>
        <th>Email</th>
        <th>Üzenet</th>
        <th>Felhasználó</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($uzenetek as $u): ?>
        <tr>
          <td><?= $u['datum'] ?></td>
          <td><?= htmlspecialchars($u['nev']) ?></td>
          <td><?= htmlspecialchars($u['email']) ?></td>
          <td><?= nl2br(htmlspecialchars($u['uzenet'])) ?></td>
          <td><?= $u['felhasznalo'] ?: 'Vendég' ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php else: ?>
  <p>Nincs megjeleníthető üzenet.</p>
<?php endif; ?>
