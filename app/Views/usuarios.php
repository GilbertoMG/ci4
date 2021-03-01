<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<?php if(count($results) == 0):?>
  
    <p>Não existem usuarios</p>
  
  <?php
  else:
    echo 'TOTAL '. $pager->getTotal();
    ?>
  
      <?= $pager->links() ?>
      
      
    <table class="table table-striped table-sm table-bordered">
    <thead class="thead-dark">
    <tr>
          <th>id</th>
          <th>nome</th>
          <th>email</th>
          <th>Grupo/Acesso</th>
          <th class="text-center">Status</th>
          <th class="text-center w-10">Ações</th>
    </tr>
    </thead>
    <tbody class="bg-light">
    <?php foreach($results as $row):?>
      <tr>
        <td><?= $row->id;?></td>
        <td><?= $row->name;?></td>
        <td><?= $row->email;?></td>
        <td><?= $row->address;?></td>
        <td class="text-center"><?= $row->status == 1 ? 'Ativo' : 'Inativo';?></td>
          <td class="text-center w-10">
          --
          </td>
      </tr>    
    <?php endforeach;?>
    </tbody>
  </table>
  Páginas: <?= $pager->getPageCount();?> Atual <?= $pager->getCurrentPage();?> 
  
  <?php endif;?>
  