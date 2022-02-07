<!doctype html>
<html>
<?php $pagetitle = "Battling Monsters"; //ページのタイトルを記入します ?>
<?php $pagecategory = "Exploration"; //ページのカテゴリ名を記入します ?>
<?php $directory = "../"; ?>
<?php $titspace = "｜"; ?>
<?php include('../inc/head.php') ?>
<?php include('../inc/body_page.php') ?>
<?php include('../inc/pagetit.php') ?>
			<nav class="pagenav"><a href="#1">Battle Basics</a><a href="#2">Battle Actions</a><a href="#3">Status Ailments</a></nav>
    </div>
  </header>

	<div class="content1 spacer2" id="1">
		<div class="box1">
			<h3 class="tit_l"><span>Battle Basics</span></h3>
			<div class="boxmin">
			  <p class="text">You’ll encounter all sorts of monsters while exploring different areas and dungeons. Approach them with a weapon equipped and press the B Button to attack, then trade blows until you emerge victorious.</p>
				<p class="img_m"><img src="../img/ph/10-01.png" alt="Battle Basics"></p>
				<h4 class="tit_m"><span>Weapon Types</span></h4>
				<p class="text">Choose from seven different weapon types, each with their own unique actions. Fighting with a particular weapon will increase the corresponding weapon skill level.</p>
				<dl class="table1">
				  <dt>Short Swords</dt>
					<dd>One-handed weapons that strike fast, handle easily, and let you use a shield.</dd>
					<dt>Long Swords</dt>
					<dd>Two-handed weapons that swing slowly but deal more damage across a wide area.</dd>
					<dt>Spears</dt>
					<dd>Stabbing weapons with a long reach.</dd>
					<dt>Axes/Hammers</dt>
					<dd>Powerful, slow-swinging weapons. Axes score more critical hits, while hammers stun enemies more often.</dd>
					<dt>Staves</dt>
					<dd>Weapons that emit magic orbs and reduce RP consumption for spells and rune abilities when equipped.</dd>
					<dt>Dual Blades</dt>
					<dd>Weapons that you equip in each hand to unleash a flurry of lightning-quick attacks.</dd>
					<dt>Fists</dt>
					<dd>Weapons that fit over your hands. They have a short reach but let you hurl enemies and deal rapid-fire attacks.</dd>
				</dl>
				<h4 class="tit_m"><span>Throwing Techniques</span></h4>
				<p class="text">Grab staggered enemies with fists equipped to execute a throwing technique.</p>
				<dl class="table1 half">
				  <dt><span>Pound</span><span>B Button</span></dt>
					<dd>Smash an enemy against the ground.</dd>
					<dt><span>Swing</span><span>X/Y Button</span></dt>
					<dd>Send an enemy flying.</dd>
					<dt><span>Slam</span><span>A Button</span></dt>
					<dd>Throw down an enemy to deal damage in a wide radius.</dd>
				</dl>      
			</div>
		</div>
	</div>

	<div class="content2 spacer2" id="2">
		<div class="box1">
			<h3 class="tit_l"><span>Battle Actions</span></h3>
			<div class="boxmin">
			  <p class="text">Increase your weapon skill levels to unlock new actions, such as combo attacks and charge attacks.</p>
				<p class="img_m"><img src="../img/ph/10-02.png" alt="Battle Actions"></p>
				<div class="column chui">
					<div class="box_col">
						<div class="box_col2">
							<strong><span>Using Your Spell Seal</span></strong>
							<p>Throw your spell seal with the ZL Button to catch hold of an enemy. This stops them in their tracks and lets you swipe items. You can throw your spell seal again after its cooldown timer expires.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="content1" id="3">
		<div class="box1">
			<h3 class="tit_l"><span>Status Ailments</span></h3>
			<div class="boxmin">
			  <p class="text">Monster attacks inflict various status ailments that can be cured with plants or medicine. You risk catching a cold if you stay up too late, so always keep one eye on the clock!</p>
				<dl class="table1 icon2">
				  <dt>Poison<br><i><img src="../img/ic/10-03_do01.png" alt="Poison icon"></i><i><img src="../img/ic/10-03_do02.png" alt="Poison"></i></dt>
					<dd>Saps 3% of your max HP every three seconds.</dd>
					<dt>Sealed<br><i><img src="../img/ic/10-04_fu01.png" alt="Sealed icon"></i><i><img src="../img/ic/10-04_fu02.png" alt="Sealed"></i></dt>
					<dd>Prevents you from using magic or rune abilities, except for Medi-related spells.</dd>
					<dt>Paralysis<br><i><img src="../img/ic/10-05_ma01.png" alt="Paralysis icon"></i><i><img src="../img/ic/10-05_ma02.png" alt="Paralysis"></i></dt>
					<dd>Makes it impossible to run.</dd>
					<dt>Sleep<br><i><img src="../img/ic/10-06_su01.png" alt="Sleep icon"></i><i><img src="../img/ic/10-06_su02.png" alt="Sleep"></i></dt>
					<dd>Stops you from moving for five seconds.</dd>
					<dt>Fatigue<br><i><img src="../img/ic/10-07_hi01.png" alt="Fatigue icon"></i><i><img src="../img/ic/10-07_hi02.png" alt="Fatigue"></i></dt>
					<dd>Makes every action cost twice as much RP.</dd>
					<dt>Cold<br><i><img src="../img/ic/10-08_byo01.png" alt="Cold icon"></i><i><img src="../img/ic/10-08_byo02.png" alt="Cold"></i></dt>
					<dd>Drains 0.5% of your max RP every three seconds.</dd>
					<dt>Stun<br><i><img src="../img/ic/10-09_piyo01.png" alt="Stun icon"></i></dt>
					<dd>Renders you immobile for five seconds.</dd>
				</dl>
				<div class="column chui">
					<div class="box_col">
						<div class="box_col2">
							<strong><span>Recovering HP/RP</span></strong>
							<p>Use food and medicine when your HP/RP starts getting low. Standing still gradually recovers RP over time, and taking a dip in the inn’s baths or sleeping in your bed fully restores HP/RP.</p>
					  </div>
				  </div>
			  </div>
			</div>
		</div>
	</div>

</section>

<?php include('../inc/menu_btn.php') ?>
<?php include('../inc/btn_pagetop.php') ?>
<?php include('../inc/footer.php') ?>
