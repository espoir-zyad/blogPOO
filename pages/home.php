
     <ul>


         <?php foreach (\App\Table\Categorie::all() as $categorie):  ?>
    
            <li><a href="<?= $categorie-> url; ?>"><?= $categorie -> titre; ?></a></li>
    
         <?php endforeach; ?>   


     </ul>

     


     <?php foreach (\App\Table\Article::getLast() as $post):  ?>

       <h2> <a href="<?= $post-> url; ?>"><?= $post -> titre; ?></a> </h2>

       <p><em><?= $post -> categorie; ?></em></p>

       <p> <?= $post -> extrait; ?> </p>

    <?php endforeach; ?>   