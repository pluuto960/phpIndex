<?php
echo "<h2>GIT CMD käsurida</h2>";
echo "<ol>";
?>
<li><pre>
git init - uus repo
git config --global user.name "pluuto960"
git config --global user.email "radzoffical@gmail.com"
git config --global --list

    </pre>
</li>
<li>
<pre>
//ssh võti loomine
 ssh-keygen -o -t rsa -C "radzoffical@gmail.com"
 //võti salvestatakse opilane/.ssh kausta
 //id_rsa.pub tuleb kopeeerida oma git hub -reposse
</pre>
</li>
<li> lisa jälgimisele ja commiti loomine -
    <pre>
     git add .
     git commit -a -m "on loodud phpIndex"
    </pre>
</li>

<li>
    <pre>
    git remote remove origin
    git remote add origin git@github.com:IrinaMerkulova/phpIndexTarpe24.git
    git branch -M main
    git push -u origin main>"
    </pre>
</li>