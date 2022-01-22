<?php require_once 'src/config/conexao.php'; ?>
<?php require_once 'includes/header.php'; ?>

<!-- apresentacao section starts  -->
<section></section>

<div class="banner">

    <div class="conteudo">
        <h3>Vamos preencher seus dados de usuário</h3>
        <span>Preencha todas as informações dos seus dados pessoais</span>
        <br><br><br><br>
    </div>

</div>
<!-- apresentacao section ends -->

<!-- usuario form section starts  -->
<section class="usuario-form" id="usuario-form">

    <form data-aos="zoom-in" data-aos-delay="150">

        <div class="row">
            <h5> Dados Pessoais</h5>

            <div class="inputBox">
                <span>Seu nome completo</span>
                <input type="text" class="form-control" name="nome" required>
            </div>

            <div class="inputBox">
                <span>Data de nascimento</span>
                <input type="date" class="form-control" name="nascimento" id="nascimento" required>
            </div>

            <div class="inputBox">
                <span>CPF:</span>
                <input type="text" class="form-control" id="cpf" name="cpf" onkeyup="cpfCheck(this)" onkeydown="javascript: fMasc( this, mCPF );" maxlength="14" required>
            </div>

        </div>

        <div class="row">
            <h5>Endereço</h5>

            <div class="inputBox">
                <span>CEP:</span>
                <input type="text" class="form-control" id="cep" name="cep" value="" onblur="pesquisacep(this.value);" pattern="[\d]{5}-?[\d]{3}" required>
            </div>

            <div class="inputBox">
                <span>Logradouro:</span>
                <input type="text" class="form-control" id="rua" name="rua" required>
            </div>

            <div class="inputBox">
                <span>Número:</span>
                <input type="text" class="form-control" id="numero" name="numero" title="Apenas números!" onkeypress="return somenteNumeros(event)" required>
            </div>

            <div class="inputBox">
                <span>Complemento:</span>
                <input type="text" class="form-control" id="bairro" name="bairro" required>
            </div>

            <div class="inputBox">
                <span>Bairro:</span>
                <input type="text" class="form-control" id="bairro" name="bairro" required>
            </div>

            <div class="inputBox">
                <span>Estado:</span>
                <div class="input-group">
                    <select class="form-select">
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
            </div>

            <div class="inputBox">
                <span>Cidade:</span>
                <input type="text" class="form-control" id="cidade" name="cidade" required>
            </div>
        </div>


        <div class="row">
            <h5> Dados de Login</h5>

            <div class="inputBox">
                <span>E-mail:</span>
                <input type="email" class="form-control" id="" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" required>
            </div>

            <div class="inputBox">
                <span>Como gostaria de ser chamado?</span>
                <div class="input-group">
                    <input type="text" class="form-control" id="username" placeholder="Username" aria-describedby="inputGroupPrepend3" required>
                </div>
            </div>

            <div class="inputBox">
                <<span>Senha:</span>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?!.*[ !@#$%^&*_=+-]).{6,12}$" title="A senha deve conter 6 a 12 caracteres com pelo menos uma letra maiúscula e um número. Não deve conter símbolos." required>
                        <!--URL generetor https://regexlib.com/ -->
                        <small class="text-muted">
                            Senha deve conter entre 6 e 12 caracteres.
                        </small>
                    </div>
            </div>

            <div class="inputBox">
                <span>Confirmar senha:</span>
                <div class="form-group">
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Password" required>
                    <input type="checkbox" onclick="show()">
                    <small class="text-muted">
                        Mostrar senha.
                    </small>
                </div>
            </div>
        </div>

        <input type="submit" value="Encontrar perfil" class="btn">
        <input type="submit" value="Encontrar perfil" class="btn btn-danger">

    </form>

</section>
<!-- usuario form section ends -->

<?php
require_once 'includes/footer.php';
?>