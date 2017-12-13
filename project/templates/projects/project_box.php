<?php $i = 0; foreach($projects as $project) {?>
<div class="project_box">
    <h1>
        <?php echo htmlentities($project['Name'])?>
    </h1>
    <p>
        <?php echo htmlentities($project['Description'])?>
    </p>
    <div class="tiny_members">
        <?php for($j=0; $j<count($users[$i]); $j++) { if ($j == 5) break; ?>
            <img class="member" src="<?php echo  '../profilePictures/'. $users[$i][$j]['Photo'] ?>" alt="<?php echo $users[$i][$j]['Name']?>">
        <?php } ?>
    </div>
    <a href="project.php?project_id=<?php echo htmlentities($project['ID'])?>">
        <span class="lnr lnr-chevron-right-circle"></span>
    </a>
</div>
<?php $i++; }?>