<?php
require __DIR__ . '/../vendor/autoload.php';

$kernel = new Kernel();
?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>PHP Craft 2015 Johannesburg Attendee Bios</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" ></script>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>PHP Craft 2015 Johannesburg Attendee Bios</h1>
            <h2>About</h2>
            <p>Someone decided that it would be a good idea to have a competition at PHP Craft Johannesburg Conference 2015.
                Any attendee can enter by submitting a Pull Request... to any open source project. So we created a project :)</p>

            <p>Please note that this page was made as a joke and should not be taken seriously.</p>

            <div class="alert alert-success" role="alert">
                <p class="text-center">
                    Anyone is welcome to submit a Pull request to the project - most will get accepted.
                    If you are interested in getting involved, please visit
                    <a href="https://github.com/mostertb/phpjhb15-open-bios" target="_blank">our GitHub page</a>
                </p>
            </div>


            <h2>Contents</h2>
            <div class="list-group">
                <?php
                foreach($kernel->getBios() as $index => $bio){
                    echo '<a href="#'.$bio->getSlug().'" class="list-group-item">'.$bio->getName().'</a>'.PHP_EOL;
                }
                ?>
            </div>


            <h2>Bios</h2>
            <?php
            foreach($kernel->getBios() as $index => $bio){
                $fullname = $bio->getName();
                ?>
                <div class="media">
                    <div class="media-left">
                        <a href="#">
                            <img class="media-object" width="64" height="64" src="<?php echo $bio->getProfileImageURL(); ?>" alt="<?php echo $fullname;?>">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo $fullname; ?></h4>
                        <?php echo $bio->getDescription(); ?>
                    </div>
                </div>

                <hr>
                <?php
            } // end bio foreach
            ?>
        </div>
    </div>
</div>

</body>
</html>

