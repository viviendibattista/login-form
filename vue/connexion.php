<?php
require_once(('vue/head.php'));
?>

<body>
  <?php
  require_once(('vue/navigation.php'));
  ?>
  <main role="main" class="container">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <h1 class="mt-5 mb-3 text-center">Identification</h1>
        <p class="text-center text-muted mb-5">Merci de saisir votre login et votre mot de passe &#128522;</p>


        <form method="post" action="index.php">
          <div class="form-group mt-5">
            <label for="username">Email / Login</label>
            <input type="text" placeholder="Saisissez votre login" name="login" class="form-control" required autofocus>
            <input type="hidden" name="controleur" value="Connect">
            <input type="hidden" name="action" value="login">
          </div>

          <div class="form-group mt-4">
            <label for="username">Mot de passe</label>
            <input type="password" placeholder="Saisissez votre mot de passe" name="password" class="form-control" required>
            <span class="invalidFeedback">
              <?php echo $data['msgErreur']; ?>
            </span>
          </div>


          <div class="d-grid gap-2 mt-5">
            <button class="btn btn-lg btn-primary" id="submit" type="submit">
              Se connecter
            </button>
          </div>
        </form>

      </div>
    </div>
  </main>
</body>

<?php
require_once(('vue/footer.php'));
?>

</html>