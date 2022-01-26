<?php require_once '../includes/header.php'; ?>

<section></section>

<div class="banner">

  <div class="conteudo">
    <h3>Descubra o melhor para você!</h3>
    <span>Vamos encontrar o seu perfil.</span>
    <br><br><br><br>
  </div>

</div>

<br><br><br><br>

<div class="progressbar">

  <div class="progress" id="progress"></div>

  <div class="progress-step progress-step-active" data-title=""></div>
  <div class="progress-step" data-title=""></div>
  <div class="progress-step" data-title=""></div>
  <div class="progress-step" data-title=""></div>

</div>

<br><br><br><br>

<form action="#" class="form">

  <div class="form-step form-step-active">

    <div class="input-group">
      <span for="username">Seu nome:</span>
      <input type="text" name="username" id="username" placeholder="digite seu nome completo" required />
    </div>

    <div class="input-group">
      <span for="position">Data de Nascimento:</span>
      <input type="date" name="position" id="position" />
    </div>

    <div class="">
      <a href="#" class="btn btn-next width-50 ml-auto">Next</a>
    </div>

  </div>

  <div class="form-step">

    <div class="input-group">
      <span for="phone">Phone</span>
      <input type="text" name="phone" id="phone" />
    </div>

    <div class="input-group">
      <span for="email">Email</span>
      <input type="text" name="email" id="email" />
    </div>

    <div class="btns-group">
      <a href="#" class="btn btn-prev">Previous</a>
      <a href="#" class="btn btn-next">Next</a>
    </div>

  </div>

  <div class="form-step">

    <div class="input-group">
      <span for="dob">Date of Birth</span>
      <input type="date" name="dob" id="dob" />
    </div>

    <div class="input-group">
      <span for="ID">National ID</span>
      <input type="number" name="ID" id="ID" />
    </div>

    <div class="btns-group">
      <a href="#" class="btn btn-prev">Previous</a>
      <a href="#" class="btn btn-next">Next</a>
    </div>

  </div>

  <div class="form-step">

    <div class="input-group">
      <span for="password">Password</span>
      <input type="password" name="password" id="password" />
    </div>

    <div class="input-group">
      <span for="confirmPassword">Confirm Password</span>
      <input type="password" name="confirmPassword" id="confirmPassword" />
    </div>

    <div class="btns-group">
      <a href="#" class="btn btn-prev">Previous</a>
      <input type="submit" value="Submit" class="btn" />
    </div>

  </div>

</form>

<?php require_once '../includes/footer.php'; ?>