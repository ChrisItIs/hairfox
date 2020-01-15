<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        label.cameraButton {
            display: inline-block;
            margin: 1em 0;

            /* Styles to make it look like a button */
            padding: 0.5em;
            border: 2px solid #666;
            border-color: #EEE #CCC #CCC #EEE;
            background-color: #DDD;
        }

        /* Look like a clicked/depressed button */
        label.cameraButton:active {
            border-color: #CCC #EEE #EEE #CCC;
        }

        /* This is the part that actually hides the 'Choose file' text box for camera inputs */
        label.cameraButton input[accept*="camera"] {
            display: none;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Vertical (basic) form</h2>
    <form action="/action_page.php">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter Full Name" name="name">
        </div>
        <div class="form-group">
            <label for="number">Phone Number:</label>
            <input type="text" class="form-control" id="number" placeholder="Enter Phone Number" name="phone">
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <textarea style="resize:none;" class="form-control rounded-0" id="address" placeholder="Enter Address" name="address" rows="10"></textarea>
        </div>

        <div class="form-group custom-control custom-radio">
            <label for="address">Certified?:</label><br>
            <input type="radio" class="custom-control-input" id="c_yes" name="c_yes" checked>
            <label class="custom-control-label" for="defaultChecked">Yes</label>
            <input type="radio" class="custom-control-input" id="c_no" name="c_no">
            <label class="custom-control-label" for="defaultUnchecked">No</label>

        </div>

        <!-- Default checked -->

        <div class="form-group">
            <label for="number">Experience:</label>
            <textarea style="resize:none;" class="form-control rounded-0" id="experience" placeholder="Enter Experience" name="address" rows="4"></textarea>
        </div>
        <div class="form-group">
            <label class="cameraButton">Take a picture
                <input type="file" accept="image/*;capture=camera">
            </label>
        </div>


        <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>

</body>
</html>
