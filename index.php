<html>
    <head>
        <title>05 Task Performance 1</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <!-- php code here-->
        
        <?php
        
            $FirstName = "Juan";
            $LastName = "Dela Cruz";

            $ProgrammingSubjects = array(
                array(
                    "title" => "Web Programming",
                    "topics" => array("HTML, CSS, and JavaScript", "PHP", "ASP.NET"),
                    "logo" => "html.png"
                ),
                array(
                    "title" => "Mobile Programming",
                    "topics" => array("Android", "iOS", "Windows"),
                    "logo" => "android.png"
                ),
                array(
                    "title" => "Desktop Programming",
                    "topics" => array("Java", "C#.Net", "Visual Basic"),
                    "logo" => "java.png"
                )
            );

            $Menu = array(
                "Home",
                "Subjects",
                "Assignments",
                "Quiz",
                "About",
            );

        ?>
        <div class="row header-content">
            <div class="column-12">
                <?php echo "$FirstName ". "$LastName"?>
            </div>
        </div> 
        <!-- end of div: header -->
        <div class="row">
            <div class="column-3 border-profile">
                <div class="row">
                    <div class="column-12">
                        <img src="login_logo.png"/>
                    </div>
                </div>
                <div class="row">
                    <div class="column-12">
                        <p>Name: <?php echo "$FirstName ". "$LastName"?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 menu">
                        <ul>
                            <?php foreach ($Menu as $menu ){ ?>
                                <li>
                                    <?php echo $menu; ?>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            
            </div> 
            <div class="column-9">
                <div class="row">
                    <?php foreach ($ProgrammingSubjects as $subject) { ?>
                        <div class="column-4 menu">
                            <div class="border-subjects">
                                <div class="row">
                                    <div class="column-12">
                                        <img src="<?php echo $subject['logo']; ?>"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="column-12">
                                        <ul>
                                            <li class="subject">
                                                <?php echo $subject['title']; ?>
                                            </li>
                                            <?php foreach ($subject['topics'] as $topic) { ?>
                                                <li>
                                                    <?php echo $topic; ?>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </body>
</html>