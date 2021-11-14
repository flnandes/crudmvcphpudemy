<div class="row container">
    <div class="col s12">
        <h3 class="light">Edição de Registros</h3>
    </div>

    <div class="col s12">
    <a href="?router=Site/consulta/" style="color:white;"><button class="btn-small darkblue" style="background-color:darkblue;">Voltar</button></a>
    <hr>
        <form action="?router=Site/alterar/" method="post">
            <?php foreach($editarForm as $registros):?>
            <input type="hidden" name="id" value="<?php echo $registros['id'];?>">
            <div class="input-field col s12 m6">
                <input type="text" name="nome" id="nome" value="<?php echo $registros['nome'];?>">
                <label for="nome">Nome:</label>
            </div>
            <div class="input-field col s12 m6">
                <input type="email" name="email" id="email" value="<?php echo $registros['email'];?>" >
                <label for="email">e-mail:</label>
            </div>

            <div class="input-field col s12 m6">
                <input type="submit" value="Atualizar" class="btn-small">
                <input type="reset" value="limpar" class="btn-small red">
            </div>
            <?php endforeach;?>
        </form>
    </div>
</div>