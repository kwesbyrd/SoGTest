<?php require('head.php');?>
    <header >
        <h1 class="text-3xl font-bold my-2">Where should I hike?</h1>
    </header>
    <h2 class="text-xl my-6">Click on a potential hiking destination to learn about fires in that area</h2>
    <ul>
        <?php foreach($forests as $forest):
            $forestForUrl = str_replace(' ','-',$forest)?>
            <li>
                <a href="/forests?forest=<?=$forestForUrl?>" class="text-blue-500 hover:underline">
                <?= $forest ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
    </body>
</html>
