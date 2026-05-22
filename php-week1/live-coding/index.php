<script src="https://cdn.tailwindcss.com"></script>
<?php



$name = 'Here is Dashboard page';
$description = 'Welcome back, Alice Smith! You are currently enrolled in Web Mobile Application Development but mean dalin muy jo nas (WMAD).';
$product = 18;
$task = 10;
$totalTasks = 10;
$age = $totalTasks > 0 ? ($task / $product) * 50 : 0;


?>
<div class="justify-center p-10 w-[35%] align-center m-auto block">
    <div class="block justify-center rounded-xl bg-gray-200 py-10 aligin-center">
        <div class="flex text-bold justify-center text-purple-600 text-4xl"><?php echo $name; ?></div>
        <div class="mt-5 flex justify-center">
            <span class="text-sm text-3xl text-center "><?php echo $description; ?></span>
        </div>
        <div class="text-xl text-center"><?php echo $age; ?></div>
    </div>
    
<div>





