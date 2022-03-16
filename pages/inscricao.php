<?php require_once '../includes/header.php'; ?>

<section></section>

<div class="banner">

  <div class="conteudo">
    <h3>Descubra o melhor para você!</h3>
    <span>Vamos encontrar o seu perfil.</span>
    <br><br><br><br>
  </div>

</div>

<br><br><br><br><br>

<div class="progressbar">

  <div class="progress" id="progress"></div>

  <div class="progress-step progress-step-active" data-title=""></div>
  <div class="progress-step" data-title=""></div>
  <div class="progress-step" data-title=""></div>

</div>

<br><br><br><br>

<form action="../src/utilities/inscricao.php" class="form" method="POST">

  <div class="form-step form-step-active">

    <div class="input-group">
      <span for="nome">Seu nome:</span>
      <input type="text" name="nome" id="nome" placeholder="digite seu nome completo" required>
      <span class="error"></span>
    </div>

    <div class="input-group">
      <span for="position">Data de Nascimento:</span>
      <input type="date" name="position" id="position" required>
      <span class="error"></span>
    </div>

    <div class="input-group">
      <span for="phone">O seu CPF:</span>
      <input type="text" name="cpf" id="cpf" placeholder="digite os números do seu CPF" onkeyup="cpfCheck(this)" onkeydown="javascript: fMasc( this, mCPF );" maxlength="14" required>
      <span class="error"></span>
     </div>

    <div class="">
      <a href="#" class="btn btn-next width-50 ml-auto">Próximo</a>
    </div>

  </div>

  <div class="form-step">

    <div class="input-group">
      <span for="">CEP:</span>
      <input type="text" id="cep" name="cep" value="" onblur="pesquisacep(this.value);" pattern="[\d]{5}-?[\d]{3}" onKeyPress="MascaraGenerica(this, 'CEP');" required>
      <span class=""></span>
    </div>

    <div class="input-group">
      <span for="">Logradouro:</span>
      <input type="text" id="rua" name="rua" required>
      <span class="error"></span>
    </div>

    <div class="input-group">
      <span for="">Número:</span>
      <input type="text" id="numero" name="numero" title="Apenas números!" onkeypress="return somenteNumeros(event)" required>
      <span class="error"></span>
    </div>

    <div class="input-group">
      <span for="">Bairro:</span>
      <input type="text" id="bairro" name="bairro" required>
      <span class="error"></span>
    </div>

    <div class="input-group">
      <span for="">Estado:</span>
      <select required>
        <option selected>Selecionar Estado</option>
        <option value="ac">Acre</option>
        <option value="al">Alagoas</option>
        <option value="am">Amazonas</option>
        <option value="ap">Amapá</option>
        <option value="ba">Bahia</option>
        <option value="ce">Ceará</option>
        <option value="df">Distrito Federal</option>
        <option value="es">Espírito Santo</option>
        <option value="go">Goiás</option>
        <option value="ma">Maranhão</option>
        <option value="mt">Mato Grosso</option>
        <option value="ms">Mato Grosso do Sul</option>
        <option value="mg">Minas Gerais</option>
        <option value="pa">Pará</option>
        <option value="pb">Paraíba</option>
        <option value="pr">Paraná</option>
        <option value="pe">Pernambuco</option>
        <option value="pi">Piauí</option>
        <option value="rj">Rio de Janeiro</option>
        <option value="rn">Rio Grande do Norte</option>
        <option value="ro">Rondônia</option>
        <option value="rs">Rio Grande do Sul</option>
        <option value="rr">Roraima</option>
        <option value="sc">Santa Catarina</option>
        <option value="se">Sergipe</option>
        <option value="sp">São Paulo</option>
        <option value="to">Tocantins</option>
      </select>
    </div>

    <div class="input-group">
      <span for="">Cidade</span>
      <input type="text" id="cidade" name="cidade" required>
      <span class="error"></span>
    </div>

    <div class="input-group">
      <span for="email">Contato:</span>
      <input id="prependedtext" name="contato" type="text" placeholder="(00) 00000-0000" maxlength="15" onKeyPress="MascaraGenerica(this, 'TELEFONE');" required>
      <span class="error"></span>
    </div>

    <div class="btns-group">
      <a href="#" class="btn btn-prev">Anterior</a>
      <button href="#" class="btn btn-next">Próximo</button>
    </div>

  </div>

  <div class="form-step">

  <div class="input-group">
      <span for="email">E-mail:</span>
      <input type="email" name="email" id="password" required>
      <span class="error"></span>
    </div>

    <div class="input-group">
      <span for="password">Password</span>
      <input type="password" name="password" id="password" required>
      <span class="error"></span>
    </div>

    <div class="input-group">
      <span for="confirmPassword">Confirm Password</span>
      <input type="password" name="confirmPassword" id="confirmPassword" required>
      <span class="error"></span>
    </div>

    <div class="btns-group">
      <a href="#" class="btn btn-prev">Anterior</a>
      <button type="submit" value="Se inscrever" class="btn" onclick="validar()">Se inscrever</button>
    </div>

  </div>

</form>

<?php require_once '../includes/footer.php'; ?>