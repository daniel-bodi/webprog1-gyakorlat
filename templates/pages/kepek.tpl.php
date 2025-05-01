<h2>Képgaléria</h2>

<div style="display: flex; flex-wrap: wrap; gap: 16px;">
  <?php foreach ($kepek as $kep): ?>
    <a href="<?= $kep ?>" data-lightbox="galeria">
      <img src="<?= $kep ?>" alt="Galéria kép" style="width: 200px; height: auto; border-radius: 4px;">
    </a>
  <?php endforeach; ?>
</div>

<?php if (isset($_SESSION['login'])): ?>
  <h3>Kép feltöltése</h3>
  <form action="?oldal=kepek" method="post" enctype="multipart/form-data">
    <input type="file" name="ujkep" accept="image/*" required>
    <input type="submit" name="feltolt" value="Feltöltés">
  </form>
<?php else: ?>
  <p><em>Képfeltöltés csak bejelentkezett felhasználók számára elérhető.</em></p>
<?php endif; ?>
