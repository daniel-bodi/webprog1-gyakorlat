<h2>Kapcsolat</h2>

<div class="form-container">
  <form id="kapcsolat-form" action="?oldal=kapcsolat" method="post">
    <label for="nev">Név:</label>
    <input type="text" id="nev" name="nev">

    <label for="email">Email:</label>
    <input type="text" id="email" name="email">

    <label for="uzenet">Üzenet:</label>
    <textarea id="uzenet" name="uzenet" rows="5"></textarea>

    <input type="submit" name="kuldes" value="Küldés">
  </form>
</div>

<?php if (isset($_SESSION['uzenet_sikeres'])): ?>
  <script>
    alert("Sikeres üzenetküldés!");
  </script>
  <?php unset($_SESSION['uzenet_sikeres']); ?>
<?php endif; ?>


<script src="./scripts/kapcsolat.js"></script>
