<html>
<boby>
    <div class="box">
        <form method="post">
            Enter Number1:<input type="Number" name="num1"><br><br>
            Enter Number2:<input type="Number" name="num2"><br><br>
            <input type="submit" value="calculate">
        </form>
    </div>
        <?php
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
                $a=(float)$_POST["num1"];
                $b=(float)$_POST["num2"];

                echo"<div class='result'>";
                echo"<h3>Result</h3>";
                echo"addition:".($a+$b)."<br>";
                echo"subtraction:".($a-$b)."<br>";
                echo"multiplication:".($a*$b)."<br>";
                echo"exponentiation:".($a**$b)."<br>";

                if($b==0)
                {
                    echo"Division:cannot divide by zero<br>";
                    echo"modulus:cannot perform modulus with zero<br>";
                }
                else
                {
                    echo"Division:".($a/$b)."<br>";
                    echo"Division:".($a%$b)."<br>";
                }
                echo"<div>";
            }
            ?>
</boby>
</html>