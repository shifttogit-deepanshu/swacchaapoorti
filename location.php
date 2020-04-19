<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div id = "startLat"></div>
	<div id = "startLon"></div>
	<script type="text/javascript">
window.onload = function() {
  var startPos;
  var geoSuccess = function(position) {
    startPos = position;
    document.getElementById('startLat').innerHTML = startPos.coords.latitude;
    document.getElementById('startLon').innerHTML = startPos.coords.longitude;
  };
  navigator.geolocation.getCurrentPosition(geoSuccess);
};
</script>
</body>
</html>