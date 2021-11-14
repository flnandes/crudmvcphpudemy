<div class="row container">
    <div class="col s12">
        <h3 class="light">
            Consultas
        </h3>
    </div>
    <div class="col s12">
    <a href="?router=Site/cadastro/" style="color:white;"><button class="btn-small darkblue" style="background-color:darkblue;">Voltar</button></a>
    <hr>
        <table>

            <tr>
                <th>Nome</th><th>E-mail</th><th>Ações</th>
            </tr>

                    <?php
                        foreach ($consulta as $registro):
                    ?>
            <tr>
                <td><?php echo $registro['nome'];?></td>
                <td><?php echo $registro['email'];?></td>
                <td>
                    <a href="?router=Site/editar/&id=<?php echo base64_encode($registro['id']);?>">Editar</a> 
                    | 
                    <a href="?router=Site/confirmaDelete/&id=<?php echo base64_encode($registro['id']);?>" class="red-text">Deletar</a>
                </td>
            </tr>
                    <?php endforeach; ?>
        </table>
        
    </div>
</div>