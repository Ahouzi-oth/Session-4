<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>prototype</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="cards">

    <?php foreach ($projects as $project): ?>

        <div class="card-terminee <?php
         if($project['status']=="En cours"){
                echo "card-nonterminee ";
          }
           ?>">

            <img src="<?= $project["image"] ?>" alt="img">
            <div class="content">
                <div class="meta-data">
                    <h6><?= $project["id"] ?></h6>
                    <h3><?= $project["title"] ?></h3>
                    <p><?= $project["description"] ?></p>
                </div>

                <div class="sub-infos">
                <div class="technologies">
                    <?php foreach ($project["technologies"] as $technologie): ?>
                        <span><?= $technologie ?></span>
                    <?php endforeach; ?>
                </div>
                <div class="span">
                <span class="cat"><?= $project["category"] ?></span>
                <span class="statu-terminee <?php
         if($project['status']=="En cours"){
                echo "statu-en-coure ";
          }
           ?>">
           <?= $project["status"] ?></span>
           </div>
            </div>
            </div>

            
        </div>

        <?php endforeach; ?>


    </div>
</body>

</html>