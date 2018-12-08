<div class="container mt-5 pt-5">
    <form class="needs-validation" action="<?php echo(base_url('cadastro')); ?>" method="post" novalidate>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label>Nome:</label>
                <input type="name" name='nome' value="<?php echo set_value ('nome'); ?>"class="form-control" id="inputName" placeholder="Nome" required>
                <div class="invalid-tooltip">
                    O campo nome é Obrigatorio.
                </div>
            </div>
            <div class="form-group col-md-3">
                <label>Sobrenome:</label>
                <input type="name" name='sobrenome' value="<?php echo set_value ('sobrenome'); ?>"class="form-control" id="inputSobre" placeholder="Sobrenome" required>
                <div class="invalid-tooltip">
                    O campo Sobrenome é Obrigatorio.
                </div>

            </div>
        </div>
         <div class="form-row">
            <div class="form-group col-md-6">
                <label>Telefone Movel:</label>
                <input type="telefone" name='telefonemovel' value="<?php echo set_value ('telefone'); ?>"class="form-control" id="inputTelefonemovel" placeholder="(00)00000-0000" required>
                <div class="invalid-tooltip">
                    O campo Telefone é Obrigatorio.
                </div>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
                <label>Telefone fixo:</label>
                <input type="telefone" name='telefonefixo' value="<?php echo set_value ('telefone'); ?>"class="form-control" id="inputTelefonefixo" placeholder="(00)00000-0000" required>
                <div class="invalid-tooltip">
                    O campo Telefone é Obrigatorio.
                </div>
            </div>
          </div>
         <div class="form-row">
            <div class="form-group col-md-3">
                <label>RG:</label>
                <input type="rg" name='rg' value="<?php echo set_value ('rg'); ?>"class="form-control" id="inputRG" placeholder="Registro Geral" required>
                <div class="invalid-tooltip">
                    O campo RG é Obrigatorio.
                </div>
            </div>
            <div class="form-group col-md-3">
                <label>CPF:</label>
                <input type="cpf" name='cpf' value="<?php echo set_value ('cpf'); ?>"class="form-control" id="inputCpf" placeholder="CPF" required>
                <div class="invalid-tooltip">
                    O campo Cpf é Obrigatorio.
                </div>

            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>E-mail:</label>
                <input type="email" name='email' value="<?php echo set_value ('email'); ?>" class="form-control" id="inputEmail" placeholder="E-mail" required>
                <div class="invalid-tooltip">
                    O campo E-mail é Obrigatorio.

                </div>
            </div>
        </div>
         <div class="form-row">
            <div class="form-group col-md-3">
                <label>CEP:</label>
                <input type="cep" name='cep' value="<?php echo set_value ('cep'); ?>" class="form-control" id="inputCep" placeholder="CEP" required >
                <div class="invalid-tooltip">
                    O campo CEP é Obrigatorio.

                </div>
                <br>
                <a href="http://www.buscacep.correios.com.br/sistemas/buscacep/default.cfm" target="_blank" class="btn btn-outline-info" role="button" aria-pressed="true">Procurar CEP</a>
            </div>
            <div class="form-group col-md-3">
                <label>Cidade:</label>
                <input type="cidade" name='cidade' value="<?php echo set_value ('cidade'); ?>" class="form-control" id="inputCidade" placeholder="Cidade" required>
                <div class="invalid-tooltip">
                    O campo Cidade é Obrigatorio.

                </div>
            </div>
        </div>
         <div class="form-row">
            <div class="form-group col-md-6">
                <label>Bairro:</label>
                <input type="bairro" name='bairro' value="<?php echo set_value ('bairro'); ?>"class="form-control" id="inpuBairro" placeholder="Bairro" required>
                <div class="invalid-tooltip">
                    O campo Bairro é Obrigatorio.
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Login:</label>
                <input type="login" name='login' value="<?php echo set_value ('login'); ?>"class="form-control" id="inputLogin" placeholder="Login" required>
                <div class="invalid-tooltip">
                    O campo Login é Obrigatorio.
                </div>
            </div>
        </div>
         <div class="form-row">
            <div class="form-group col-md-3">
                <label>Senha:</label>
                <input type="password" name='password' value="<?php echo set_value ('password'); ?>"class="form-control" id="inputPassword" placeholder="Senha" required>
                <div class="invalid-tooltip">
                    O campo Senha é Obrigatorio.
                </div>
            </div>
            <div class="form-group col-md-3">
                <label>Confirmar Senha:</label>
                <input type="password" name='conf_password' value="<?php echo set_value ('conf_password'); ?>"class="form-control" id="inputConfPassword" placeholder="Confiramar Senha" required>
                <div class="invalid-tooltip">
                    O campo Confirmar Senha é Obrigatorio.
                </div>

            </div>
        </div>
          <?php if(isset ($resposta)){ ?>

            <div class='alert alert-<?php echo $resposta[' class '] ;?> alert-dismissible col-md-4 pb-2' role='alert'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
                <?php echo $resposta['message'] ;?>
            </div>
                <?php    } ?>
             <button type="submit" class="btn btn-outline-success">Enviar</button>
    <script type="text/javascript">
            $('#inputPassword');
              console.log("Testes");
    </script>
      </form>
  </div>