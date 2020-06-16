<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<? $this->getHead(); ?>
	<!--Global Platform CSS-->
	<link rel="stylesheet" href="http://www.anm22.it/app/webbase/framework/css/anm22_wb_fw.css">
	<!-- Font -->

	<!--Proper theme CSS files-->
	<link rel="stylesheet" href="<?=$this->getThemeFolderRelativeHTMLURL()?>css/style.min.css">
	<link rel="stylesheet" href="<?=$this->getThemeFolderRelativeHTMLURL()?>css/magnific-popup.css">
	<!--Favicons-->
	<? @include $this->getThemeFolderRelativePHPURL().'icons.php'; ?>
	<!--JQuery-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<!--Customized JS files-->
	<script src="<?=$this->getThemeFolderRelativeHTMLURL()?>js/graphics.min.js"></script>
	<script src="<?=$this->getThemeFolderRelativeHTMLURL()?>js/jquery.magnific-popup.min.js"></script>
	<script src="<?=$this->getThemeFolderRelativeHTMLURL()?>js/jquery.cookie.min.js"></script>
	<script src="<?=$this->getThemeFolderRelativeHTMLURL()?>js/cookies.min.js"></script>
<style>
body{
	margin: 0;
        padding: 0;
}
html{
	margin: 0;
        padding: 0;
}
</style>
</head>
<body>
	<div class="cookie_banner" style="display: none; width: 96%; margin: 0;
    padding: 3px 2%; color: #fff; background-color: #000; position: fixed; top: 0; z-index: 1000">
    <? if($this->language == "it"){ ?>
			Il nostro sito web utilizza cookie per raccogliere dati statistici anonimi sulla navigazione, rispettando la privacy dei tuoi dati personali. Utilizzando il nostro sito web, accetti l'utilizzo dei cookie secondo le modalità descritte nella nostra policy. <span style="color: #aaa; font-weight: bold; text-decoration: none; cursor: pointer; text-transform: none;" class="got_it">Ho capito</span> - <a href="#" style="color: #aaa; font-weight: bold; text-decoration: none; text-transform: none;">Cookie policy</a><? } else { ?>This website uses cookies to help us give you the best experience when you visit our website. By continuing to use this website, you consent to our use of these cookies. Find out more about how we use cookies and how to manage them by reading our cookie notice. <span style="color: #aaa; font-weight: bold; text-decoration: none; cursor: pointer; text-transform: none;" class="got_it">OK</span> - <a href="#<?=$this->language?>/cookie/" style="color: #aaa; font-weight: bold; text-decoration: none; text-transform: none;">Cookie notice</a>
			<?}?>
  	</div>
    <!-- <p class="platform">Cookie Banner</p> -->
	<div id="panoramic_div_header">
		<? if ($this->layout_header == 1) {?><header><? $this->showContainer('h'); ?>
		</header><? }?>
	</div>
	<div class="pagebody">
		<div id="additional_div">
				<?
				/* Left Side */
				if ($this->layout_leftside == 1)
				{
					if (($this->layout_leftside == 1) and ($this->layout_rightside == 1))
					{
						?>
						<aside id="leftside" class="anm22_wb_fw_div_col_xl_3 anm22_wb_fw_div_col_sm_12">
						<?
					}
					else
					{
						?>
						<aside id="leftside" class="anm22_wb_fw_div_col_xl_4 anm22_wb_fw_div_col_sm_12">
						<?
					}
					?>
						<div class="padding_div">
							<? $this->showContainer('l'); ?>
						</div>
						<div class="anm22_wb_fw_clear"></div>
					</aside>
					<?
				}?>
				<?
				/* Section */
				if (($this->layout_leftside != 1) and ($this->layout_rightside != 1))
				{
					?>
					<section class="anm22_wb_fw_div_col_xl_12">
					<?
				}
				else
				if (($this->layout_leftside == 1) and ($this->layout_rightside == 1))
				{
					?>
					<section class="anm22_wb_fw_div_col_xl_6 anm22_wb_fw_div_col_sm_12">
					<?
				}
				else
				if ((($this->layout_leftside != 1) and ($this->layout_rightside == 1)) or (($this->layout_leftside == 1) and ($this->layout_rightside != 1)))
				{
					?>
					<section class="anm22_wb_fw_div_col_xl_8 anm22_wb_fw_div_col_sm_12">
					<?
				}
				?>
					<div class="padding_div">
						<? $this->showContainer('b'); ?>
					</div>
					<div class="anm22_wb_fw_clear"></div>
				</section>
				<?
				if ($this->layout_rightside == 1)
				{
					if (($this->layout_leftside == 1) and ($this->layout_rightside == 1))
					{
						?>
						<aside id="rigthside" class="anm22_wb_fw_div_col_xl_3 anm22_wb_fw_div_col_sm_12">
						<?
					}
					else
					{
						?>
						<aside id="rigthside" class="anm22_wb_fw_div_col_xl_4 anm22_wb_fw_div_col_sm_12">
						<?
					}
					?>

						<div class="padding_div">
							<? $this->showContainer('r'); ?>
						</div>
						<div class="anm22_wb_fw_clear"></div>
					</aside>
					<?
				}
				?>
			</div>
			<div class="anm22_wb_fw_clear"></div>
		</div>
		<div class="anm22_wb_fw_clear"></div>

		<?
		if ($this->layout_footer == 1)
		{
		?>
		<div id="panoramic_div_footer">
			<footer>
				<div class="com_anm22_wb_template_fsal_footer_conteiner">
					<? $this->showContainer('f'); ?>
				</div>
				<div class="anm22_wb_fw_clear"></div>
			</footer>
		</div>
		<?
	}
	?>
	</div>
	<div class="anm22_wb_fw_clear"></div>
</body>
</html>
