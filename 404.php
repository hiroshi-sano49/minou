<?php get_header(); ?>
	<style>
		#cotnents {
			margin: 0 auto;
			padding: 105px 0;
		}
		.code-block {
			text-align: center;
			vertical-align: middle;
			margin-bottom: 50px;
		}
		.code-block h1 {
			display: inline-block;
			padding-left: 143px;
			font-size: 12em;
			font-weight: normal;
			vertical-align: middle;
			color: rgb(217,217,217);
			background: url("<?php bloginfo('template_directory'); ?>/404.png") left center no-repeat;
		}
		.code-block p {
			display: inline-block;
			font-size: 3em;
			color: rgb(217,217,217);
			vertical-align: middle;
		}
		.message-heading {
			font-size: 1.46em;
			margin-bottom: 16px;
			text-align: center;
		}
		.message-txt li {
			margin-bottom: 0.5em;
			text-align: center;
		}
	</style>
	<div id="cotnents">
		<div class="code-block">
			<h1>404</h1>
			<p>ERROR</p>
		</div>
		<p class="message-heading">指定されたページまたはファイルは存在しません。</p>
		<ul class="message-txt">
			<li>・URL、ファイル名にタイプミスがないかご確認ください。</li>
			<li>・指定されたページは削除されたか、移動した可能性があります。</li>
		</ul>
	</div>
<?php get_footer(); ?>