<!DOCTYPE html>
<html lang="en" class="">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>404 | Page Not Found</title>
        <?php include 'includes/meta.php'; ?>
    </head>

    <body class="no-home">

        <!-- Loader -->
        <?php include 'includes/loader.php'; ?>
        <!-- Header -->
        <?php include 'includes/header.php'; ?>

        <main>

            <div class="not-found-wrapper">
                <div class="content-wrapper">
                    <h1 class="h1 text-capitalize">
                        page not found
                    </h1>
                    <p>
                        Sorry, The page you are looking for doesn’t exist. If you think something is broken
                        report a problem
                    </p>
                    <div class="not-found-anchor-wrapper">
                        <a href="javascript:;" class="btnn">
                            <span class="btnn__text">Go to homepage</span>
                            <span class="btnn__icon">
                                <img src="/assets/svg/arrow-right.svg" alt="icon" width="28" height="28"
                                    class="svg-convert" />
                            </span>
                        </a>
                        

                        
                    </div>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <?php include 'includes/scripts.php'; ?>

    </body>

</html>