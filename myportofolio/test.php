<html>
	<head>
		<style type="text/css">
			.horizontal-scroll-wrapper {
			  width: 100px;
			  height: 300px;
			  overflow-y: auto;
			  overflow-x: hidden;
			  transform: rotate(-90deg);
			  transform-origin: right top;
			  transform:rotate(-90deg) translateY(-100px);
			}
			.horizontal-scroll-wrapper > div {
			  width: 100px;
			  height: 100px;
			  transform: rotate(90deg);
			  transform-origin: right top;
			}
			.squares {
			  padding: $finalHeight 0 0 0;
			  & > div {
			    width: $finalHeight;
			    height: $finalHeight;
			    margin: 10px 0;
			  }
			}
		</style>

	</head>
	<body>
		<div class="horizontal-scroll-wrapper squares">
		  <div>item 1</div>	
		  <div>item 2</div>
		  <div>item 3</div>
		  <div>item 4</div>
		  <div>item 5</div>
		  <div>item 6</div>
		  <div>item 7</div>
		  <div>item 8</div>
		</div>
	</body>
</html>