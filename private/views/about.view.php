<?php $this->view('includes/header', ['_title'=>$title, '__css'=>$_css]) ?>
<?php $this->view('includes/navbar') ?>

<div class="section">
    <span class="logo"><img src="assets/images/logo/logo.png"></span>
    <div class="about-container">
		<span class="content">
			<div class="title"><span>About Us</span></div>
			<div class="subtitle"><span>Byteskill is an organization full of programmers who try to get out of their usual zone and build useful and efficient software while respecting the unix philosophy.</span></div>
			<div class="content-title"><span>Our Goal</span></div>
			<div class="content"><span>Software innovation is dead, and Byteskill tries to mitigate that. Where we share software that tries to bring back that innovation we have lost. Yet, Byteskill is much more than that it's a learning platform. We don't care if the software you've been developing has released onto the Byteskill network. We want you to learn from the software you've been developing. Byteskill provides learning resources and tools to make you a better programmer.</span></div>
			<span class="github-button"><button type="button" onclick="goToGithub();">Our Github</button></span>
		</span>
	</div>
</div>

<?php $this->view('includes/footer', ['__js'=>$_js]) ?>
