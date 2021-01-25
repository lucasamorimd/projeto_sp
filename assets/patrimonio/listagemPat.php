<table class="table">
  <thead class=" text-primary">
    <th>
      N° do Patrimônio
    </th>
    <th>
      Setor
    </th>
    <th>
      Descrição
    </th>
    <th>
      Unidade
    </th>
    <th>
      Marca
    </th>
    <?php if($perfil == 1){?>

      <th>Editar</th>
      <th>Trocar</th>
      <th>Realocações</th>
    <?php }else{ ?>
      <th>Realocações</th>

    <?php } ?>
  </thead>

  <tbody>
    <?php foreach ($patri as $key) {

      ?>
      
      <tr>
        <td>
          <?php echo $key->id_patrimonio;?>
        </td>                            
        <td>
          <?php echo $key->nome_setor;?>
        </td>
        <td>
          <?php echo $key->descricao;?>
        </td>
        <td>
          <?php echo $key->unidade;?>
        </td>
        <td>
          <?php echo $key->marca;?>
        </td>


        <?php if($perfil == 1):?> <!-- SE FOR COORDENADOR LOGADO-->
        <td class="td-actions text-center">
          <a href="cadastraPatrimonio.php?patrimonio=<?php echo base64_encode($key->id_patrimonio);?>">

            <button type="button" rel="tooltip" title="Editar informações" class="btn btn-primary btn-link btn-sm">
              <i class="material-icons">edit</i>
            </button>
          </a>
        </td>
        <td class="td-actions text-center">
          <a href="cadastraTroca.php?patrimonio=<?php echo base64_encode($key->id_patrimonio);?>">
            <button type="button" rel="tooltip" title="Realizar troca" class="btn btn-danger btn-link btn-sm">
              <i class="material-icons">compare_arrows</i>
            </button></a>
          </td>
          <td class="td-actions text-center">
            <a href="listaTrocas.php?trocasid=<?php echo base64_encode($key->id_patrimonio);?>">
              <button type="button" rel="tooltip" title="Listagem de trocas" class="btn btn-danger btn-link btn-sm">
                <i class="material-icons">library_books</i>
              </button></a>
            </td> 
            <?php else:?> <!-- SE FOR FUNCIONÁRIO LOGADO -->
            <td class="td-actions text-center">
              <a href="listaTrocas.php?trocasid=<?php echo base64_encode($key->id_patrimonio);?>">
                <button type="button" rel="tooltip" title="Listagem de trocas" class="btn btn-danger btn-link btn-sm">
                  <i class="material-icons">library_books</i>
                </button></a>
              </td>
            <?php endif;?>

          </tr>
        <?php }?>


      </tbody>
    </table>


    <?php if($p_a >= 2 && $p_a < $paginas ): ?>
      <ul class="pagination justify-content-end">
        <li class="page-item">
          <a class="page-link" href="listaPatrimonio.php?p=1>">Início</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="listaPatrimonio.php?p=<?=$anterior?>">Anterior</a>
        </li>
        <li class="page-item"><a class="page-link"><?php echo $p_a."/".$paginas;?></a></li>
        <li class="page-item">
          <a class="page-link" href="listaPatrimonio.php?p=<?=$proxima?>">Próxima</a>
        </li>
      </ul>

      <?php elseif($p_a == 1 && $paginas > 1): ?>
        <ul class="pagination justify-content-end">
          <li class="page-item"><a class="page-link"><?php echo $p_a."/".$paginas;?></a></li>
          <li class="page-item">
            <li class="page-item">
              <a class="page-link" href="listaPatrimonio.php?p=<?=$proxima?>">Próxima</a>
            </li>
          </ul>
          <?php elseif($p_a>1 && $p_a == $paginas): ?>
            <ul class="pagination justify-content-end">
              <li class="page-item">
                <a class="page-link" href="listaPatrimonio.php?p=1">Início</a>
              </li>

              <li class="page-item">
                <a class="page-link" href="listaPatrimonio.php?p=<?=$anterior?>">Anterior</a>
              </li>
              <li class="page-item"><a class="page-link"><?php echo $p_a."/".$paginas;?></a></li>
              <li class="page-item">
                <li class="page-item disabled">
                  <a class="page-link" href="javascript:;" tabindex="-1">Próxima</a>
                </li>
              </ul>

            <?php endif;?> 
