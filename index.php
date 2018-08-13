<html>
    <form>
        <input name="num1" type="password" placeholder="Number1">
        <input name="num2" type="number" placeholder="Number2">
        <select name="operator">
            <option>None</option>
            <option value="add">Add</option>
            <option value="sub">Subtract</option>
            <option value="mul">Multiply</option>
            <option value="div">Divide</option>
        </select>
        <button type="submit" name="submit" value="submit">Calculate</button>
    </form>
    <p>Answer</p>
    <?php
    if (isset($_GET['submit'])){
        $number1 = $_GET['num1'];
        $number2 = $_GET['num2'];
        $operator = $_GET['operator'];
        switch($operator){
            case 'add': echo $number1+$number2;
                        break;
            case 'sub': echo $number1-$number2;
                        break;
            case 'mul': echo $number1*$number2;
                        break;
            case 'div': echo $number1/$number2;
                        break;
            default: echo "Invalid operator";
        }
    }
    ?>
</html>

