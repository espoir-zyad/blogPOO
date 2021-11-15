 <?php

 use \App\App;
 use \App\Table\Categorie;
 use App\Table\Article;

     $categorie = Categorie::find($_GET['id']);
     if ($categorie === false) {
        App::notFound();
     }
     $articles = Article::LastByCategory($_GET['id']);
     $categories = Categorie::all();

?>



     <ul>


         <?php foreach (Categorie::all() as $categorie):  ?>
    
            <li><a href="<?= $categorie -> url; ?>"><?= $categorie -> titre; ?></a></li>
    
         <?php endforeach; ?>   


     </ul>

     <h1><?= $categorie ->titre ?></h1>


     <?php foreach ($articles as $post):  ?>

       <h2> <a href="<?= $post-> url; ?>"><?= $post -> titre; ?></a> </h2>

       <p><em><?= $post -> categorie; ?></em></p>

       <p> <?= $post -> extrait; ?> </p>

    <?php endforeach; ?>   

