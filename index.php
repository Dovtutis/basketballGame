<?php
include ('./const/constants.php');
include ('./Class/Player.php');
include ('./Class/Team.php');
include ('./Class/Match.php');

$match = new Match();
$team = new Team();
$player = new Player();
//'<pre>';
//print_r($match);
//'</pre>';
$teams = $match->getTeams();
$team1 = $teams[0]['team1'];
$team2 = $teams[0]['team2'];
$team1Players = $team1->getPlayersArray();
$team2Players = $team2->getPlayersArray();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basketball Match</title>
    <link rel="stylesheet" type="text/css" href="assets/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
</head>
<body>
    <div>
        <div class="biggerText"><?php echo $match->getDate() . ' ' . $match->getTime()?></div>
        <div class="biggerText"><?php echo $match->getLocation()?></div>
        <div class="gameContainer">
            <div class="teamBox">
                <div>
                    <img src="<?php print $team1->getTeamLogo()?>" alt="">
                </div>
                <div class="teamInformationBox">
                    <div>
                        Team name: <?php print $team1->getTeamName()?>
                    </div>
                    <div>
                        Coach: <?php print $team1->getCoachName()?>
                    </div>
                </div>
                <div>
                    <table>
                        <thead>
                            <tr>
                                <th>Player Name</th>
                                <th>Player Height in cm</th>
                                <th>Player Position</th>
                                <th>Player Shirt Number</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php foreach ($team1Players as $player):?>
                                    <tr>
                                        <td>
                                            <?php echo $player->getName() . ' ' . $player->getLastname() ?>
                                        </td>
                                        <td>
                                            <?php echo $player->getHeight()?>
                                        </td>
                                        <td>
                                            <?php echo $player->getPosition()?>
                                        </td>
                                        <td>
                                            <?php echo $player->getNumber()?>
                                        </td>
                                    </tr>
                                <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="teamBox">
                <div>
                    <img src="<?php print $team2->getTeamLogo()?>" alt="">
                </div>
                <div class="teamInformationBox">
                    <div>
                        Team name: <?php print $team2->getTeamName()?>
                    </div>
                    <div>
                        Coach: <?php print $team2->getCoachName()?>
                    </div>
                </div>
                <div>
                    <table>
                        <thead>
                        <tr>
                            <th>Player Name</th>
                            <th>Player Height in cm</th>
                            <th>Player Position</th>
                            <th>Player Shirt Number</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($team2Players as $player):?>
                            <tr>
                                <td>
                                    <?php echo $player->getName() . ' ' . $player->getLastname() ?>
                                </td>
                                <td>
                                    <?php echo $player->getHeight()?>
                                </td>
                                <td>
                                    <?php echo $player->getPosition()?>
                                </td>
                                <td>
                                    <?php echo $player->getNumber()?>
                                </td>
                            </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
