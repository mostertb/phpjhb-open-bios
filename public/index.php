<?php
require_once __DIR__ . '/../vendor/autoload.php';

$kernel = new \mostertb\PhpJhbOpenBios\Kernel();
?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>PHP Craft Johannesburg Attendee Bios</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" ></script>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>PHP Craft Johannesburg Attendee Bios</h1>

            <h2>About</h2>
            <p>
                Once again this year, a core theme at the <a href="http://phpsouthafrica.com" target="_blank">PHP Craft 2016 Conference</a>
                has been the importance of getting involved in OpenSource projects. This is why we have dusted off the old 'PHP Craft 2015 Open
                Bios' once again.
            </p>

            <p>
                If you have been thinking about getting involved in OpenSource but the whole exercise seems daunting, we invite
                you to sign up a <a href="https://github.com/" target="_blank">GitHub Account</a> and submit a
                <a href="https://help.github.com/articles/about-pull-requests/" target="_blank">Pull Request</a> to the
                the <a href="https://github.com/mostertb/phpjhb-open-bios">phpjhb-open-bios</a> project (the code that generates this
                page) as a way to get you started.
            </p>

            <h2>Why?</h2>
            <p>
                We will accept most Pull Requests and we even provide
                <a href="https://github.com/mostertb/phpjhb-open-bios/blob/master/README.md">instructions</a> as to what to add
                (other submissions are also welcome). The idea is to provide a safe environment in which to practice the
                mechanics of contributing to a GitHub project in order to break down one more barrior between you and one
                of the world's most addictive hobbies.
            </p>

            <div class="alert alert-danger" role="alert">
                <p class="text-center">
                    <strong>Please Note:</strong> Submissions to this project do not count to the JetBrains License competition
                    this year. See the 'History' section below for more details.
                </p>
            </div>

            <p>
                Once you've gotten your feet wet by submitting your first pull request, we recommend that you go have a
                look at Digital Ocean's <a href="https://hacktoberfest.digitalocean.com/" target="_blank">Hacktoberfest</a>
                initiative
            </p>



            <h2>History</h2>
            <p>
                At the PHP Craft Conference 2015 the contributors of this project played a little joke.
            </p>
            <p>
                The 2015 conference organisers had decided to hold a competition to win a
                <a href="https://www.jetbrains.com/phpstorm/" target="_blank">JetBrains PHPStorm</a> license. To enter,
                attendees simply had to submit a Pull Request... to any OpenSource project. So we created a project!
            </p>
            <p>
                <strong>Everyone was disqualified... :)</strong>
            </p>
            <p>
                This year we are trying to go legitimate to see if we can get away with it.
            </p>


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

                        <a name="<?php echo $bio->getSlug(); ?>">
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

