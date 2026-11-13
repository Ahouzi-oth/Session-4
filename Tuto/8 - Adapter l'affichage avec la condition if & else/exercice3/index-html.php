<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Ma Todo List</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <header>
            <div class="logo">☑</div>
            <div>
                <h1>Ma Todo List</h1>
                <p>Gérez et suivez vos tâches quotidiennes</p>
            </div>
        </header>

        <div class="stats">

            <div class="stat">
                <div class="icon blue">▱</div>
                <div>
                    <p>Total</p>
                    <h2><?php echo count($taches);?></h2>
                    <span>tâches</span>
                </div>
            </div>

            <div class="stat">
                <div class="icon green">✓</div>
                <div>
                    <p>Terminées</p>
                    <h2><?php 
                    $tacheterminee = 0 ;

                    foreach ($taches as $tache){
                        if ($tache['terminee']){
                            $tacheterminee++;
                        }
                    }
                    echo $tacheterminee;
                    
                    ?></h2>
                    <span>tâches</span>
                </div>
            </div>

            <div class="stat">
                <div class="icon gray">◯</div>
                <div>
                    <p>Non terminées</p>
                    <h2><?php 
                    $tachenonterminee = 0 ;
                    
                    foreach ($taches as $tache){
                        if ($tache['terminee'] == false){
                            $tachenonterminee++;
                        }
                    } 
                    echo $tachenonterminee;
                    
                    ?></h2>
                    <span>tâches</span>
                </div>
            </div>

        </div>

        <div class="title">
            <h2>☷ Liste des tâches</h2>
            <div></div>
        </div>

        <div class="tasks">

        <?php foreach ($taches as $tache): ?>

            <div class="task <?php 
            if($tache['terminee'] ){
                echo "task-terminee ";
            }
                 ?>">
                <input type="checkbox" <?php if ($tache['terminee']){
                    echo "checked";
                } else {
                    echo "";
                } ?> >
                <div class="task-info">
                    <h3><?= $tache['titre'] ?></h3>
                    <p><?= $tache[ 'description'] ?></p>
                </div>
                <span class="priority <?php    
                if ($tache['priorite'] === 'Basse') {
                    echo "low";
                } elseif ($tache['priorite'] === 'Moyenne') {
                    echo "medium";
                } else {
                    echo "high ";
                }
                ?>"><?= $tache['priorite'] ?></span>
                <span class="date"><?= date('d/m/Y' ,strtotime($tache['date_limite'])) ?></span>
            </div>

            <?php endforeach; ?>

        </div>

    </div>

</body>

</html>