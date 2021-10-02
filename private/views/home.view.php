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
			<div class="content"><span>Software innovation is dead, and Byteskill tries to mitigate that. Where we share software that tries to bring back that innovation we have lost. Yet, Byteskill is much more than that it's a learning platform. We don't care if the software you've been developing has released onto the Byteskill network. We want you to learn from the software you've been developing. Byteskill provides learning resources and tools to make you a better programmer.</span></div>
			<span class="github-button"><button type="button" onclick="goToGithub();">Our Github</button></span>
		</span>
	</div>
</div>

<div class="section-3">
	<div class="projects-container">
		<div class="projects-left">
			<span class="content">
				<div class="title"><span>Projects</span></div>
				<div class="subtitle"><span>At byte<invert-text>skill</invert-text> we strive to make our products the best they can be!<span></div>
				<div class="text"><span>Through out the development of every single one of our projects, we make sure that we follow the best standards to make our code the clearest it can be. We strive to do this while constantly keeping to our motto of mitigating dead software innovation and keeping to be far, far more than just a learning platform. Every single one of our projects and pieces of software will comply to FOSS standards for we want all to be able to learn and access our porjects and software to be able to learn and innovate from it. And to also contribute and push our ideas and desires to push software innovation to an all time high</span></div>
			</span>
		</div>
		<div class="projects-right">
			<ul id="lightSlider">
				<li>
					<img src="https://picsum.photos/400/400" alt="Project A Preview Image">
					<h3>Project A</h3>
					<p>Lorem ipsum Cupidatat quis pariatur anim.</p>
					<form method="GET" action="#project-a">
						<input type="submit" value="More Information">	
					</form>
				</li>
				<li>
					<img src="https://picsum.photos/400/400" alt="Project B Preview Image">
					<h3>Project B</h3>
					<p>Lorem ipsum Excepteur amet adipisicing fugiat velit nisi.</p>
					<form method="GET" action="#project-a">
						<input type="submit" value="More Information">	
					</form>
				</li>
				<li>
					<img src="https://picsum.photos/400/400" alt="Project C Preview Image">
					<h3>Project C</h3>
					<p>Lorem ipsum Cupidatat quis pariatur anim.</p>
					<form method="GET" action="#project-a">
						<input type="submit" value="More Information">	
					</form>
				</li>
				<li>
					<img src="https://picsum.photos/400/400" alt="Project D Preview Image">
					<h3>Project D</h3>
					<p>Lorem ipsum Excepteur amet adipisicing fugiat velit nisi.</p>
					<form method="GET" action="#project-a">
						<input type="submit" value="More Information">	
					</form>
				</li>
				<li>
					<img src="https://picsum.photos/400/400" alt="Project E Preview Image">
					<h3>Project E</h3>
					<p>Lorem ipsum Cupidatat quis pariatur anim.</p>
					<form method="GET" action="#project-a">
						<input type="submit" value="More Information">	
					</form>
				</li>
				<li>
					<img src="https://picsum.photos/400/400" alt="Project F Preview Image">
					<h3>Project F</h3>
					<p>Lorem ipsum Excepteur amet adipisicing fugiat velit nisi.</p>
					<form method="GET" action="#project-a">
						<input type="submit" value="More Information">	
					</form>
				</li>
			</ul>
		</div>
	</div>
</div>

<?php $this->view('includes/footer', ['__js'=>$_js]) ?>
