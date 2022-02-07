<!doctype html>
<html>
<?php $pagetitle = "Starting the Game"; //ページのタイトルを記入します ?>
<?php $pagecategory = "Game Basics"; //ページのカテゴリ名を記入します ?>
<?php $directory = "../"; ?>
<?php $titspace = "｜"; ?><?php include('../inc/head.php') ?>
<?php include('../inc/body_page.php') ?>
<?php include('../inc/pagetit.php') ?>
			<nav class="pagenav"><a href="#1">Title Menu</a></nav>
    </div>
  </header>

	<div class="content1" id="1">
		<div class="box1">
			<h3 class="tit_l"><span>Title Menu</span></h3>
			<div class="boxmin">
			  <p class="text">Press any button after the game launches to see the title menu. Select a category and confirm your choice with the A Button.</p>
				<p class="img_m"><img src="../img/ph/03-01.png" alt="Title Menu"></p>
				<dl class="table1">
					<dt>New Game</dt>
					<dd>Start the game from the very beginning.</dd>
					<dt>Continue</dt>
					<dd>Continue playing from a save file.</dd>
					<dt>Voice Actor Commentary</dt>
					<dd>Listen to commentary from the cast’s Japanese voice actors.</dd>
					<dt>Online Manual</dt>
					<dd>Opens the online manual.</dd>
				</dl>
				<div class="column chui">
					<div class="box_col">
						<div class="box_col2">
							<strong><span>Saving Your Game</span></strong>
							<p>This game autosaves during your adventures, and you can save manually by using the diary in your room or interacting with save points. You have 20 save files in addition to the autosave data.</p>
						</div>
					</div>
					<p class="box_chui">* A spinning flower appears when autosaving. Please don’t turn off the game when you see this flower or you may lose your progress.&nbsp;</p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include('../inc/menu_btn.php') ?>
<?php include('../inc/btn_pagetop.php') ?>
<?php include('../inc/footer.php') ?>
