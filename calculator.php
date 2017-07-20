<?php declare(strict_types=1);
$result=PHP_INT_MIN;
if (isset($_GET['sum_btn']))
{
    $a = intval($_GET['num_a']);
    $b = intval($_GET['num_b']);
    $operation = $_GET['operation'];
    if ($operation == 'sum')
    {
        $result = $a + $b;
    } else if ($operation == 'div')
    {
        $result = div($a, $b);
    }
}
?>

<form>
    Number 1: <input name="num_a" value="<? isset($_GET['num_a']) ? $_GET['num_a']: 0?>" type="number"/><br/>
    Number 2: <input name="num_b" value="<? isset($_GET['num_b']) ? $_GET['num_b']: 0?>" type="number"/><br>
    <select name="operation">

        <option value="sum">"Sum of them"</option>
        <option value="div">"Divide them"</option>
    </select>

    <?php if ($result != PHP_INT_MIN) : ?>
        Result: <input disabled value="<?=$result;?>"/><br/>
    <?php endif; ?>


    <input type="submit" value="Изчисли" name="sum_btn" />

</form>

<?php
function sum(int $a, int $b) : int
{
return $a+$b;
}

function div(int $a, int $b) : float
{
    return $a / $b;
}


