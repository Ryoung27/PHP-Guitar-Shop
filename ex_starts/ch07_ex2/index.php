<?php 
    //set default value of variables for initial page load
    if (!isset($investment)) { $investment = '10000'; } 
    if (!isset($interest_rate)) { $interest_rate = '5'; } 
    if (!isset($years)) { $years = '5'; } 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Future Value Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<body>
    <main>
    <h1>Future Value Calculator</h1>
    <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo $error_message; ?></p>
    <?php } // end if ?>
    <form action="display_results.php" method="post">

        <div id="data">

            <label>Investment:</label>
            <select name="investment">
            <?php for ($invest = 10000; $invest <= 50000; $invest += 5000) : ?>
                <option value="<?php echo $invest; ?>"><?php echo $invest; ?>
                </option>
            <?php endfor; ?>
            </select>
           <!-- <label>Investment Amount:</label>
            <input type="text" name="investment"
                   value="<?php echo $investment; ?>"/><br> -->

            <label>Interest Rate:</label>
            <select name="interest_rate">
            <?php for ($int =4; $int <=12; $int+= .5) : ?>
                <option value="<?php echo $int; ?>"><?php echo $int; ?>
                </option>
            <?php endfor; ?>
            </select>
            <!--<label>Yearly Interest Rate:</label>
            <input type="text" name="interest_rate"
                   value="<?php echo $interest_rate; ?>"/><br>-->

            <label>Number of Years:</label>
            <input type="text" name="years"
                   value="<?php echo $years; ?>"/><br>
        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"/><br>
        </div>

    </form>
    </main>
</body>
</html>