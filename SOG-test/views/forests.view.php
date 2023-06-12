<?php require('head.php');?>

<header >
    <h1 class="text-3xl font-bold my-10"><?=$forestName?></h1>
</header>
<?php $fireCount = count($forestsDetail)?>

<h2 class="text-xl my-8">Total Number of Fires <span class="text-red-500"><?=$fireCount?></span></h2>

<table class="border-solid border-black border-2">
    <tr>
        <th class="p-2 border-solid border-black border-2">Fire Year</th>
        <th class="p-2 border-solid border-black border-2">Date Discovered</th>
        <th class="p-2 border-solid border-black border-2">Fire Name</th>
        <th class="p-2 border-solid border-black border-2">Cause of Fire</th>
        <th class="p-2 border-solid border-black border-2">Acres Burned</th>
        <th class="p-2 border-solid border-black border-2">FPA id</th>
    
    <?php foreach($forestsDetail as $detail):?>
        </tr>
            <td class="p-2 border-solid border-black border-2"><?=$detail['FIRE_YEAR']?></td>
            <td class="p-2 border-solid border-black border-2"><?=$detail['DISCOVERY_DATE']?></td>
            <td class="p-2 border-solid border-black border-2"><?=$detail['FIRE_NAME']?></td>
            <td class="p-2 border-solid border-black border-2"><?=$detail['STAT_CAUSE_DESCR']?></td>
            <td class="p-2 border-solid border-black border-2"><?=$detail['FIRE_SIZE']?></td>
            <td class="p-2 border-solid border-black border-2"><?=$detail['FPA_ID']?></td>
        </tr>
    
    <?php endforeach; ?>
</table>

<button class="my-10 text-blue-500 hover:underline"><a href="/">Back</button>
    