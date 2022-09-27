
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hcaptcha Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src='https://www.hCaptcha.com/1/api.js' async defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
    <?php 
        $sitekey = "10000000-ffff-ffff-ffff-000000000001";
        $secret = "0x0000000000000000000000000000000000000000";
    ?>
    <div class="container">
        <form action="hcap.php" method="post" id="abc">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter name" value="Joyal George">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Phone</label>
                <input type="text" class="form-control" name="phone" placeholder="Enter phone" value="0123456789">
            </div>
            <div class="h-captcha" data-sitekey="<?php echo $sitekey;?>"></div>
            <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
        </form>
    </div>
<script>
    // $("#abc").submit(function(event) {  
    //     console.log("helo");
    //     var hcaptchaVal = $('[name=h-captcha]').value;
    //     if (hcaptchaVal === "") {
    //         event.preventDefault();
    //         alert("Please complete the hCaptcha");
    //     }       
    // });
</script>
</body>
</html>