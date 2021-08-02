<?php

$contents = [
    0 => [
        'title' => 'Le couple React.Js / Symfony',
        'type' => 'Article de veille',
        'description' => "Les avantages de l'association entre Symfony et React dans un projet raconter par les développeurs d'OpenStudio",
        'content' => "Quels sont les avantages d’un travail de développement avec Symfony ?
        Grâce à Symfony, la rapidité de développement est accrue du fait de ses nombreux composants permettant de ne pas réinventer la roue et d’automatiser beaucoup de tâches standards (authentification, vérification des données, couche sécurité de l’application). Ce gain de temps me permet d’être sur le vrai cœur de l’application : la logique métier du client pour lequel on développe. Le développement d’applications est aussi beaucoup plus maintenable grâce à la stabilité apportée par la couche Symfony, qui a aussi l’avantage d’éviter beaucoup d’optimisations manuelles grâce à sa gestion du cache. Les projets sont plus structurés, ce qui réduit énormément le temps alloué à la maintenance ou à des évolutions. Le transfert des connaissances est par conséquent beaucoup plus simple.
        D’un point de vue plus personnel, je trouve les projets Symfony bien structurés et très agréables à manipuler. Malgré la rigueur nécessaire pour se servir de ce framework, il reste très flexible et plaisant à utiliser.

        Autour de Symfony, il y a tout un écosystème associé, (API, les tests unitaires, la sécurité…), quels sont les outils que tu utilises en complément et pourquoi ?
        Lors de développements d’API j’utilise l’outil API platform (https://api-platform.com/), c’est un outil agréable à utiliser et qui permet de s’abstraire d’énormément de problématiques liées aux API. Il propose un système d’auto-documentation des routes, de login, et une sérialisation des données automatiques sous un format standard et des filtres pré-conçus accélérant énormément le développement.

        Concernant les tests, j’utilise généralement PHPUnit qui permet la création et la vérification des tests unitaires facilement. En complément j’utilise également PHP-CS-Fixer et PHPStan pour m’assurer un standard en terme de qualité de code avant même le début des tests.

        Symfony 5 est sorti en 2019, quels sont les changements majeurs par rapport aux versions précédentes ?
        Je pense immédiatement à sa rapidité et surtout à sa facilité d’utilisation. Cette dernière version s’est encore simplifiée en comparaison de Symfony 4 qui était déjà plus facile à utiliser que ses prédécesseurs. Il y a moins de code de configuration à écrire ce qui permet de gagner du temps et donne un projet beaucoup plus propre à la fin. Cette simplicité permet également aux développeurs juniors d’acquérir très vite la pratique de ce framework.

        Qu’est-ce que React.js a changé dans ton travail ?
        En tant que développeur, React.js me permet d’avoir un code beaucoup plus structuré, composable et testable, cela facilite mon travail mais aussi celui des autres membres de l’équipe sur le même projet. Il y a aussi un écosystème de développement simple à prendre en main.

        Quels sont les bénéfices que peuvent en attendre nos clients ?
        Pour les clients, React.js nous permet de créer des interfaces beaucoup plus dynamiques et réactives (pas de rechargement de pages, temps réel, communication et synchronisation de plusieurs composants à divers endroits de la page, …) et donc d’offrir une meilleure expérience utilisateur. Par exemple, Facebook et Instagram tournent intégralement sur du React. Et grâce à React Native on peut facilement réutiliser du code pour créer des applications mobiles.

        Pourquoi privilégier la technologie React.js par rapport à ses concurrentes ?
        En termes de performance, React se défend très bien et devient meilleur à chaque release, mais le facteur décisif est la philosophie du projet React. La philosophie de React est de rester le plus proche possible de javascript natif, en se basant sur des concepts plutôt que des API, ce qui force les développeurs à comprendre ce qu’ils font, ce qui va les rendre bien meilleurs dans leur domaine sur le long terme. Autre avantage, React impose peu de composants (pas de routeur, pas de gestion des requêtes, pas de gestion de l’état), ce qui permet de garder un cœur très léger et flexible, ou d’ajouter des composants de la communauté (qui sont nombreux et bien faits) uniquement si le besoin existe. C’est pour moi la librairie javascript la plus adaptée pour du sur-mesure.",
        'private' => false,
        'published' => true,
        'user' => 'user',
        'categorie' => ['ReactJS', 'Symfony']
    ]
];
