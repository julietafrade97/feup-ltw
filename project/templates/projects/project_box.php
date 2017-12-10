<?php foreach($projects as $project) {?>
    <div id="project_box">
        <h1><?php echo $project['Name']?></h1>
        <p><?php echo $project['Description']?></p>
        <div id="tiny_members">
            <img class="member" src="../assets/portrait.png" alt="Project Member">
            <img class="member" src="../assets/portrait.png" alt="Project Member">
            <img class="member" src="../assets/portrait.png" alt="Project Member">
            <img class="member" src="../assets/portrait.png" alt="Project Member">
            <p>...</p>
        </div>
        <a href="project.php?project_id=<?php echo $project['ID']?>">
            <button>
                <span class="lnr lnr-chevron-right-circle"></span>
            </button>
        </a>
    </div>
<?php }?>