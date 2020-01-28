<footer class="main-footer">
	<span> جميع الحقوق محفوظة &copy; <?php echo date('Y'); ?> - <b>NOUR</b> MEDIA
		<a data-fancybox="gallery"
		   data-caption="NOUR MEDIA"
		   href={{ url("media\nour media\nour media.png") }}>
			<img src="{{ url("media\\nour media\\nour media.png") }}"
			     alt="{{ url("media\\nour media\\nour media.png") }}"
			     style="width: 25px; height: 25px">
		</a>
	</span>
	<div class="pull-left hidden-xs">
		<strong>Version</strong> 1.0.1

	</div>
</footer>

@include('admin.layouts.script')

</body>
</html>
