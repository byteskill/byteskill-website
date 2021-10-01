<?php $this->view('includes/header', ['_title'=>$title, '__css'=>$_css]) ?>

<div class="section-1">
	<div class="header-container">
		<span class="logo"><img src="assets/images/logo/logo.png"></span>
		<div class="left">
			<span class="main-title"><accent-text>Welcome,</accent-text>to byte<invert-text>skill</invert-text></span><br>
			<span class="subtitle">byte<invert-text>skill</invert-text> is an organization full of programmers who try to<br>get out of their confort zone and build useful and efficient<br>software.</span><br>
			<span class="about-button"><button type="button" onclick="moveToAbout();">About Us</button></span>
		</div>
	</div>
</div>

<div class="section-2">
	<div class="about-container">
		<span class="content">
			<div class="title"><span>About Us</span></div>
			<div class="subtitle"><span>Byteskill is an organization full of programmers who try to get out of their usual zone and build useful and efficient software while respecting the unix philosophy.</span></div>
			<div class="content-title"><span>Our Goal</span></div>
			<div class="content"><span>Software innovation is dead, and Byteskill tries to mitigate that. where we share software that tries to bring back that innovation we have lost. Yet, Byteskill is much more than that it's a learning platform. We don't care if the software you've been developing has released onto the Byteskill network. We want you to learn from the software you've been developing. Byteskill provides learning resources and tools to make you a better programmer.</span></div>
			<span class="github-button"><button type="button" onclick="gotoGithub();">Our Github</button></span>
		</span>
	</div>
</div>

<div class="section-3">
	<div class="projects-left">

	</div>
	<div class="projects-right">
		<ul id="light-slider">
			<li data-thumb="http://sachinchoolur.github.io/lightslider/img/thumb/cS-1.jpg">
				<img src="http://sachinchoolur.github.io/lightslider/img/cS-1.jpg" />
			</li>
			<li data-thumb="http://sachinchoolur.github.io/lightslider/img/thumb/cS-2.jpg">
				<img src="http://sachinchoolur.github.io/lightslider/img/cS-2.jpg" />
			</li>
			<li data-thumb="http://sachinchoolur.github.io/lightslider/img/thumb/cS-3.jpg">
				<img src="http://sachinchoolur.github.io/lightslider/img/cS-3.jpg" />
			</li>
			<li data-thumb="http://sachinchoolur.github.io/lightslider/img/thumb/cS-4.jpg">
				<img src="http://sachinchoolur.github.io/lightslider/img/cS-4.jpg" />
			</li>
			<li data-thumb="http://sachinchoolur.github.io/lightslider/img/thumb/cS-5.jpg">
				<img src="http://sachinchoolur.github.io/lightslider/img/cS-5.jpg" />
			</li>
			<li data-thumb="http://sachinchoolur.github.io/lightslider/img/thumb/cS-6.jpg">
				<img src="http://sachinchoolur.github.io/lightslider/img/cS-6.jpg" />
			</li>
			<li data-thumb="http://sachinchoolur.github.io/lightslider/img/thumb/cS-7.jpg">
				<img src="http://sachinchoolur.github.io/lightslider/img/cS-7.jpg" />
			</li>
			<li data-thumb="http://sachinchoolur.github.io/lightslider/img/thumb/cS-8.jpg">
				<img src="http://sachinchoolur.github.io/lightslider/img/cS-8.jpg" />
			</li>
			<li data-thumb="http://sachinchoolur.github.io/lightslider/img/thumb/cS-9.jpg">
				<img src="http://sachinchoolur.github.io/lightslider/img/cS-9.jpg" />
			</li>
			<li data-thumb="http://sachinchoolur.github.io/lightslider/img/thumb/cS-10.jpg">
				<img src="http://sachinchoolur.github.io/lightslider/img/cS-10.jpg" />
			</li>
			<li data-thumb="http://sachinchoolur.github.io/lightslider/img/thumb/cS-11.jpg">
				<img src="http://sachinchoolur.github.io/lightslider/img/cS-12.jpg" />
			</li>
			<li data-thumb="http://sachinchoolur.github.io/lightslider/img/thumb/cS-13.jpg">
				<img src="http://sachinchoolur.github.io/lightslider/img/cS-13.jpg" />
			</li>
		</ul>
	</div>
</div>

<?php $this->view('includes/footer', ['__js'=>$_js]) ?>
