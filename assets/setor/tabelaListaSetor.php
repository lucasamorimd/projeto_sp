<div class="table-responsive">
  <table class="table">
    <thead class=" text-primary">
      <th>
        ID
      </th>
      <th>
        Setor
      </th>
      <th>
        Coordenador
      </th>
      
    </thead>
    <tbody>
      <?php foreach ($setor as $key) {?>
        
        <tr>
          <td>
            <?php echo $key->id_setor;?>
          </td>                            
          <td>
            <?php echo $key->nome_setor;?>
          </td>
          <td>
            <?php echo $key->coordenador;?>
          </td>

        </tr>
      <?php }?>


    </tbody>
  </table>
</div>
