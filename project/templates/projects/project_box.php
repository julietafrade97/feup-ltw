<?php foreach($projects as $project) {?>
<div class="project_box">
    <h1>
        <?php echo $project['Name']?>
    </h1>
    <p>
        <?php echo $project['Description']?>
    </p>
    <div class="tiny_members">
        <img class="member" src="../assets/portrait.png" alt="Project Member">
        <img class="member" src="../assets/portrait.png" alt="Project Member">
        <img class="member" src="../assets/portrait.png" alt="Project Member">
        <img class="member" src="../assets/portrait.png" alt="Project Member">
    </div>
    <a href="project.php?project_id=<?php echo $project['ID']?>">
        <span class="lnr lnr-chevron-right-circle"></span>
    </a>
</div>
<?php }?>