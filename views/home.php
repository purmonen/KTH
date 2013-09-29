<div id="main-left">

<div class="section">
    <h2>About me</h2>
    <p>My name is Sami Purmonen. I'm twenty-two years old and a student
    of Computer Science at the Royal Institute of Technology.
    I have a strong interest in programming, web development and all sorts of
    computer related stuff. I'm currently looking for side jobs and side projects. 
    Feel free to contact me on my <a href="<?php echo SITE_ROOT ?>/contact/">contact page</a>.</p>
</div>

<div class="section">
<?php
echo <<<_END
<div class="post last-post">
    <h3>$title</h3>
  <p class="content">$content <a href="$SITE_ROOT/blog/">Read the blog</a></p>
</div>
_END;
?>
</div>
<div class="section">
    <p id="experience">I have experience in the following areas</p>
    <div class="list">
    <h3>Programming</h3>
        <ul>
            <li>Python</li>
            <li>Java</li>
            <li>Haskell</li>
            <li>C</li>
            <li>Prolog</li>
            <li>PHP</li>
        </ul>  
    </div>
    <div class="list">
    <h3>Web development</h3>
        <ul>
            <li>HTML</li>
            <li>CSS</li>
            <li>Javascript</li>
            <li>MySQL</li>
            <li>Google App Engine</li>
        </ul>
    </div>
    <div class="list">
    <h3>Other knowledge</h3>
        <ul>
            <li>Linux</li>
            <li>OS X</li>
            <li>Shell scripting</li>
        </ul>
    </div>
</div>

</div>

<div id="main-right">
	<img src="<?php echo IMG_ROOT ?>/me.jpg" height="150" alt="" id="me">
	<h2>Info</h2>
    <p><span class="attribute">Name:</span> Sami Purmonen</p>
    <p><span class="attribute">Born:</span> 1990</p>
    <p><span class="attribute">Country:</span> Sweden</p>
    <p><span class="attribute">Education:</span> KTH, M.Sc. in Computer Science and Engineering</p>
</div>